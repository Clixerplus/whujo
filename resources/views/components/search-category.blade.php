<div class="relative w-full p-2 bg-white rounded shadow-xl cursor-pointer lg:w-3/12 group"
    x-data="{ open:false, category:@entangle('category') }" @click.away="open=false">
    <div @click="open=!open"
        class="flex items-center w-full h-12 px-4 placeholder-gray-400 transition-all duration-300 ease-in-out outline-none focus:p-2 focus:shadow-xl">
        <span x-show="category" x-text="category"></span>
        <span x-show="category == '' " class="text-gray-400">All Categories</span>
    </div>
    <x-icon-chevron-forward @click="open=!open"
        class="absolute top-0 right-0 w-auto h-16 p-5 text-gray-400 transition-transform duration-300 ease-in-out transform"
        x-bind:class="open ? '-rotate-90' : 'rotate-90' " />

    <div class="absolute inset-x-0 z-10 -mt-1 overflow-y-auto bg-white border-t rounded-b shadow-xl top-full max-h-64 lg:max-h-48"
        x-cloak x-show="open" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100"
        x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100"
        x-transition:leave-end="opacity-0 transform scale-90">

        <ul class="w-full">
            @forelse ($categories as $catg )
                @if ($loop->first)
                    <li class="p-4 text-left text-gray-600 transition-colors duration-500 ease-in-out hover:bg-gray-200 hover:cursor-pointer"
                        data-value="All Categories"
                        @click="$wire.chooseCategory($event.target.getAttribute('data-value')); open=false">
                        All Categories
                    </li>
                @endif
                <li class="p-4 text-left text-gray-600 transition-colors duration-500 ease-in-out hover:bg-gray-200 hover:cursor-pointer"
                    data-value="{{ $catg->name }}"
                    @click="$wire.chooseCategory($event.target.getAttribute('data-value')); open=false">
                    {{ $catg->name }}
                </li>
            @empty
                <li class="px-2 py-3 text-gray-600">There isn't results</li>
            @endforelse
        </ul>

    </div>
    <input type="hidden" wire:model="category" />
</div>
