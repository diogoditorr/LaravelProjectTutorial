<x-app-layout>
    <form action="/profile/{{ $user->id }}" method="POST" enctype="multipart/form-data">
        <div class="row">
            @method('PATCH')
            @csrf

            <div>
                <h1>Edit Profile</h1>
            </div>

            <!-- Title -->
            <div>
                <x-label for="title" :value="__('Title')" />

                <x-input 
                    id="title" 
                    class="block mt-1 w-full" 
                    type="text" 
                    name="title"
                    :value="old('title') ?? $user->profile->title" 
                    required 
                    autofocus 
                />
            </div>
            
            <!-- Description -->
            <div>
                <x-label for="description" :value="__('Description')" />

                <x-input 
                    id="description" 
                    class="block mt-1 w-full" 
                    type="text" 
                    name="description"
                    :value="old('description') ?? $user->profile->description" 
                    required 
                    autofocus 
                />
            </div>
            
            <!-- URL -->
            <div>
                <x-label for="url" :value="__('URL')" />

                <x-input 
                    id="url" 
                    class="block mt-1 w-full" 
                    type="text" 
                    name="url"
                    :value="old('url') ?? $user->profile->url" 
                    required 
                    autofocus 
                />
            </div>

            <div>
                <x-label for="image" :value="__('Profile Image')" />
                <x-input type="file" id="image" name="image"></x-input>
            </div>

            <div>
                <button>Save Profile</button>
            </div>
        </div>
    </form>
</x-app-layout>
