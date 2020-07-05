<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    //
    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function tag(){
        return $this->belongsToMany('App\Tag');
    }
}
