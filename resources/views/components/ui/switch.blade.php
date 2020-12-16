<div {{ $attributes }}>
    <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
        <input type="checkbox" name="{{ $key }}" id="switch-{{$key}}"
               class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer" />
        <label for="switch-{{$key}}" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
    </div>
    <label for="switch-{{$key}}">{{ $slot }}</label>
</div>