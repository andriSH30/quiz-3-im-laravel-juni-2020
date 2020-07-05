<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function artikel(){
        return $this->belongsToMany('App\Artikel');
    }
}
