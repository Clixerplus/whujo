@props([
'class'=>'w-full rounded-md p-4 pr-16 z-20 bg-transparent appearance-none border focus:ring focus:ring-gray-200 outline-none'
])
@php
    if ($errors->has($key))
        $class .= 'ring ring-danger focus:ring-danger ring-opacity-75';
@endphp
<div class="relative my-2">
    <div class="border-l pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-600">
        <x-icon-caret-down-circle-outline class="fill-current w-6 h-6"             />
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
