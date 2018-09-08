<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Thread extends Model
{
    use SoftDeletes;

    protected $fillable = ['subject', 'type'];

    protected $dates = ['deleted_at'];

    protected $appends = ['latest_message', 'unread_messages_amount'];

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function getLatestMessageAttribute()
    {
        return $this->messages()->latest()->first();
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot(['last_read_at']);
    }

    public function creator()
    {
        return $this->messages()->oldest()->first()->user;
    }

    public static function getAllLatest()
    {
        return self::latest('updated_at');
    }

    public function usersForActiveThreadList()
    {
        return $this->belongsToMany(User::class, 'thread_lists');
    }

    public function getUnreadMessagesAmountAttribute()
    {
        $users = $this->users;
        $data = [];
        foreach ($users as $user) {
            if (null == $user->pivot->last_read_at) {
                $data[$user->id] = $this->messages()->count();
            } else {
                $data[$user->id] = $this->messages()->where('created_at', '>', $user->pivot->last_read_at)->count();
            }
        }

        return $data;
    }
}
