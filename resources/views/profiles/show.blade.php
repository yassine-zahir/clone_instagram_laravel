@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4 text-center">
        <img src="{{ $user->profile->getImage()}}"  class="rounded-circle w-100" style="max-width: 230px">
    
        </div>
        <div class="col-8">
            <div class="d-flex mt-3 align-items-baseline">
    
                <h4 class="mr-3 pt-2">{{$user->username}}</h4>
            <follow-button profile-id="{{ $user->profile->id 
            
            }}" follows=" {{ $follows}}"></follow-button>

            </div>
            <div class="d-flex mt-3">
    
 
            <div class="mr-3"><strong>{{ $postsCount }}</strong>publiction</div>
                <div class="mr-3"><strong>{{  $followersCount }}</strong>abonnés</div>
                <div class="mr-3"><strong>{{  $followingCount }}</strong>abonnements</div>
            </div>

            @can('update', $user->profile)

            <a href="{{ route('profiles.edit', [auth()->user()->username ])}}" class="btn btn-outline-secondary mt-3">Modifier mes information</a>

            @endcan
            <div class="mt-3 ">
                <div>
                    <strong>{{ $user->profile->title }}</strong>
                </div>
                <div>
                    {{ $user->profile->description }}
                </div>
                <a href="#">{{ $user->profile->url }} </a>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach ($user->posts as $post)
        <div class="col-4 mt-5">
        <a href="{{ route('posts.show', ['post' => $post->id])}}"><img src="{{ asset('storage').'/'. $post->image }}" class="w-100"></a>
        </div>
            
        @endforeach
       
    </div>
</div>
@endsection
