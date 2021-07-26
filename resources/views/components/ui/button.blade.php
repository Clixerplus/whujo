@props([
    'classSize' => [
        'xs' => ' px-2 ',
        'sm' => ' py-2 px-4 ',
        'md' => ' py-3 px-5 ',
        'lg' => ' py-4 px-6 ',
    ],
    'classDefault' => 'outline-none text-white focus:outline-none disabled:opacity-25 transition ease-in-out duration-150 rounded'
])

<button {{ $disabled() }} {{ $attributes->merge([ 'class' => $classDefault . $classSize[$size] ]) }}>
    {{ $slot }}
</button>
