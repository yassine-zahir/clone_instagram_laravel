<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   
     protected $guarded = [];
    // protected $fillable = ['post_id','user_id'];
    public function user(){

        return $this->belongsTo('App\User');
    }

    public function likes(){

        return $this->hasMany('App\Like');

    }
}
