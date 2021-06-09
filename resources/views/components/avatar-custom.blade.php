<div>
    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
        <div
            class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300">
            <img class="object-cover w-16 h-16 rounded-full" src="{{ Auth::user()->profile_photo_url }}"
                alt="{{ Auth::user()->name }}" />
        </div>
    @else
        <div class="flex items-center justify-center w-16 h-16 p-2 text-gray-400 bg-gray-200 border-4 border-gray-400 rounded-full">
            <x-icon-person class="w-full h-full " />
        </div>
    @endif
</div>
