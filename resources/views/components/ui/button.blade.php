<button {{ $attributes->merge([
    'class' => 'inline-flex items-center justify-center leading-7 rounded-md
                text-white focus:outline-none disabled:opacity-25
                transition ease-in-out duration-150 py-2 px-4 rounded'
            ]) }}>

    {{ $slot }}

</button>
