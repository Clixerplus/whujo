@php
    if ($errors->has($key)){
        $attributes->merge([ 'ring ring-danger focus:ring-danger ring-opacity-75']);
    }
@endphp
<div class="relative my-2">
    <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-600 border-l pointer-events-none">
        <x-icon-caret-down-outline class="w-6 h-6 fill-current" />
    </div>

    <select {{ $attributes->merge([
                    'class' => 'w-full rounded-md p-3 pr-16 z-20 appearance-none border focus:ring focus:ring-gray-200 outline-none ',
                    'name'  => $key
                ])}}>

        {{ $slot }}
    </select>


    @error($key)
        <x-icon-alert-circle-outline class="absolute inset-0 w-10 h-10 my-auto ml-auto mr-12 bg-white text-danger" />
    @enderror
</div>
