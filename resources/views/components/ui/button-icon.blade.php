<div>
    <x-button {{ $attributes }}>

        <x-dynamic-component :component="$icon" class="h-auto w-4 fill-current" />

        <span class="mx-2">{{ $slot }}</span>

    </x-button>
</div>
