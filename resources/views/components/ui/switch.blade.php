
<div>
    <div class="relative inline-block w-10 mr-2 align-middle transition duration-200 ease-in select-none">
        <input {{ $attributes }} type="checkbox" id="switch-{{$key}}" 
               class="absolute block w-6 h-6 transition-transform duration-300 ease-in bg-white border-4 rounded outline-none appearance-none toggle-checkbox" />
        <label for="switch-{{$key}}" class="block h-6 overflow-hidden transition-colors duration-300 ease-in bg-gray-300 rounded cursor-pointer toggle-label"></label>
    </div>
    <label for="switch-{{$key}}" class="cursor-pointer">{{ $slot }}</label>
</div>
