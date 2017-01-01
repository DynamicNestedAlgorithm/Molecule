<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['name','description','lead','frontend','backend','designer','member1','member2'];
  
}
