<x-guest-layout>

    <div class="h-20 bg-secondary "></div>

    <div class="bg-gray-50">
        <div class="p-4 mx-auto max-w-screen md:max-w-2xl lg:max-w-7xl md:px-6">
            <div class="w-full md:w-1/2">
                <livewire:search-product-form />
            </div>
        </div>
    </div>

    <div class="sticky inset-x-0 z-10 border-b bg-gray-50 top-20">
        <div class="w-full p-4 mx-auto max-w-screen md:max-w-2xl lg:max-w-7xl md:px-6">
            <livewire:search-filters />
        </div>
    </div>


    





    {{-- @php
    $results = App\Models\Experience::all();
    @endphp

    <div class="relative w-full lg:max-w-none lg:overflow-visible">


    <div class="fixed inset-x-0 top-0 z-20 w-full h-20 bg-white border-b border-gray-200 text-primary">
        <div class="flex items-center justify-between h-full px-4 lg:px-8 ">


            <h1 class="text-3xl font-bold font-whujo">whujo</h1>


            <x-button class="w-12 h-12 p-1 rounded-full text-primary ">
                <x-icon-people-circle class="w-10 h-auto bg-white rounded-full" />
            </x-button>

        </div>
    </div>


    <div class="fixed inset-x-0 z-20 w-full h-16 bg-white top-20">


        <div class="flex items-center px-4 lg:hidden">


            <x-button class="w-12 h-12 p-1 border border-gray-300 text-secondary-light"
                onclick="document.getElementById('filters').classList.remove('translate-y-full')">
                <x-icon-options class="w-6 h-auto" />
            </x-button>



            <div class="relative w-full ml-2">


                <x-input key="search" class="flex w-full h-12" placeholder="Que necesitas?" />


                <x-button class="absolute w-10 h-10 p-2 text-gray-600 top-3 right-1 bg-secondary">
                    <x-icon-search class="w-8 h-auto text-white" />
                </x-button>

            </div>

        </div>


        <ul class="items-center hidden h-full px-4 font-semibold text-gray-600 divide-x lg:flex">
            <li class="px-4">
                <a href="#" class="pb-4 transition-all duration-100 hover:border-b-4 border-primary">
                    Profesionales
                </a>
            </li>
            <li class="px-4">
                <a href="#" class="pb-4 transition-all duration-100 hover:border-b-4 border-primary">
                    Make Easy
                </a>
            </li>
            <li class="px-4">
                <a href="#" class="pb-4 transition-all duration-100 hover:border-b-4 border-primary">
                    Aprendizaje
                </a>
            </li>
            <li class="px-4">
                <a href="#" class="pb-4 transition-all duration-100 hover:border-b-4 border-primary">
                    Turismo
                </a>
            </li>
            <li class="px-4">
                <a href="#" class="pb-4 transition-all duration-100 hover:border-b-4 border-primary">
                    Share a Coffe
                </a>
            </li>
            <li class="px-4">
                <a href="#" class="pb-4 transition-all duration-100 hover:border-b-4 border-primary">
                    Sorprendete
                </a>
            </li>

        </ul>
    </div>


    <div class="w-full p-4 mb-4 mt-36 lg:px-8">


        <div class="flex items-end justify-start mb-4 text-sm font-light text-gray-500">
            <a href="{{ route('home') }}" class="text-primary">Inicio</a>
            <x-icon-chevron-forward class="h-5 p-1 mt-0.5" />
            <span>Busqueda</span>
        </div>


        <h1 class="lg:text-2xl ">
            Mostrando Resultados de:
            "<span class="font-semibold text-gray-700">{{ $search ?? 'Cadena de busqueda' }}</span>"
        </h1>

    </div>


    <div class="flex flex-wrap pb-8 lg:px-4">


        <div id="filters"
            class="fixed inset-0 z-30 w-screen min-h-screen transition duration-300 ease-out transform translate-y-full bg-white lg:static lg:w-1/4 lg:min-h-full lg:z-0 lg:px-4 lg:bg-transparent lg:transform-none lg:translate-y-0">


            <form class="relative w-full max-h-screen bg-white lg:rounded-md ">


                <div class="flex items-center justify-between flex-none h-16 px-4 border-b">


                    <x-button type="reset"
                        class="order-1 text-sm underline text-secondary hover:text-blue-400 lg:order-2">
                        Limpiar
                    </x-button>


                    <h2 class="order-2 font-bold lg:order-1">Filtros</h2>


                    <a class="order-3 cursor-pointer lg:hidden"
                        onclick="document.getElementById('filters').classList.add('translate-y-full')">
                        <x-icon-close-outline class="w-6 h-auto text-gray-400" />
                    </a>

                </div>


                <div class="flex-grow p-4 overflow-y-scroll lg:overflow-visible">

                    <div class="relative p-4">
                        <x-input id="search" key="search" placeholder="¿Que estas buscando?"
                            class="w-full h-12 placeholder-secondary" />

                        <x-button type="submit"
                            class="absolute w-10 h-10 p-2 text-gray-600 top-7 right-5 bg-secondary hover:bg-primary">
                            <x-icon-search class="w-8 h-auto text-white" />
                        </x-button>
                    </div>

                    <div class="px-4">
                        <label for="type" class="text-sm text-gray-500">Tipo de Producto</label>
                        <x-select id="type" key="type" placeholder="Tipo de Producto" class="w-full h-12 text-sm">
                            <option selected value="all" class="text-gray-400">
                                Todos
                            </option>
                            <option value="services">experiences</option>
                            <option value="experiences">Experiencias</option>
                        </x-select>
                    </div>

                    <div class="px-4">
                        <label for="type" class="text-sm text-gray-500">Categoría</label>
                        <x-select key="category" class="w-full h-12 text-sm text-gray-400"
                            onclick="this.classList.add('text-secondary')">
                            <option disabled selected value="" class="text-gray-400">
                                Elige una categoría
                            </option>
                            @foreach (App\Models\Category::all(['id', 'name']) as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </x-select>
                    </div>

                    <div class="px-4">
                        <label for="type" class="text-sm text-gray-500">Rango de Precios</label>
                        <div class="flex items-center justify-start">
                            <div class="relative w-2/5">
                                <x-input key="minPrice" class="w-full h-12 pr-4 " min="0" max="49999"
                                    placeholder="0.00" />
                                <span
                                    class="absolute right-0 block w-8 h-10 py-2 text-xl text-center text-gray-500 rounded-r top-2">$</span>
                            </div>
                            <div class="px-4 text-3xl text-center ">-</div>
                            <div class="relative w-2/5">
                                <x-input key="minPrice" class="w-full h-12" min="1" max="50000" placeholder="0.00" />
                                <span
                                    class="absolute right-0 block w-8 h-10 py-2 text-xl text-center text-gray-500 rounded-r top-2">$</span>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="fixed inset-x-0 bottom-0 h-16 border border-t lg:hidden">
                    <div class="flex items-center h-full px-8 my-auto">
                        <x-button class="w-full py-2 bg-primary"> Aplicar</x-button>
                    </div>
                </div>

            </form>

        </div>


        <div class="w-full px-4 lg:w-3/4">


            <div class="flex items-center justify-between h-20 border-t">


                <div class="hidden lg:block">
                    ({{ $results->count() }}) Resultados
                </div>


                <div class="z-10 flex items-baseline justify-end">

                    <span class="mr-4 font-semibold text-secondary">Ordenar por:</span>

                    <div
                        class="relative flex items-center justify-center px-5 py-2 text-sm text-gray-500 cursor-pointer active:text-secondary">
                        <a class="flex items-baseline justify-end p-4 bg-white rounded-md shadow cursor-pointer w-52 lg:text-gray-600 "
                            onclick="document.getElementById('sortOptions').classList.toggle('scale-0')">
                            <input id="sort" type="text" name="sort" value="Precio (Ascendente)"
                                class="w-5/6 bg-transparent appearance-none disabled" />
                            <x-icon-caret-down class="w-auto h-4 " />
                        </a>


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


            <ul class="flex flex-wrap self-center justify-start w-auto h-full mx-auto">
                @foreach ($results as $product)
                    <li class="w-full my-4 md:w-1/2 lg:w-1/3 h-96">
                        <a href="/product/{{ $product->id }}"
                            class="block h-full p-2 transition duration-500 ease-out transform hover:-translate-y-4 active:opacity-75">
                            <x-card-V02 :product="$product" />
                        </a>
                    </li>
                @endforeach
            </ul>

        </div>

    </div>

</div>
<script>
    function selectSortOption(text) {
        document.getElementById('sort').value = text;
        document.getElementById('sortOptions').classList.toggle('scale-0');
    }

</script> --}}
</x-guest-layout>
