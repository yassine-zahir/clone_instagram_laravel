<?php

namespace App\Http\Controllers;

use App\Like;
use App\Post;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store($postid,$userid){

      
        auth()->user()->likes()->create([
            'post_id' => $postid,
            'user_id' => $userid
        ]);

        
            $likes = Like::where('post_id',$postid)->count();

            return redirect()->route('profiles.show',['user'=> auth()->user()]);
            
    }
}
