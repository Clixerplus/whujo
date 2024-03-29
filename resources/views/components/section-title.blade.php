@props([
    'separator' => false,
])
<div {{ $attributes }}>
    <h1 class="w-full text-4xl font-bold leading-tight text-secondary md:text-5xl">
        {{ $slot }}
    </h1>

    @isset($subtitle)
        <h3 class="w-full mt-4 text-lg font-light text-gray-700 md:text-xl">
            {{ $subtitle }}
        </h3>
    @endisset

    @if ($separator)
        <x-separator class="mt-4" />
    @endif

    @isset($description)
        <p class="w-full mt-4 text-sm font-light leading-relaxed text-gray-700 md:text-base">
            {{ $description }}
        </p>
    @endisset


    @isset($call_to_action)
        <div class="mt-8">
            {{ $call_to_action }}
        </div>
    @endisset
</div>
