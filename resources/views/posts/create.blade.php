<x-app-layout>
    <form method="POST" action="{{ route('register') }}">
        <div class="row">
            @csrf

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
                <x-input type="file" id="image" name="image"></x-input>
            </div>
    </div>
    </form>
</x-app-layout>
