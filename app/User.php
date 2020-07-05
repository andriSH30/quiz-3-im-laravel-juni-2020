<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $guarded = ['id'];

    public function artikel(){
        return $this->hasMany('App\Artikel');
    }

    public function tag(){
        return $this->hasMany('App\Tag');
    }

    public function follow(){
        return $this->belongsToMany('App\Follow')->withPivot('status');
    }
}
