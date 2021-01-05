<span {{ $attributes->merge([ 'class' => 'flex items-center h-10 p-1 rounded-full text-sm shadow-w1'])}}>

    @isset ($icon)
    <span class="flex items-center h-full w-auto p-2 rounded-full bg-black bg-opacity-30 @if ($iconSide == "right") order-2 @endif">
        <x-dynamic-component :component="$icon" class="h-full w-full" />
    </span>
    @endisset

    <span class="mx-2 font-bold">Destacado</span>

</span>
