@props([
'link' => '#',
'img' => '',
'alt' => '',
])

<div class="relative w-full h-full overflow-hidden rounded-md group">
    <img src="{{ $img }}"
    class="absolute inset-0 object-cover w-full h-full transition-all ease-in-out rounded-xl group-hover:scale-110 group-hover:transform"
    alt="{{ $alt }}" />

    <a href="{{ $link }}"
        {{ $attributes->merge(['class'=>'absolute inset-0 flex flex-col justify-end w-full h-full p-4  md:p-4 hover:shadow-2xl ']) }}
        >
        {{ $slot }}
    </a>
</div>
