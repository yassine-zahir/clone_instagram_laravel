@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Créer un post</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group ">
                            <label for="legend" >Legend</label>

                            
                                <input id="legend" type="text" class="form-control @error('legend') is-invalid @enderror" name="legend" value="{{ old('legend') }}" autocomplete="legend" autofocus>

                                @error('legend')
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
                                    Créer un post
                                </button>
                        
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
