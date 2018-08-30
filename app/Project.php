<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    protected $fillable = ['name', 'description','specification','language','deadline'];
   
    use SoftDeletes;

    protected $dates = ['deleted_at'];
}
