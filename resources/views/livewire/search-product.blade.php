{{-- contenedor --}}
<div class="w-full">

    {{-- navbar --}}
    <div class="fixed top-0 inset-x-0 h-20 w-full bg-white text-primary z-20 border-b border-gray-200">
        <div class="flex items-center justify-between h-full px-4 lg:px-8 ">

            {{-- Boton de Menu --}}
            {{--<x-button class="w-12 h-12 p-1 border border-gray-300 text-secondary-light">
                                <x-icon-menu-outline class="w-8 h-auto " />
                            </x-button>--}}

            {{-- logo brand --}}
            <h1 class="font-whujo text-3xl font-bold">whujo</h1>

            {{-- Boton de Usuario --}}
            <x-button class="w-12 h-12 p-1 text-primary rounded-full ">
                <x-icon-people-circle class="w-10 h-auto bg-white rounded-full" />
            </x-button>

        </div>
    </div>

    {{-- Barra de Busqueda --}}
    <div class="fixed top-20 inset-x-0 h-16 w-full bg-white z-20">

        {{-- Barra Busqueda Mobile --}}
        <div class="flex flex-wrap items-center px-4">

            {{-- Menu de Subcategorias --}}
            <div class="hidden lg:flex lg:flex-initial">
                <ul class="flex items-center h-full text-gray-600 font-semibold divide-x">
                    <li class="px-4">
                        <a href="#" class="hover:border-b-4 border-primary pb-4 transition-all duration-100">
                            Profesionales
                        </a>
                    </li>
                    <li class="px-4">
                        <a href="#" class="hover:border-b-4 border-primary pb-4 transition-all duration-100">
                            Make Easy
                        </a>
                    </li>
                    <li class="px-4">
                        <a href="#" class="hover:border-b-4 border-primary pb-4 transition-all duration-100">
                            Aprendizaje
                        </a>
                    </li>
                    <li class="px-4">
                        <a href="#" class="hover:border-b-4 border-primary pb-4 transition-all duration-100">
                            Turismo
                        </a>
                    </li>
                    <li class="px-4">
                        <a href="#" class="hover:border-b-4 border-primary pb-4 transition-all duration-100">
                            Share a Coffe
                        </a>
                    </li>
                    <li class="px-4">
                        <a href="#" class="hover:border-b-4 border-primary pb-4 transition-all duration-100">
                            Sorprendete
                        </a>
                    </li>

                </ul>
            </div>

            {{-- Form de Busqueda --}}
            <div class="flex-1 px-1 ml-auto">
                <form class="relative w-full max-w-2xl ml-auto" action="{{route('search')}}">
                    {{-- Input de Busqueda --}}
                    <x-input id="search" key="search" class="flex w-full h-12" placeholder="Que necesitas?" />
                    <input name="type" type="hidden" wire:model="type" />

                    {{--<div class="absolute bg-white shadow rounded-md w-full">
                            <ul class="text-sm text-gray-500">
                                @foreach ($terminos as $termino)
                                <li class="py-2 px-4 cursor-pointer hover:text-white hover:bg-secondary"
                                    onclick="document.getElementById('search').value='{{$termino}}'">{{ $termino }}
                    </li>
                    @endforeach
                    </ul>
                </div>--}}

                {{-- Boton de Busquedad --}}
                <x-button type="submit"
                          class="absolute w-10 h-10 top-1 right-1 p-2 bg-secondary text-gray-600
                               hover:bg-secondary-light hover:opacity-90">
                    <x-icon-search class="w-8 h-auto text-white" />
                </x-button>

            </form>
        </div>

        {{-- Boton de Filtros --}}
        <div class="flex-none">
            <x-button onclick="document.getElementById('filters').classList.toggle('-translate-y-full')"
                      class="group h-12 py-1 px-4 md:ml-4 border border-gray-300
                           text-secondary-light hover:text-white hover:bg-secondary">

                <x-icon-options class="w-6 h-auto group-hover:text-white" />
                <span class="hidden md:inline-flex ml-4">Filtros</span>
            </x-button>
        </div>

    </div>

</div>

{{-- Panel de Filtros --}}
<div id="filters"
     class="fixed top-0 lg:top-36 lg:right-4
     w-screen h-screen lg:w-2/3 lg:h-auto lg:z-10
     transform -translate-y-full
     transition ease-in-out duration-500 z-50">

    {{-- Formulario de filtros --}}
    <form class="flex flex-col h-screen lg:h-auto w-full  lg:mt-1 bg-white rounded-md">

        {{-- Titulo y Botones--}}
        <div class="flex-none h-16  px-4
                      bg-secondary lg:bg-transparent
                       lg:rounded-md lg:border-b
                      text-white lg:text-secondary">

            <div class="flex items-center h-full">
                {{-- Titulo --}}
                <h2 class="font-bold mr-auto">Filtros</h2>

                {{-- Cerrar Pantalla --}}
                <a class="cursor-pointer lg:hidden"
                    onclick="document.getElementById('filters').classList.add('-translate-y-full')">
                    <x-icon-close-outline class="w-6 h-auto text-gray-400" />
                </a>
            </div>

        </div>

        {{-- Opciones del Formulario --}}
        <div class="flex-grow p-4 lg:px-12 overflow-y-auto">
            <div class="flex flex-wrap my-4">
                <h2 class="w-full">Tipo</h2>
                <div class="w-full md:w-2/4 px-2">
                    <x-select key="type" class="p-3">
                        <option disabled>Tipo producto</option>
                        <option value="{{config('product.TYPE_SERVICE')}}"
                                class="text-secondary"
                                @if ($type == config('product.TYPE_SERVICE'))@endif>

                                Servicios
                        </option>
                        <option value="{{config('product.TYPE_EXPERIENCE')}}"
                                class="text-secondary"
                                @if ($type==config('product.TYPE_EXPERIENCE'))@endif>

                                Experiencias
                        </option>
                    </x-select>
                </div>
            </div>
            {{--
            <div class="flex flex-wrap my-4">
                <h2 class="w-full">Ubicacion</h2>
                <div class="w-full md:w-1/3 px-2">
                    <x-select key="city" class="p-3">
                        <option value="">Provincia</option>
                    </x-select>
                </div>
                <div class="w-full md:w-1/3 px-2">
                    <x-select key="departament" class="p-3">
                        <option value="">Departamento</option>
                    </x-select>
                </div>
                <div class="w-full md:w-1/3 px-2">
                    <x-select key="locality" class="p-3">
                        <option value="">Localidad</option>
                    </x-select>
                </div>
            </div>
            --}}

            <div class="flex flex-wrap my-4 ">
                <h2 class="w-full">Categorias</h2>
                <div class="w-full md:w-1/2 px-2">
                    <x-select key="city" class="p-3">
                        <option value="">Categorias</option>
                    </x-select>
                </div>
                <div class="w-full md:w-1/2 px-2">
                    <x-select key="city" class="p-3">
                        <option value="">Subcategorias</option>
                    </x-select>
                </div>
            </div>

            <div class="flex flex-wrap my-4 ">
                <h2 class="w-full">Rangos de precios</h2>
                <div class="relative w-full lg:w-1/2 px-2">
                    <x-input key="minPrice" class="h-12 w-full pr-4 " min="0" max="49999" placeholder="0.00" />
                    <span
                        class="block absolute top-2 py-2 right-0 text-xl rounded-r h-10 w-8 text-center text-gray-500">$</span>
                </div>

                <div class="relative w-full lg:w-1/2 px-2">
                    <x-input key="minPrice" class="h-12 w-full pr-4 " min="0" max="49999" placeholder="0.00" />
                    <span
                        class="block absolute top-2 py-2 right-0 text-xl rounded-r h-10 w-8 text-center text-gray-500">$</span>
                </div>

            </div>


        </div>

        {{-- Boton de Aplicacion de Opciones --}}
        <div class="flex-none h-16 lg:h-20">
            <div class="flex items-center justify-center lg:justify-end h-full px-4  border-t ">
                <x-button type="reset" class="border border-secondary text-secondary
                                            w-28 h-12 mr-2
                                        hover:bg-secondary hover:text-white
                                        active:bg-secondary active:text-white">
                    Reset
                </x-button>

                <x-button class="bg-primary w-28 h-12 ml-2 hover:bg-primary-light">
                    Aplicar
                </x-button>
            </div>
        </div>

    </form>

</div>

{{-- Barra titulo --}}
<div class="w-full mt-36 p-4 lg:px-8 mb-4">
    {{--Breadcrumb--}}
    <div class="flex justify-between">


        <div class="flex items-end justify-start text-sm font-light text-gray-500 mb-4">
            <a href="{{ route('index') }}" class="text-primary">Inicio</a>
            <x-icon-chevron-forward class="h-5 p-1 mt-0.5" />
            <span>
                @if ($type == config('product.TYPE_SERVICE'))
                    Servicios
                @elseif ($type == config('product.TYPE_EXPERIENCE'))
                    Experiencias
                @endif
            </span>
        </div>

        <div class="h-full bg-black self-end hidden">

            <input type="radio" name="type" wire:model="type" value="servicios" />
            <input type="radio" name="type" wire:model="type"  value="experiencias" />
            <input type="text"  wire:model="search"  />
        </div>
    </div>

    {{-- Titulo --}}
    <h1 class="lg:text-2xl ">
        Mostrando Resultados de:
        "<span class="font-semibold text-gray-700">{{ $search ?? "Cadena de busqueda" }}</span>"
    </h1>
</div>

{{-- Cuerpo Principal --}}
<div class="flex flex-wrap lg:px-4 pb-8">

    {{-- Panel de resultados --}}
    <div class="w-full">

        @empty($results->first())
            {{--  --}}
            <div class="p-16 text-center bg-gray-200 mx-auto rounded space-y-6">
                <x-icon-sad class="w-24 h-24 text-primary mx-auto"/>
                <div>
                <h2 class="font-bold text-3xl mb-4">No se encontraron resultados para tu busqueda</h2>
                <p class="max-w-xl text-gray-600 mx-auto">Prueba cambiando tu cadena de busquedad o filtra a traves de los enlaces de la barra de categrias</p>
                </div>
            </div>
        @else

        {{-- Contador y Ordenamiento --}}
        <div class="flex items-center justify-between h-20 border-t px-4">

            {{-- Contador de Resultados --}}
            <div class="flex-shrink-0 hidden lg:block ">
                ({{ $results->count() }}) Resultados
            </div>

            {{-- Ordenamiento --}}
            <div class="flex w-full items-center lg:items-baseline justify-between lg:justify-end">

                <span class="font-semibold text-secondary lg:mr-4">Ordenar por:</span>

                <div class="relative py-2 text-sm
                            cursor-pointer text-gray-500 active:text-secondary">
                    <div class="flex items-center justify-center">
                        <a class="flex items-baseline justify-end w-48 lg:w-52 lg:text-gray-600 p-4
                                bg-white shadow rounded-md cursor-pointer "
                            onclick="document.getElementById('sortOptions').classList.toggle('scale-0')">
                            <input id="sort" type="text" name="sort" value="Precio (Ascendente)"
                                class="appearance-none bg-transparent w-5/6 disabled" />
                            <x-icon-caret-down class="h-4 w-auto  " />
                        </a>
                    </div>

                    <ul id="sortOptions" class="absolute w-52 top-16 right-5   divide-y divide-gray-200 text-xs shadow bg-white rounded-md
                                            transform scale-0 transitions ease-in-out duration-200">
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
        <ul class="flex flex-wrap justify-start h-full w-auto self-center mx-auto px-2">

            @foreach ($results as $product)
            <li class="w-full md:w-1/2 lg:w-1/4 my-4">
                <a href="{{ route('product',[$product->type, $product->id, $product->slug]) }}"
                    class="block h-full transform hover:-translate-y-4 active:opacity-75 transition ease-out duration-500 p-2">
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
<div wire:init="filterResults"></div>
