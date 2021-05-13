<x-button {{ $attributes->merge(['class'=>'space-x-2']) }} :size="$size">

    <x-dynamic-component :component="$icon" class=" fill-current w-auto h-4 " />

    <span >{{ $slot }}</span>

</x-button>
