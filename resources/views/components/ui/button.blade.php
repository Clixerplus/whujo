<button {{ $attributes->merge([
    'class' => 'inline-flex items-center leading-7 border border-transparent rounded-md text-white capitalize
                hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900
                focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150'
            ]) }}>

    {{ $slot }}

</button>
