<textarea {{
    $attributes->merge([
            'class' => 'w-full rounded-md p-4 pr-16 placeholder-gray-500 border focus:ring focus:ring-gray-200 ' ,
            'name'  => $name ?? ''
    ])
    }}></textarea>
<span class="ml-2 text-danger text-xs ">@error('todo'){{ $message }}@enderror</span>
