
@props(['icon', 'route' => null, 'view' => null])

<li {{ $attributes }} class="">

    <button type="button" {{-- @isset($route) href="#" @endif --}} class="flex items-center justify-center h-12 text-gray-400 hover:bg-gray-100 hover:text-gray-600 outline-none active:outline-none focus:outline-none
        @if ($route == $view) sidebar-active @endif">
        <span class="inline-block w-16 h-full p-3 m-auto ">
            <x-dynamic-component :component="'icon-'.$icon" class="w-full h-full " />
        </span>
        <span class="inline-block w-48 m-auto font-light" x-show="show"
            x-transition:enter="transition ease-out duration-100"
            x-transition:enter-start="opacity-0 transform scale-90"
            x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in duration-100"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-90">

            {{ $slot }}
        </span>
    </button>
