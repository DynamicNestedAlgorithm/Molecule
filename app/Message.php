<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $touches = ['thread'];

    protected $fillable = ['thread_id', 'user_id', 'body'];

    public function thread()
    {
        return $this->belongsTo(Thread::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function recipients()
    {
        return $this->thread()->users()->where('user_id', '!=', $this->user_id);
    }
}
