<x-app-layout>
    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
        <div class="row">
            @csrf

            <div>
                <h1>Add New Post</h1>
            </div>

            <!-- Name -->
            <div>
                <x-label for="caption" :value="__('Post Caption')" />

                <x-input 
                    id="caption" 
                    class="block mt-1 w-full" 
                    type="text" 
                    name="caption"
                    :value="old('caption')" 
                    required 
                    autofocus 
                />
            </div>

            <div>
                <x-label for="image" :value="__('Post Image')" />
                <x-input type="file" id="image" name="image" required></x-input>
            </div>

            <div>
                <button>Add New Post</button>
            </div>
        </div>
    </form>
</x-app-layout>
