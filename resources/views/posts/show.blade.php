<x-app-layout>
    <div>
        <div>
            <img src="/storage/{{ $post->image }}" alt="">
        </div> 

        <div>
            <div>
                <div>
                    <img src="/storage/{{ $post->user->profile->image}}" alt="" class="w-72">

                    <h3>
                        {{ $post->user->username }}
                    </h3>
                </div>

                <p>
                    {{ $post->caption }} 
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
