@extends('layouts.app')

@section('content')
    <form action="/profile/{{ $user->id }}" method="POST" enctype="multipart/form-data">
        <div class="">
            @method('PATCH')
            @csrf

            <div class="row justify-content-center w-75">
                <h1>Edit Profile</h1>
            </div>

            <!-- Title -->
            <div class="form-group row w-75">
                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                <div class="col-md-6">
                    <input 
                        id="title" 
                        class="form-control @error('title') is-invalid @enderror" 
                        type="text" 
                        name="title"
                        value="{{ old('title') ?? $user->profile->title }}" 
                        required 
                        autocomplete="title" 
                    />

                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            
            <!-- Description -->
            <div class="form-group row w-75">
                <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                <div class="col-md-6">
                    <input 
                        id="description" 
                        class="form-control @error('description') is-invalid @enderror" 
                        type="text" 
                        name="description"
                        value="{{ old('description') ?? $user->profile->description }}" 
                        required 
                        autofocus 
                    />
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <!-- URL -->
            <div class="form-group row w-75">
                <label for="url" class="col-md-4 col-form-label text-md-right">{{ __('URL') }}</label>

                <div class="col-md-6">
                    <input 
                        id="url" 
                        class="form-control @error('url') is-invalid @enderror" 
                        type="text" 
                        name="url"
                        value="{{ old('url') ?? $user->profile->url }}" 
                        required 
                        autofocus 
                    />

                    @error('url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row w-75">
                <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Profile Image') }}</label>

                <input type="file" id="image" name="image"></input>
            </div>

            <div class="row pt-4 justify-content-center w-75">
                <button>Save Profile</button>
            </div>
        </div>
    </form>
@endsection
