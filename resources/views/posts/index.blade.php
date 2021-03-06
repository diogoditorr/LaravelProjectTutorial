@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($posts as $post)
            <div>
                <img src="/storage/{{ $post->image }}" alt="">
            </div> 

            <div>
                <div>
                    <div>
                        <img src="/storage/{{ $post->user->profile->image }}" alt="" class="w-72">

                        <a href="/profile/{{ $post->user->id }}">
                            {{ $post->user->username }}
                        </a>
                        <a href="#">Follow</a>
                    </div>

                    <hr>

                    <p>
                        <a href="/profile/{{ $post->user->id }}">
                            {{ $post->user->username }}
                        </a>
                        {{ $post->caption }} 
                    </p>
                </div>
            </div>
        @endforeach

        <div>
            <div>
                {{ $posts->links () }}
            </div>
        </div>
    </div>
@endsection
