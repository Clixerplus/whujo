@props(['name'])
<div class="relative h-auto">

    <input
        {{
    $attributes->merge([
            'class' => 'w-full rounded-md p-4 pr-16 placeholder-gray-500 border focus:ring focus:ring-gray-200 outline-none' ,
            'name'  => $name ?? ''
    ])
    }}
    >

    <span class="ml-2 text-danger text-xs ">
        @error($name)
        {{ $message }}
        <x-icon-alert-circle-outline class="absolute inset-0 w-10 h-10 mt-2 mr-2 ml-auto opacity-75" />
        @enderror
    </span>
</div>
