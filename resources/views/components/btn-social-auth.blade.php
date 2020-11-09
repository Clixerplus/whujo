@props([
'icon'
])

<a {{ $attributes->merge([
    'class'=>'flex gap-2  mx-auto px-4 py-2 text-secondary font-semibold bg-gray-100
              border border-gray-400 rounded-xl
              hover:bg-white hover:shadow-card
              focus:shadow-outline-gray focus:bg-white
              disabled:opacity-25
              transition ease-in-out duration-500',
]) }}>

    @if ($icon)
        <x-dynamic-component :component="$icon" class="w-6" />
    @endif

    <span class="">
        {{ $slot }}
    </span>

</a>
