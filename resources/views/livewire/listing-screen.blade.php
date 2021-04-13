@php
$results = App\Models\Experience::all();
@endphp
<x-app-nonav-layout>

    {{-- contenedor --}}
    <div class="relative w-full lg:max-w-none lg:overflow-visible">

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
            <div class="flex items-center px-4 lg:hidden">

                {{-- Boton de Filtros --}}
                <x-button class="w-12 h-12 p-1 border border-gray-300 text-secondary-light"
                    onclick="document.getElementById('filters').classList.remove('translate-y-full')">
                    <x-icon-options class="w-6 h-auto" />
                </x-button>


                {{-- Form de Busqueda --}}
                <div class="relative ml-2 w-full">

                    {{-- Input de Busqueda --}}
                    <x-input key="search" class="flex w-full h-12" placeholder="Que necesitas?" />

                    {{-- Boton de Busquedad --}}
                    <x-button class="absolute w-10 h-10 top-3 right-1 p-2 bg-secondary text-gray-600">
                        <x-icon-search class="w-8 h-auto text-white" />
                    </x-button>

                </div>

            </div>

            {{-- Menu de Subcategorias --}}
            <ul class="hidden lg:flex items-center h-full text-gray-600 font-semibold divide-x px-4">
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

        {{-- Barra titulo --}}
        <div class="w-full mt-36 p-4 lg:px-8 mb-4">

            {{--Breadcrumb--}}
            <div class="flex items-end justify-start text-sm font-light text-gray-500 mb-4">
                <a href="{{ route('index') }}" class="text-primary">Inicio</a>
                <x-icon-chevron-forward class="h-5 p-1 mt-0.5" />
                <span>Busqueda</span>
            </div>

            {{-- Titulo --}}
            <h1 class="lg:text-2xl ">
                Mostrando Resultados de:
                "<span class="font-semibold text-gray-700">{{ $search ?? "Cadena de busqueda" }}</span>"
            </h1>

        </div>

        {{-- Cuerpo Principal --}}
        <div class="flex flex-wrap lg:px-4 pb-8">

            {{-- Panel de Filtros --}}
            <div id="filters" class="fixed inset-0 lg:static w-screen lg:w-1/4
                        min-h-screen lg:min-h-full z-30 lg:z-0
                        lg:px-4 bg-white lg:bg-transparent
                        transform translate-y-full lg:transform-none lg:translate-y-0
                        transition ease-out duration-300">

                {{-- Formulario de filtros --}}
                <form class="relative max-h-screen w-full bg-white lg:rounded-md ">

                    {{-- Titulo y Botones--}}
                    <div class="flex-none flex items-center justify-between h-16 px-4 border-b">

                        {{-- Limpiar formulario --}}
                        <x-button type="reset"
                            class="text-sm underline text-secondary hover:text-blue-400 order-1 lg:order-2">
                            Limpiar
                        </x-button>

                        {{-- Titulo --}}
                        <h2 class="font-bold order-2 lg:order-1">Filtros</h2>

                        {{-- Cerrar Pantalla --}}
                        <a class="order-3 lg:hidden cursor-pointer"
                            onclick="document.getElementById('filters').classList.add('translate-y-full')">
                            <x-icon-close-outline class="w-6 h-auto text-gray-400" />
                        </a>

                    </div>

                    {{-- Opciones del Formulario --}}
                    <div class="flex-grow overflow-y-scroll lg:overflow-visible p-4">

                        <div class="relative p-4">
                            <x-input id="search" key="search" placeholder="¿Que estas buscando?"
                                class="w-full h-12 placeholder-secondary" />
                            {{-- Boton de Busquedad --}}
                            <x-button type="submit"
                                class="absolute w-10 h-10 top-7 right-5 p-2 bg-secondary text-gray-600 hover:bg-primary">
                                <x-icon-search class="w-8 h-auto text-white" />
                            </x-button>
                        </div>

                        <div class="px-4">
                            <label for="type" class="text-sm  text-gray-500">Tipo de Producto</label>
                            <x-select id="type" key="type" placeholder="Tipo de Producto" class="w-full h-12 text-sm">
                                <option selected value="all" class="text-gray-400">
                                    Todos
                                </option>
                                <option value="services">experiences</option>
                                <option value="experiences">Experiencias</option>
                            </x-select>
                        </div>

                        <div class="px-4">
                            <label for="type" class="text-sm  text-gray-500">Categoría</label>
                            <x-select key="category" class="w-full text-gray-400 h-12 text-sm"
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
                                    <x-input key="minPrice" class="h-12 w-full pr-4 " min="0" max="49999"
                                        placeholder="0.00" />
                                    <span
                                        class="block absolute top-2 py-2 right-0 text-xl rounded-r h-10 w-8 text-center text-gray-500">$</span>
                                </div>
                                <div class="px-4 text-center text-3xl ">-</div>
                                <div class="relative w-2/5">
                                    <x-input key="minPrice" class="h-12 w-full" min="1" max="50000"
                                        placeholder="0.00" />
                                    <span
                                        class="block absolute top-2 py-2 right-0 text-xl rounded-r h-10 w-8 text-center text-gray-500">$</span>
                                </div>
                            </div>
                        </div>

                    </div>

                    {{-- Boton de Aplicacion de Opciones --}}
                    <div class="fixed bottom-0 inset-x-0 h-16 border border-t lg:hidden">
                        <div class="flex items-center h-full my-auto px-8">
                            <x-button class="bg-primary w-full py-2"> Aplicar</x-button>
                        </div>
                    </div>

                </form>

            </div>

            {{-- Panel de resultados --}}
            <div class="w-full lg:w-3/4 px-4">

                {{-- Contador y Ordenamiento --}}
                <div class="flex items-center justify-between h-20 border-t">

                    {{-- Contador de Resultados --}}
                    <div class="hidden lg:block">
                        ({{ $results->count()}}) Resultados
                    </div>

                    {{-- Ordenamiento --}}
                    <div class="flex items-baseline justify-end z-10">

                        <span class="font-semibold text-secondary mr-4">Ordenar por:</span>

                        <div class="relative flex items-center justify-center py-2 px-5 text-sm
                                    cursor-pointer  text-gray-500 active:text-secondary">
                            <a class="flex items-baseline justify-end w-52 lg:text-gray-600 p-4
                                    bg-white shadow rounded-md cursor-pointer "
                                onclick="document.getElementById('sortOptions').classList.toggle('scale-0')">
                                <input id="sort" type="text" name="sort" value="Precio (Ascendente)"
                                    class="appearance-none bg-transparent w-5/6 disabled" />
                                <x-icon-caret-down class="h-4 w-auto  " />
                            </a>


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
                <ul class="flex flex-wrap justify-start h-full w-auto self-center  mx-auto">
                    @foreach ($results as $product)
                    <li class="w-full md:w-1/2 lg:w-1/3 my-4 h-96">
                        <a href="/product/{{$product->id}}"
                            class="block h-full transform hover:-translate-y-4 active:opacity-75 transition ease-out duration-500 p-2">
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
            document.getElementById('sort').value= text;
            document.getElementById('sortOptions').classList.toggle('scale-0');
        }
    </script>
</x-app-nonav-layout>
