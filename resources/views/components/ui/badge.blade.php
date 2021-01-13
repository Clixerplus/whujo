<div {{ $attributes->merge([ 'class' => 'flex p-1 pr-4 mr-2 items-center rounded-full bg-white bg-opacity-90']) }}>

    <span class="w-6 h-6 flex justify-center items-center rounded-full bg-black bg-opacity-30 ">
        <x-dynamic-component :component="$icon" class="w-3 h-auto text-white" />
    </span>
    <span class="text-xs ml-2 text-white">{{ $slot }}</span>

</div>
