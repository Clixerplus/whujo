<div class="flex items-center space-x-2 text-sm">
    <div class="relative select-none {{ $size }} ">

        <input id="switch-{{$key}}"
               name="{{ $key }}"
               type="checkbox"
               class="toggle-check absolute block w-full h-full
                      rounded border-2 border-gray-500
                      appearance-none cursor-pointer
                      transition-500"/>

        <x-icon-checkbox class="toggle-label
                                absolute inset-0
                                w-auto h-auto opacity-0
                                text-success
                                transition-500"/>
    </div>
    <div>
        <label for="switch-{{$key}}" >{{ $caption ?? $slot }}</label>
    </div>
</div>
