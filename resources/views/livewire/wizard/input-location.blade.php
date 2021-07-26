<div class="pb-8">

    <h1 class="mb-2 text-3xl font-extrabold">
        Donde te encuentras ubicado
    </h1>

    <p class="px-1 mb-4 text-sm">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        Facilis pariatur dolor deleniti quisquam soluta libero
        excepturi, mollitia atque, aperiam officia ab cumque dicta
        rem suscipit.
    </p>

    <div class="w-full my-4">
        <div class="flex flex-col justify-between space-y-2 md:flex-row lg:space-y-0 lg:space-x-2">

            <div class="relative w-full group" x-data="{open:false}">
                <x-ui::input wire:model="search" x-ref="search"
                    x-on:keydown="$nextTick(()=> { if (( $refs.search.value.length > 0) && (open !== true)) { open = true}})"
                    x-on:click="$nextTick(()=> { if (( $refs.search.value.length > 0) && (open !== true)) { open = true}})"
                    x-on:click.away="open=false" class="w-full"
                    autocomplete="error" placeholder="Location" />
                <x-icon-location class="absolute w-auto h-8 text-gray-400 right-1 top-2" />

                <div class="absolute inset-x-0 z-10 -mt-1 overflow-y-auto bg-white border-t rounded-b shadow-xl top-full max-h-64 lg:max-h-48"
                    x-cloak x-show="$refs.search.value.length > 0 && open"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-90"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-300"
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
            </div>
        </div>
    </div>

    <h2 class="mb-2 text-xl font-extrabold">
        Lorem ipsum dolor sit.
    </h2>

    <p class="px-1 mb-4 text-sm">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        Facilis pariatur dolor deleniti quisquam soluta libero
        excepturi, mollitia atque, aperiam officia ab cumque dicta
        rem suscipit.
    </p>

</div>
