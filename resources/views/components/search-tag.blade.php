<div
    class="w-full h-full transition-all duration-300 transform bg-gray-100 rounded-md md:w-4/12 hover:shadow hover:scale-110">
    <input wire:model="search" list="search" placeholder="{{ $model }}" class="w-full h-full px-2 bg-gray-50 focus:outline-none" />
    <datalist id="search">
        @foreach ($tags as $tag)
            <option value="{{ $tag }}">
        @endforeach
    </datalist>
</div>
