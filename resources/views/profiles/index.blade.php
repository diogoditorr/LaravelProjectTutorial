<x-app-layout>
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> -->

   <!-- <x-slot name="trigger">
        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">

            <div class="ml-1">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20">
                    <path fill-rule="evenodd" d="m5.293 7.293a1 1 0 011.414 0l10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </div>
        </button>
    </x-slot>  -->

    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div> -->

    <div id="instagram-header">
        <div class="profile-photo">
            <img src="https://scontent-gru1-1.cdninstagram.com/v/t51.2885-19/s320x320/97566921_2973768799380412_5562195854791540736_n.jpg?_nc_ht=scontent-gru1-1.cdninstagram.com&_nc_ohc=_retWsCLyFUAX80A1Bb&tp=1&oh=2fb86b1a0ca7443710be797d0f9e948c&oe=6050C49F" alt="">
        </div>
        <div class="profile-data">
            <div class="top">
                {{ $user->username }}
                <a href="#">Add New Post</a>
            </div>
            <div class="profile-history">
                <ul>
                    <li><b>360</b> posts</li>
                    <li><b>65.5K</b> followers</li>
                    <li><b>295</b> following</li>
                </ul>
            </div>
            <h1 class="title">{{ $user->profile->title }}</h1>
            <span>{{ $user->profile->description }}</span>
            <a href="#">{{ $user->profile->url }}</a>
        </div>
    </div>

    <div class="instagram-posts">
        <div class="instagram-post">Photo</div>
        <div class="instagram-post">Photo</div>
        <div class="instagram-post">Photo</div>
    </div>
</x-app-layout>
