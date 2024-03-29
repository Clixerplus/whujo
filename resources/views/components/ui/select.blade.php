 {{-- @php
    if ($errors->has($key)){
        $attributes->merge([ 'ring ring-danger focus:ring-danger ring-opacity-75']);
    }
@endphp --}}
<div class="relative w-full py-4 mt-2 border rounded-md">
    <div class="absolute inset-y-0 right-0 flex items-center px-2 border-l pointer-events-none">
        <x-icon-caret-down-outline class="w-6 h-6 fill-current" />
    </div>

    <select {{ $attributes->merge([
                    'class' => 'w-full  pl-2 pr-16 appearance-none focus:outline-none bg-white',
                    'name'  => $key
                ])}}>

        {{ $slot }}
    </select>


    @error($key)
        <x-icon-alert-circle-outline class="absolute inset-0 w-10 h-10 my-auto ml-auto mr-12 bg-white text-danger" />
    @enderror
</div>
