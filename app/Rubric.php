<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubric extends Model
{
//    public function post()
//    {
//        return $this->hasOne('App\Post');
//    }

    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
