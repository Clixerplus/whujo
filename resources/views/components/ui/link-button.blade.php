<a
    {{ $attributes->merge([
    'class' => 'block px-8 py-2 mt-6 text-lg font-medium text-center rounded
                focus:ring-2 focus:ring-offset-2
                hover:ring hover:ring-accent-aqua hover:ring-opacity-50
                md:mt-0 transition-all duration-300 transform',
]) }}>
    {{ $slot }}</a>
