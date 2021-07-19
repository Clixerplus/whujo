<div x-data="{open:false}"
    class="relative w-full h-full transition-all duration-300 transform bg-gray-100 rounded-md md:w-4/12 hover:shadow hover:scale-110">
    <input wire:model.debounce.500ms="location" x-ref="location" placeholder="Location" x-on:keydown="open=true"
        class="w-full h-full pl-2 pr-6 bg-gray-50 focus:outline-none" />
    <x-icon-location class="absolute w-6 h-6 text-gray-300 bg-white right-1 top-3" />
    <div class="w-full bg-white shadow" x-cloak x-show="open">
        <ul>
            @foreach ($locations as $local)
                <li x-on:click="$refs.location.value = '{{ $local['address'] }}'; open=false"
                    class="flex items-center p-3 space-x-3 text-left transition-all duration-500 ease-in-out cursor-pointer group hover:bg-gray-100">
                    <span class="inline-block w-4 h-4 p-0.5 border border-secondary  rounded-lg flex-shrink-0">
                        <span class="block w-full h-full bg-transparent rounded-lg group-hover:bg-secondary"></span>
                    </span>

                    <span class="text-sm font-light">{{ $local['address'] }}</span>
                </li>
            @endforeach
        </ul>
    </div>


    <input name="locality" type="hidden" />
</div>
