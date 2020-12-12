<div class="p-4">
    <div
        class="relative flex flex-wrap sm:flex-nowrap justify-between bg-white rounded overflow-hidden p-2 space-x-0 sm:space-x-2">
        <div class="absolute inset-0 border-l-4 border-{{$color}}-400"></div>
        <div class="flex flex-1 sm:flex-initial justify-center items-baseline py-4 sm:py-0">
            <span class="bg-{{$color}}-300 bg-opacity-50 rounded-full p-1">
                <x-dynamic-component :component="$icon" class="h-10 sm:h-6 w-auto text-{{$color}}-400" />
            </span>
        </div>

        {{ $slot }}

    </div>
</div>
