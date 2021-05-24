@props([
'link' => '#',
'img' => '',
'alt' => '',

])

<div class="relative w-full h-full rounded-md group">

    <img src="{{ $img }}"
        class="absolute inset-0 object-cover w-full h-full transition-opacity ease-in-out rounded-xl group-hover:opacity-90"
        alt="{{ $alt }}" />

    <a href="{{ $link }}"
        {{ $attributes->merge(['class'=>'absolute inset-0 flex flex-col justify-end w-full h-full p-4 rounded-xl md:p-4 hover:shadow-2xl ']) }}
        class="">
        {{ $slot }}
    </a>

</div>
