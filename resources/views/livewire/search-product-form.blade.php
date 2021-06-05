<section x-data="{ isSearchActive: @entangle('isSearchActive') }"
    class="relative w-full mx-auto bg-white bg-opacity-50 rounded-md">

    {{-- btn set focus --}}
    <div class="fixed z-40 w-12 h-12 right-4 bottom-4">
        <button class="w-full h-full p-3 rounded-full focus:outline-none bg-primary hover:bg-primary-light"
            x-on:click="$refs.search.focus()">
            <x-icon-search class="w-full h-auto text-white" />
        </button>
    </div>

    {{-- search form --}}
    <form action="/listing">

        <div class="relative">
            <span class="absolute inset-y-0 left-0 items-center hidden pl-3 md:flex ">
                <x-icon-search class="w-5 h-5 text-gray-400" />
            </span>

            <input type="text" placeholder="Buscar..." title="buscar" spellcheck="false" x-ref="search"
                wire:model.debounce.500ms="search" name="search" wire:keydown="activateSearch"
                wire:keydown.escape="deactivateSearch" autocomplete="false" required
                x-on:keydown="$refs.productTag.value=''; $refs.productType.value=''"
                class="w-full py-4 pl-10 pr-4 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-red-500 dark:focus:border-blue-500 focus:outline-none focus:ring focus:ring-red-500">

            <input type="hidden" x-ref="productType" name="type" class="border" />
            <input type="hidden" x-ref="productTag" name="category" class="border" />

            <x-ui::button type="submit"
                class="absolute top-0 right-0 flex items-center h-12 m-1 bg-primary focus:ring focus:ring-primary focus:ring-opacity-50 active:bg-primary-light active:ring-red-200">
                <span class="hidden md:inline-flex">{{ __('Search') }}</span>
                <x-icon-search class="w-6 h-6 md:hidden" />
            </x-ui::button>
        </div>

        <div class="absolute inset-x-0 z-40 w-full mt-2 overflow-y-auto text-left bg-white border rounded max-h-44"
            x-show="isSearchActive" @click.away="isSearchActive = false" x-cloak>
            @if ($results)
                <ul>
                    @foreach ($results as $type_results => $data_result)
                        <li class="px-4 py-2 font-medium text-secondary capitalize border-b border-gray-200 @if ($loop->iteration > 1) mt-6 @endif">
                            {{ str_replace('-', ' ', __($type_results)) }}
                        </li>

                        @foreach ($data_result as $result)
                            <li class="w-full">
                                <a class="block h-full px-6 py-2 text-sm text-gray-500 capitalize transition-colors duration-300 ease-out cursor-pointer hover:bg-red-100 hover:text-gray-700"
                                    x-on:click="$wire.pickResult('{{ $result }}'); $refs.productTag.value='{{ $result }}'; $refs.productType.value='{{ $type_results }}'">

                                    {{ $result }}
                                </a>
                            </li>
                        @endforeach

                    @endforeach
                </ul>
            @else
                <p class="p-4 text-sm text-gray-500">
                    {{ __('No results found') }}
                </p>
            @endif
        </div>

    </form>
</section>
