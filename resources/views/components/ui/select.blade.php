@props([
'class'=>'w-full rounded-md p-4 pr-16 z-20 bg-transparent appearance-none border focus:ring focus:ring-gray-200 outline-none'
])
@php
    if ($errors->has($key))
        $class .= 'ring ring-danger focus:ring-danger ring-opacity-75';
@endphp
<div class="relative my-2">
    <div class="absolute inset-0 ml-auto border-l z-0 py-4  rounded-r  w-10">
        <x-icon-code-outline class="w-6 h-6 m-auto z-0 transform rotate-90 text-gray-500"             />
    </div>

    <select {{ $attributes->merge([ 'class' => $class, 'name'  => $key])}}>
        <option class="text-gray-500">{{__('Choose an option')}}</option>
        {{ $slot }}
    </select>

    @if ($key)
        @error($key)
            <x-icon-alert-circle-outline class="absolute inset-0 my-auto bg-white text-danger w-10 h-10 mr-12 ml-auto" />
        @enderror
    @endif
</div>
