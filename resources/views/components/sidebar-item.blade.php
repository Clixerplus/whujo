@props([
    'icon',
    'route' => null
])

<li {{ $attributes }} class=" hover:bg-gray-200 transition-500 pl-4 transition-all
    @if (request()->routeIs($route)) sidebar-active @endif" :class="{'item-open' : open}">


    <a @isset ($route) href="{{ route($route) }}" @endif
        class="inline-flex items-center py-2 space-x-6" >

        <x-dynamic-component :component="'icon-'.$icon" class="w-6 h-auto" />
        <span class="text-sm" :class="{ 'hidden' : !open }" >{{ $slot }}</span>
    </a>
</li>
