<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model

{   protected $guarded = [];
    public function user(){

        return $this->belongsTo('App\User');
    }

    public function getImage(){

        $imagePath = $this->image ?? 'avatars/default.jpg';

        return "/storage/".$imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany('App\User');
    }
}
