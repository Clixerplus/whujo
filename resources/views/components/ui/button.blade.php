<button {{ $attributes->merge([
    'class' => 'inline-flex items-center justify-center leading-7 border border-transparent rounded-md
                text-white active:bg-gray-900 focus:outline-none focus:border-gray-900
                focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150'
            ]) }}>

    {{ $slot }}

</button>
