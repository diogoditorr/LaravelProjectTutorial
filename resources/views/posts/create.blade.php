@extends('layouts.app')

@section('content')
    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
        <div>
            @csrf

            <div class="row justify-content-center w-75">
                <h1>Add New Post</h1>
            </div>

            <!-- Caption -->
            <div class="form-group row w-75">
                <label for="caption" class="col-md-4 col-form-label text-md-right">{{ __('Post Caption') }}</label>


                <div class="col-md-6">
                    <input 
                        id="caption" 
                        class="form-control @error('caption') is-invalid @enderror" 
                        type="text" 
                        name="caption"
                        value="{{ old('caption') }}" 
                        required 
                        autocomplete="caption"
                    />

                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row w-75">
                <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Post Image') }}</label>
                <input type="file" id="image" name="image" required></input>
            </div>

            <div class="row pt-4 justify-content-center w-75">
                <button>Add New Post</button>
            </div>
        </div>
    </form>
@endsection
