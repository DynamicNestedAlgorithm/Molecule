<?php

namespace App;


use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'user_type','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function threads()
    {
        return $this->belongsToMany(Thread::class)->withPivot(['last_read_at']);
    }
    public function activeThreads()
    {
        $authUser = $this;

        return $this->belongsToMany(Thread::class, 'thread_lists')
            ->whereExists(function ($query) use ($authUser) {
                $query->select(DB::raw(1))
                    ->from('thread_user')
                    ->where('thread_user.user_id', '!=', $authUser->id)
                    ->whereRaw('thread_user.thread_id = threads.id')
                    ->whereNotExists(function ($query) use ($authUser) {
                        $query->select(DB::raw(1))
                            ->from('blocks')
                            ->where([
                                ['target_id', '=', $authUser->id],
                                ['sender_id', '=', DB::raw('thread_user.user_id')],
                            ])
                            ->orWhere([
                                ['target_id', '=', DB::raw('thread_user.user_id')],
                                ['sender_id', '=', $authUser->id],
                            ]);
                    });
            });
    }

    public function getTotalUnreadMessagesCountAttribute()
    {
        /* SELECT sum(unread_count) FROM ( SELECT threads.id, count(*) AS unread_count FROM threads LEFT JOIN messages ON messages.thread_id = threads.id
        INNER JOIN thread_user ON thread_user.thread_id = threads.id WHERE thread_user.user_id = 4 AND messages.created_at >= IFNULL(thread_user.last_read_at, '') GROUP BY threads.id ) AS t1 */

        return DB::table('threads')
            ->select(DB::Raw('count(*) as unread_count'), 'threads.id')
            ->leftJoin('messages', 'messages.thread_id', '=', 'threads.id')
            ->join('thread_user', 'thread_user.thread_id', '=', 'threads.id')
            ->where('thread_user.user_id', $this->id)
            ->where('messages.created_at', '>=', DB::Raw('IFNULL(`thread_user`.`last_read_at` , "")'))
            ->groupBy('threads.id')
            ->get()
            ->sum('unread_count');
    }
}
