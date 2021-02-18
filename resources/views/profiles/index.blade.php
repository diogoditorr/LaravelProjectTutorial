@extends('layouts.app')

@section('content')
<div class="container"></div>
    <div id="instagram-header">
        <div class="profile-photo">
            <img class="w-72" src="{{ $user->profile->profileImage() }}" alt="">
        </div>
        <div class="profile-data">
            <div class="top">
                <div>
                    {{ $user->username }}

                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                </div>

                @can('update', $user->profile)
                    <a href="/post/create">Add New Post</a>
                @endcan

            </div>

            @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            @endcan

            <div class="profile-history">
                <ul>
                    <li><b>{{ $postCount }}</b> posts</li>
                    <li><b>{{ $followersCount }}</b> followers</li>
                    <li><b>{{ $followingCount }}</b> following</li>
                </ul>
            </div>
            
            <h1 class="title">{{ $user->profile->title }}</h1>
            <span>{{ $user->profile->description }}</span>
            <a href="#">{{ $user->profile->url }}</a>
        </div>
    </div>

    <div class="instagram-posts">
        @foreach($user->posts as $post)
            <div class="instagram-post">
                <a href="/post/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" alt="">
                </a>
            </div>
        @endforeach
    </div>
@endsection
