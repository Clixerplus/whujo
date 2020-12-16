<div>
    <x-button {{ $attributes->merge(['class'=>'text-lg']) }}>

        <x-dynamic-component :component="$icon" class="h-5 w-5 fill-current" />

        <span class="mx-4">{{ $slot }}</span>

    </x-button>
</div>
