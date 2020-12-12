<div id="alert" class="w-full p-2 transform  transition-all ease-out duration-300">
    <div class="relative flex justify-between bg-white rounded overflow-hidden p-2 space-x-1">
        <div class="absolute inset-0 border-l-4 border-{{$color}}-400"></div>
        <div class="flex items-baseline">
            <span class="bg-{{$color}}-300 bg-opacity-50 rounded-full p-1">
                <x-dynamic-component :component="$icon" class="h-10 sm:h-6 w-auto text-{{$color}}-400" />
            </span>
        </div>
        <div class="flex flex-grow items-center px-2">
            {{ $slot }}
        </div>
        <div class="z-10">
            <button type="button" class=" bg-indigo-300 bg-opacity-25 text-gray-700 rounded overflow-hidden p-1 lg:p-2 focus:outline-none" onclick="closeAlert()">
                <x-icon-close-outline class="h-4 w-auto" />
            </button>
        </div>
    </div>
</div>

