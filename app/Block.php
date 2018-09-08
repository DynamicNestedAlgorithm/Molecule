<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    public $timestamps = true;

    public function requester()
    {
        return $this->belongsTo(User::class);
    }

    public function target()
    {
        return $this->belongsTo(User::class);
    }
}
