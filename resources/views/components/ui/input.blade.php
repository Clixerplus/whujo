@props([
    'classSize' => [
        'xs' => ' rounded-xs p-1 ',
        'sm' => ' rounded-sm p-2 ',
        'md' => ' rounded-md p-3 ',
        'lg' => ' rounded-lg p-4 ',
    ]
])

@php
    $errorClass = (!$errors->has($key)) ? '' : ' ring ring-danger focus:ring-danger ring-opacity-75 ';
@endphp

<div class="relative">

    <input {{ $attributes->merge([
        'class' => 'pr-16 placeholder-gray-500 border focus:ring focus:ring-gray-200 outline-none ' . $errorClass . $classSize[$size],
        'name'  => $key])
    }}>

    @if ($key)
        @error($key)
            <x-icon-alert-circle-outline class="absolute inset-0 w-10 h-10 my-auto ml-auto mr-4 text-danger" />
        @enderror
    @endif

</div>

