@props([
'icon'=>''
])
<a
    {{ $attributes->merge(['class'=>'group block py-6 px-4 bg-white md:rounded-lg border-b hover:bg-gray-50 hover:shadow-w1 active:bg-gray-200 transition ease-in-out duration-500'])}}>
    <div class="flex md:flex-col gap-2 my-auto items-center md:items-start">
        @if ($icon)
        <x-dynamic-component :component="$icon" class="h-12 ml-4" />
        @endif
        <div class="w-auto px-4">

            <h1 class="text-secondary font-bold mb-2 ">
                {{ $slot }}
                <x-icon-chevron-forward-outline class="w-4 inline text-secondary float-right lg:float-none lg:mr-4 mt-1 lg:mt-0" />
            </h1>

            <p class="text-sm text-gray-600">{{ $description ?? '' }}</p>
        </div>
    </div>
</a>
