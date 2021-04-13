<div>
    <div class="pt-20">
        <div class="h-20 bg-black"></div>
        <div class="p-8 space-y-4">

            <h1 class="text-xl font-bold">{{ __('Results for ') .'"'. $search .'"'}} </h1>

            <div class="flex items-center space-x-4">
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
            </div>
        </div>


        {{-- Cuerpo Principal --}}
        <div class="flex flex-wrap pb-8 lg:px-4">

            {{-- Panel de resultados --}}
            <div class="w-full">

                @empty($results->first())
                {{--  --}}
                <div class="p-16 mx-auto space-y-6 text-center bg-gray-200 rounded">
                    <x-icon-sad class="w-24 h-24 mx-auto text-primary" />
                    <div>
                        <h2 class="mb-4 text-3xl font-bold">No se encontraron resultados para tu busqueda</h2>
                        <p class="max-w-xl mx-auto text-gray-600">Prueba cambiando tu cadena de busquedad o filtra a
                            traves
                            de los enlaces de la barra de categrias</p>
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
</div>
