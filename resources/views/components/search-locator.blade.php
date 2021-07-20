@php
    $locations = [
        ['address'=> 'Address 1'],
        ['address'=> 'Address 2'],
        ['address'=> 'Address 2'],
        ['address'=> 'Address 2'],
        ['address'=> 'Address 2'],
        ['address'=> 'Address 2'],
        ['address'=> 'Address 2'],
        ['address'=> 'Address 2'],
        ['address'=> 'Address 2'],
        ['address'=> 'Address 2'],
        ['address'=> 'Address 2'],
        ['address'=> 'Address 3'],
    ];
@endphp
<div x-data="{open:true}"
    class="relative w-full h-10 z-10   md:w-4/12 bg-white rounded-md">

    <div class="w-full h-full flex items-center px-2">
        <input wire:model.debounce.500ms="location" x-ref="location" placeholder="Location" x-on:keydown="open=true"
            class="w-full h-full focus:outline-none rounded-md " />
        <x-icon-location class="w-auto h-7 text-gray-300" />
    </div>

    <div class="w-full bg-white shadow mt-1 rounded-md max-h-64 overflow-y-auto" x-cloak x-show="open">
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
