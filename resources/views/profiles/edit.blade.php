@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Modifier mes informtions</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('profiles.update', ['user' => $user]) }}" enctype="multipart/form-data">
                        @csrf

                        @method('PATCH')

                        <div class="form-group ">
                            <label for="title" >Title</label>

                            
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title }}" autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group ">
                            <label for="description" >Description</label>

                            
                                <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description"  autocomplete="description" autofocus>{{ old('description') ?? $user->profile->description }}</textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>
                        <div class="form-group ">
                            <label for="url" >Url</label>

                            
                                <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') ?? $user->profile->url }}" autocomplete="url" autofocus>

                                @error('url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                            <div class="form-group">

                                <div class="custom-file">
                                    <input type="file" name='image' class="custom-file-input @error('image') is-invalid @enderror" id="validatedCustomFile" >
                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                  </div>
                            </div>

                        
                       
                                <button type="submit" class="btn btn-primary">
                                    Modifier mes information
                                </button>
                        
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
