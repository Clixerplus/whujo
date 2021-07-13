<div
    class="w-full h-full transition-all duration-300 transform bg-gray-100 rounded-md md:w-4/12 focus:outline-none hover:shadow hover:bg-gray-50 hover:scale-105">
    <input wire:model="search" list="search" placeholder="Search" class="w-full h-full px-2" />
    <datalist id="search">
        @foreach ($tags as $tag)
            <option value="{{ $tag }}">
        @endforeach
    </datalist>
</div>
