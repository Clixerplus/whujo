@props([
    'class' =>'w-full rounded-md p-4 pr-16 placeholder-gray-500 border focus:ring focus:ring-gray-200 outline-none '
])

@php
    if ($errors->has($name))
        $class .= 'ring ring-danger focus:ring-danger ring-opacity-75';
@endphp


<div class="relative my-2">

    <input {{ $attributes->merge([ 'class' => $class, 'name'  => $name]) }}>

    @if ($name)
        @error($name)
            <x-icon-alert-circle-outline class="absolute inset-0 my-auto text-danger w-10 h-10 mr-4 ml-auto" />
        @enderror
    @endif

</div>
