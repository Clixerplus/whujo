@props(['name'])
<select {{
    $attributes->merge([
            'class' => 'w-full rounded-md p-4 pr-16 placeholder-gray-500 border focus:ring focus:ring-gray-200 outline-none' ,
            'name'  => $name ?? ''
    ])
    }}>
    {{ $slot}}
</select>
<span class="ml-2 text-danger text-xs">@error('minimumAge'){{ $message }}@enderror</span>
