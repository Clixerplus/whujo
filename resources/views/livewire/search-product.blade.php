<div x-data="{ show_filter: false, show_sort: false  }">

    {{--  float search button  --}}
    <x-button class="fixed bottom-0 right-0 z-50 w-16 h-16 p-3 mb-12 mr-2 text-white rounded-full bg-primary"
        @click="$refs.searchInput.focus()">
        <x-icon-search class="w-full h-full" />
    </x-button>

    <hr>

    {{-- category options --}}
    {{--  <div class="flex px-4 py-2 text-center text-gray-500">

        <a href="" class="px-4 text-center capitalize hover:border-b-2 hover:text-gray-700 border-primary">Services</a>

        <a href="" class="px-4 text-center capitalize hover:border-b-2 hover:text-gray-700 border-primary">Experiences</a>

        <a href="" class="px-4 text-center capitalize hover:border-b-2 hover:text-gray-700 border-primary">Share a Coffee</a>
    </div>

    <div class="flex px-6 py-2 text-center bg-gray-200 divide-x">
        @foreach ($this->getTags('service') as $tag)
        <span class="px-2">{{ $tag->name }}</span>
    @endforeach
</div> --}}
{{--
    <div class="flex space-x-4 divide-x">
        @foreach ($this->getTags('experience') as $tag)
        <span>{{ $tag->name }}</span>
@endforeach
</div>

<div class="flex space-x-4 divide-x">
    @foreach ($this->getTags('share-a-coffee') as $tag)
    <span>{{ $tag->name }}</span>
    @endforeach
</div> --}}

<hr>



{{-- filter and sort container --}}
<div class="sticky top-20 max-h-screen overflow-hidden overflow-y-auto bg-white shadow  border-b ">

    <div class="p-4 w-full flex items-center flex-wrap">

        {{-- search-input --}}
        <div class="text-center bg-gray-50 w-full md:w-2/3 pb-4 xs:pb-0">
            <x-input key="search" x-ref="searchInput" placeholder="Search here..."
                class="w-full bg-gray-50 border-gray-50 focus:ring-white" />
        </div>

        <div class="flex w-full">
            {{-- filter button --}}
            <div class="pr-2">
                <x-button-icon class="bg-white text-secondary" size="sm" icon="options"
                    @click="show_filter = !show_filter" x-bind:disabled="show_sort">
                    Filtros Avanzados
                </x-button-icon>
            </div>


            {{-- sort button --}}
            <div class="">
                <x-button-icon class="bg-white text-secondary" size="sm" icon="filter"
                    @click="show_sort = !show_sort" x-bind:disabled="show_filter" >
                    Order By
                </x-button-icon>
            </div>
        </div>
    </div>


    {{-- filters wrapper --}}
    <div class="p-4 space-y-4 w-full border-t" x-show="show_filter">
        <div class="p-6 bg-gray-200 border"></div>
        <div class="p-6 bg-gray-200 border"></div>
        <div class="p-6 bg-gray-200 border"></div>
        <div class="p-6 bg-gray-200 border"></div>
        <hr>
        <div class="p-4 bg-gray-200 border">Clear All</div>
    </div>

    {{-- sort wrapper --}}
    <div class="p-4 space-y-4 w-full border-t" x-show="show_sort">
        <div class="p-6 bg-gray-200 border">Ordenar 1</div>
        <div class="p-6 bg-gray-200 border">Ordenar 2</div>
        <div class="p-6 bg-gray-200 border">Ordenar 3</div>
    </div>
</div>

@for ($i = 0; $i < 50; $i++) <p>&nbsp;</p>
    @endfor

    {{-- filter categories --}}


    {{-- Results --}}
    {{-- <div class="px-8 py-4 text-xl">
    <h2>Showing 45 results from <strong>{{ $search }}</strong></h2>
    </div>

    <hr class="mt-4"> --}}

    {{-- Results Grid/List --}}
    {{-- <div class="flex flex-wrap p-4 -mx-1 overflow-hidden">
    @foreach ([1,2,3,4,5,6,7,8] as $item)
    <div class="w-full px-2 my-2 overflow-hidden md:w-1/2 lg:w-1/4 xl:w-1/5">
        <div class="w-full h-64 bg-gray-200 border rounded"></div>
    </div>
    @endforeach
</div> --}}

    {{-- paginate --}}
    {{-- <div class="flex justify-center space-x-2 overflow-hidden">
    @foreach ([1,2,3,4,5,6] as $number)
    <div class="flex items-center justify-center w-8 h-8 bg-gray-200 border rounded-full">
        <span>{{ $number }}</span>
    </div>
    @endforeach
    </div>

    <hr class="mt-4"> --}}

    {{-- suggest carousel --}}
    {{-- <div class="flex p-4 -mx-1 overflow-hidden flex-nowrap">
    @foreach ([1,2,3,4,5,6,7] as $item)
    <div class="flex-shrink-0 w-full px-2 my-2 overflow-hidden md:w-1/2 lg:w-1/4 xl:w-1/5">
        <div class="w-full h-64 bg-gray-200 border rounded"></div>
    </div>
    @endforeach
</div> --}}

    <!--
    {{-- search-bar --}}
    <div class="flex flex-col items-center justify-center w-full py-4 space-y-4 border-b">

        <div class="text-center bg-gray-100">
            <x-input-search wire:model="search" size="sm" />
        </div>

        <div class="flex flex-col items-center space-x-4 text-gray-400">
            {{-- Boton de Filtro --}}
            <x-button class="space-x-2 border text-secondary ">
                <x-icon-options class="w-4 h-4" />
                <span>Filtros Avanzados</span>
            </x-button>

            {{-- Formulario de Filtros --}}
            <div class="z-50 flex flex-col w-screen h-auto p-4 my-2 space-y-2 bg-black items-left boder">
                <div>
                    <label for="tags">Categorias</label>
                    <x-select class="space-y-4 bg-white" wire:model="tag" name="tags">
                        @foreach ($tags as $tag)
                        <option class="hover:bg-gray-200" value="{{ $tag->name }}">{{ $tag->name }}</option>
                        @endforeach
                    </x-select>
                </div>

                <div x-data="{ open: false }" @click.away="open = false" class="relative text-gray-500 w-60">
                    <div @click="open = ! open" class="z-0 p-4 border rounded-md">
                        <button>{{ __('Category') }}</button>
                    </div>

                    <div x-show="open" class="absolute z-10 flex flex-col -mt-1 space-y-2 bg-white shadow">
                        @foreach ($tags as $tag)
                        <a href="#" class="p-4 hover:bg-gray-200">{{ $tag->name }}</a>
                        @endforeach
                    </div>
                </div>

                <div x-data="{ open: true }" @click.away="open = false" class="relative text-gray-500 w-60">
                    <div @click="open = ! open" class="z-0 p-4 border rounded-md">
                        <button>{{ __('Price') }}</button>
                    </div>

                    <div x-show="open" class="absolute z-10 bg-white shadow">
                        <div class="flex p-4 space-x-4">
                            <div class="w-1/2">
                                <label for="">
                                    Min:
                                    <x-input key="max" class="w-full p-1" wire:model="min" />
                                </label>
                            </div>
                            <div class="w-1/2">
                                <label for="">
                                    Max:
                                    <x-input key="min" class="w-full p-1" wire:model="max" />
                                </label>
                            </div>
                        </div>
                        <hr>
                        <div class="flex items-center p-4">
                            <span>{{ __('Clear all') }}</span>
                            <button wire:click="clearPrice()">{{ __('Apply') }}</button>
                        </div>
                    </div>
                </div>

                <x-switch key="local" wire:model="local">{{ __('Only local products') }}</x-switch>
                <x-switch key="modality" wire:model="online">{{ __('Online products') }}</x-switch>
            </div>


        </div>
    </div>
-->


    <!--


    <div class="p-8 space-y-4">

        <h1 class="text-xl font-bold">{{-- __('Resultsfor').'"'.$search.'"' --}} </h1>

        {{-- <div class="flex items-center space-x-4">
            <x-select class="space-y-4 bg-white" wire:model="tag">
                @foreach ($tags as $tag)
                <option class="hover:bg-gray-200" value="{{ $tag->name }}">{{ $tag->name }}</option>
                @endforeach
            </x-select>

            <div x-data="{ open: false }" @click.away="open = false" class="relative text-gray-500 w-60">
                <div @click="open = ! open" class="z-0 p-4 border rounded-md">
                    <button>{{ __('Category') }}</button>
                </div>

                <div x-show="open" class="absolute z-10 flex flex-col -mt-1 space-y-2 bg-white shadow">
                    @foreach ($tags as $tag)
                    <a href="#" class="p-4 hover:bg-gray-200">{{ $tag->name }}</a>
                    @endforeach
                </div>
            </div>

            <div x-data="{ open: true }" @click.away="open = false" class="relative text-gray-500 w-60">
                <div @click="open = ! open" class="z-0 p-4 border rounded-md">
                    <button>{{ __('Price') }}</button>
                </div>

                <div x-show="open" class="absolute z-10 bg-white shadow">
                    <div class="flex p-4 space-x-4">
                        <div class="w-1/2">
                            <label for="">
                                Min:
                                <x-input key="max" class="w-full p-1" wire:model="min" />
                            </label>
                        </div>
                        <div class="w-1/2">
                            <label for="">
                                Max:
                                <x-input key="min" class="w-full p-1" wire:model="max" />
                            </label>
                        </div>
                    </div>
                    <hr>
                    <div class="flex items-center p-4">
                        <span>{{ __('Clear all') }}</span>
                        <button wire:click="clearPrice()">{{ __('Apply') }}</button>
                    </div>
                </div>
            </div>

            <x-switch key="local" wire:model="local">{{ __('Only local products') }}</x-switch>
            <x-switch key="modality" wire:model="online">{{ __('Online products') }}</x-switch>
        </div> --}}
    </div>


    {{-- Cuerpo Principal --}}
    <div class="flex flex-wrap pb-8 lg:px-4">

        {{-- Panel de resultados --}}
        <div class="w-full">

            @empty($results->first())

            <div class="flex p-16 mx-auto space-y-6 text-center bg-gray-200 rounded">
                <x-icon-sad class="w-24 h-24 mx-auto text-primary" />
                <div>
                    <h2 class="mb-4 text-3xl font-bold">No se encontraron resultados para tu busqueda</h2>
                    <p class="max-w-xl mx-auto text-gray-600">
                        Prueba cambiando tu cadena de busquedad o filtra a traves
                        de los enlaces de la barra de categrias
                    </p>
                </div>
            </div>
            @else

            {{-- Contador y Ordenamiento --}}
            <div class="flex items-center justify-between h-20 px-4 border-t">

                {{-- Contador de Resultados --}}
                <div class="flex-shrink-0 hidden lg:block ">
                    ({{ $results->count() }}) Resultados
                </div>

                {{-- Ordenamiento --}}
                <div class="flex items-center justify-between w-full lg:items-baseline lg:justify-end">

                    <span class="font-semibold text-secondary lg:mr-4">Ordenar por:</span>

                    <div class="relative py-2 text-sm text-gray-500 cursor-pointer active:text-secondary">
                        <div class="flex items-center justify-center">
                            <a class="flex items-baseline justify-end w-48 p-4 bg-white rounded-md shadow cursor-pointer lg:w-52 lg:text-gray-600 "
                                onclick="document.getElementById('sortOptions').classList.toggle('scale-0')">
                                <input id="sort" type="text" name="sort" value="Precio (Ascendente)"
                                    class="w-5/6 bg-transparent appearance-none disabled" />
                                <x-icon-caret-down class="w-auto h-4 " />
                            </a>
                        </div>

                        <ul id="sortOptions"
                            class="absolute text-xs duration-200 ease-in-out transform scale-0 bg-white divide-y divide-gray-200 rounded-md shadow w-52 top-16 right-5 transitions">
                            <li class="cursor-pointer hover:bg-gray-200">
                                <div class="p-3" onclick="selectSortOption('Precio (Ascendente)')">Precio
                                    (Ascendente)</div>
                            </li>
                            <li class="cursor-pointer hover:bg-gray-200">
                                <div class="p-3" onclick="selectSortOption('Precio (Descendente)')">Precio
                                    (Descendete)</div>
                            </li>
                            <li class="cursor-pointer hover:bg-gray-200">
                                <div class="p-3" onclick="selectSortOption('Calificación')">Calificación</div>
                            </li>
                            <li class="cursor-pointer hover:bg-gray-200">
                                <div class="p-3" onclick="selectSortOption('Destacados')">Destacados</div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

            {{-- Listing --}}
            <ul class="flex flex-wrap self-center justify-start w-auto h-full px-2 mx-auto">

                @foreach ($results as $product)
                <li class="w-full my-4 md:w-1/2 lg:w-1/4">
                    <a href="{{ route('product',[$product->type, $product->id, $product->slug]) }}"
                        class="block h-full p-2 transition duration-500 ease-out transform hover:-translate-y-4 active:opacity-75">
                        <x-card-V05 :product="$product" />
                        {{-- <x-card-V02 class="h-96" :product="$product" /> --}}
                    </a>
                </li>
                @endforeach
            </ul>
            @endempty

        </div>

    </div>

</div>
-->
