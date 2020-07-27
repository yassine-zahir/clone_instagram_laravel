@extends('layouts.app')


@section('content')

<div class="container">
    @foreach ($posts as $post)

    <div class="row mb-4">

        <div class="col-6 offset-3">
            <a href="{{ route('posts.show', ['post' => $post->id])}}"><img src="{{ asset('storage').'/'. $post->image }}" class="w-100"></a>
            
            <div class="mt-1" >
            <a href="{{ route('like.store',['post' => $post->id, 'user' => auth()->user()->id ]) }}"> <i class="fa fa-heart fa-2x" style="color:red"></i></a>
            <div>
                {{ $post->likes->count() }}
            </div>
                
            <img src="{{ asset('/storage/avatars/default.jpg')}}" width="20px" height="20px">
            <img src="{{ asset('/storage/avatars/default.jpg')}}" width="20px" height="20px">
            <img src="{{ asset('/storage/avatars/default.jpg')}}" width="20px" height="20px">
            <img src="{{ asset('/storage/avatars/default.jpg')}}" width="20px" height="20px">
               
            </div>
            <hr>
            <div class="text-right" >
                Posté Par <strong>
                    {{ $post->user->name}} le {{ $post->created_at->format('d/m/y') }}
                </strong>
            </div>
        </div>
    </div>
        
    @endforeach

    <div class="col-12">
        <div class="row d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>

</div>
    
@endsection