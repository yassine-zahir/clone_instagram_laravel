@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-8">
        <img src="{{ asset('storage').'/'.$post->image }}"  class="w-100">
        </div>
        <div class="col-4">
            <h3>{{ $post->user->username}}</h3>
            <p>{{ $post->legend}}</p>
            
        </div>
    </div>
</div>
    
@endsection