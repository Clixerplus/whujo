<div class="relative w-full p-2 bg-white rounded shadow-xl lg:w-4/12 group" x-data="{open:false}">
    <input wire:model="searchLocation" x-ref="searchLocation"
        x-on:keydown="$nextTick(()=> { if (( $refs.searchLocation.value.length > 0) && (open !== true)) { open = true}})"
        x-on:click="$nextTick(()=> { if (( $refs.searchLocation.value.length > 0) && (open !== true)) { open = true}})"
        x-on:click.away="open=false" class="w-full h-12 px-4 placeholder-gray-400 outline-none" autocomplete="error"
        placeholder="Location" />
    <x-icon-location class="absolute top-0 right-0 w-auto h-16 p-4 text-gray-400" />

    <div class="absolute inset-x-0 z-10 -mt-1 overflow-y-auto bg-white border-t rounded-b shadow-xl top-full max-h-64 lg:max-h-48"
        x-cloak x-show="$refs.searchLocation.value.length > 0 && open"
        x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90"
        x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 transform scale-100"
        x-transition:leave-end="opacity-0 transform scale-90">

        <div wire:loading class="w-full p-4">
            <x-icon-spinner class="w-6 h-6 mx-auto text-gray-400 animate-spin" />
        </div>

        <ul wire:loading.remove class="w-full ">
            @forelse ($locations as $key => $local )
                <li class="p-4 text-left text-gray-600 transition-colors duration-500 ease-in-out hover:bg-gray-200 hover:cursor-pointer"
                    @click="$wire.chooseLocation({{ $key }})">
                    {{ $local['address'] }}
                </li>
            @empty
                <li class="p-4 text-gray-600">There isn't results</li>
            @endforelse
        </ul>

    </div>

    <input type="hidden" wire:model="location.country" name="country" />
    <input type="hidden" wire:model="location.locality" name="locality" />
    <input type="hidden" wire:model="location.state" name="state" />
</div>
