@props(['title' => null])

<ul {{ $attributes->merge(['class' => 'mb-8 space-y-2 lg:text-sm']) }}>

    @isset($title)
        <li class="py-2 pl-4 font-bold text-gray-600">
            {{ $title }}
        </li>
    @endisset

    {{ $slot }}

</ul>
