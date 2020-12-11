@props([
    'class'=> 'w-full rounded-md p-4 pr-16 my-2 outline-none placeholder-gray-500
               border focus:ring focus:ring-gray-200 resize-none text-sm'
])

@php
    if ($errors->has($key))
        $class .= 'ring ring-danger focus:ring-danger ring-opacity-75';
@endphp

<div class="relative    ">

    <textarea {{ $attributes->merge(['class' => $class,'name'  => $key]) }}></textarea>

    @if ($key)
        @error($key)
            <x-icon-alert-circle-outline class="absolute inset-0 my-auto text-danger w-10 h-10 mr-4 ml-auto" />
        @enderror
    @endif
</div>
