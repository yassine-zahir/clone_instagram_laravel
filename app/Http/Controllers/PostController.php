<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Intervention\Image\Facades\Image;

use App\Post;

use App\User;

class PostController extends Controller
{   
    public function __construct()
    {   
        $this->middleware('auth');//se connecter pour avoir acces au fonctions crud
        
    }
    
    public function index(){

       $users = auth()->user()->following->pluck('user_id');

       $posts = Post::whereIn('user_id',$users)->with('user')->latest()->paginate(3);

       return view('posts.index',compact('posts'));
    }

    public function create (){
        
        return view('posts.create');
    }


    public function store(){
       $data = request()->validate([
            'legend' => ['required','string'],
            'image' => ['required','image']
            ]);

        $imagePath = request('image')->store('uploads','public');

        $image = Image::make(public_path("/storage/{$imagePath}"))->fit(1200, 1200);

        $image->save();

        auth()->user()->posts()->create([
            'legend' => $data['legend'],
            'image' => $imagePath

        ]);

        return redirect()->route('profiles.show',['user'=> auth()->user()]);
    }

    public function show(Post $post)
    {
            return view('posts.show', compact('post'));
    }

    
}
