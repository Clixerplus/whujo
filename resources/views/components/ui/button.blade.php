@props([

'classSize' => [
    'xs' => ' px-2 ',
    'sm' => ' py-2 px-4 ',
    'md' => ' py-3 px-5 ',
    'lg' => ' py-4 px-6 ',
    ],

'classDefault' => 'flex items-center justify-center placeholder-gray-500 border focus:ring rounded-md
                   focus:ring-red-200 outline-none text-white focus:outline-none disabled:opacity-25
                   transition ease-in-out duration-150'
])

<button {{ $attributes->merge([ 'class' => $classDefault . $classSize[$size] ]) }} >

    {{ $slot }}

</button>
