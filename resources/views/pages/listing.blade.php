<x-guest-layout>
    <div class="fixed bottom-0 px-4 z-20 bg-gray-200" >
        <div class="flex items-center h-16" onclick="document.getElementById('filters').classList.remove('translate-y-full')">
            <x-input key="search" class="h-12 flex-1 mr-2 bg-white" placeholder="Buscar" />
            <x-button class="w-12 h-12 initial rounded-full bg-primary text-white ml-1 shadow-w2">
                <x-icon-search class="w-6 h-auto" />
            </x-button>
        </div>
    </div>

    <div class="fixed top-0 bg-white w-full h-20 px-8 z-10 shadow-sm">
        <div class=" container mx-auto flex items-center h-full  px-4 ">
            <h1 class="font-whujo text-2xl font-bold  text-primary">whujo</h1>
            <div class="ml-auto flex items-center">
                <a href="{{route('login')}}" class="flex mr-4">
                    Entrar
                    <x-icon-enter-outline class="w-6 h-auto ml-1" />
                </a>
                <a href="{{route('register')}}"
                    class="px-5 leading-7 text-sm rounded-full border border-primary  text-primary hover:text-white hover:bg-primary transition-colors ease-in-out duration-300">Registrar</a>
            </div>
        </div>
    </div>



    <section role="main" class="bg-white top-24 relative">
        <div id="filters"
            class="fixed top-0 h-screen px-4 py-6 transform translate-y-full transition-transform ease-out duration-500 bg-white md:h-24 md:sticky z-20">



            <div class="flex items-center justify-between h-10">
                <h2 class="leading-5 text-lg">Buscar</h2>
                <button class="leading-5 text-2xl"
                    onclick="document.getElementById('filters').classList.add('translate-y-full')">x</button>
            </div>

            <form method="get" action="/search"
                class="flex flex-col mt-4 transform  md:flex-row items-center w-full mb-8 justify-center md:px-8 text-lg">

                <div class="flex-1 md:mx-1">
                    <x-input key="search" placeholder="Que estas buscando?" class="h-12 placeholder-secondary" />
                </div>

                <div class="flex-1 md:mx-1">
                    <x-input key="location" placeholder="Que estas buscando?" class="h-12 placeholder-secondary" />
                </div>

                <div class="w-full flex-1 md:mx-1">
                    <x-select key="type" placeholder="Que estas buscando?" class="w-full h-12 text-sm">
                        <option disabled selected value="" class="text-gray-400">Productos</option>
                        <option value="1">Servicios</option>
                        <option value="2">Experiencias</option>
                    </x-select>
                </div>

                <div class="w-full flex-1 md:mx-1">
                    <x-select key="category" placeholder="Que estas buscando?" class="h-12 text-sm">
                        <option disabled selected value="" class="text-gray-400">Categorías</option>
                        @foreach (App\Models\Category::all(['id', 'name']) as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </x-select>
                </div>


                <x-button type="button" class="w-full h-12 m-1 border boder-gray-400">
                    <x-icon-options class="w-5 h-auto" />
                    <span class="text-secondary ml-4">Filtros</span>
                </x-button>

                <x-button type="submit"
                    class="w-full h-12 mt-6 text-sm  bg-primary hover:bg-secondary active:bg-primary-light">
                    Buscar
                </x-button>


            </form>
        </div>

        <div class="container mx-auto py-4">

            <div class="px-4 py-4 my-4 4 border-b z-0">
                <h1 class="text-3xl font-semibold">Búsqueda</h1>
                <h2 class="mb-3">Listado de Servicios y Experiencias</h2>
            </div>

            <div class="flex my-8 relative">
                <aside
                    class="hidden sticky w-full min-h-screen top-0 right-0 bg-secondary bg-opacity-75 lg:flex lg:w-1/3">
                    <div class="w-3/4 bg-gray-200 lg:bg-gray-300 lg:w-full">
                        <h1 class="text-xl font-semibold mb-4 p-4 bg-primary text-white">Filtros</h1>
                        <form action="" class="flex flex-col gap-4">
                            <select class="py-4 px-2 mx-4" name="type_product" id="">
                                <option>Tipo de producto</option>
                                <option value="experiences">Experiencias</option>
                                <option value="services">Servicios</option>
                            </select>
                            <input class="py-4 px-2 mx-4" type="text" placeholder="Que estas buscando?">
                            <input class="py-4 px-2 mx-4" type="text" placeholder="En donde lo necesitas?">
                            <select class="py-4 px-2 mx-4" name="type_product" id="">
                                <option>Elige una categoría</option>
                                <option>Categoría 1</option>
                                <option>Categoría 2</option>
                            </select>

                            <select class="py-4 px-2 mx-4" name="type_product" id="">
                                <option>Disponibilidad</option>
                                <option>Categoría 1</option>
                                <option>Categoría 2</option>
                            </select>

                            <div>
                                <div class="hover:bg-gray-100 border-gray-300 border-solid border-t">
                                    <div class="flex justify-between p-4 cursor-pointer">
                                        <h2 class="text-lg font-medium ">Rango de precios</h2>
                                        <span class="font-bold pr-4 text-gray-500">></span>
                                    </div>
                                    <ul class="p-4 bg-gray-300">
                                        <li class="group p-2 hover:bg-gray-200 rounded flex gap-4">
                                            <input class="" name="price" id="price1" type="radio" value="1">
                                            <label class="cursor-pointer w-full" for="price1">menos de $2.500</label>
                                        </li>
                                        <li class="group p-2 hover:bg-gray-200 rounded flex gap-4">
                                            <input class="" name="price" id="price2" type="radio" value="1">
                                            <label class="cursor-pointer w-full" for="price2">menos de $2.500</label>
                                        </li>
                                        <li class="group p-2 hover:bg-gray-200 rounded flex gap-4">
                                            <input class="" name="price" id="price3" type="radio" value="1">
                                            <label class="cursor-pointer w-full" for="price3">menos de $2.500</label>
                                        </li>
                                    </ul>
                                </div>

                                <div class="hover:bg-gray-100 border-gray-300 border-solid border-t">
                                    <div class="flex justify-between p-4 cursor-pointer">
                                        <h2 class="text-lg font-medium ">Filtro 2</h2>
                                        <span class="font-bold pr-4 text-gray-500">></span>
                                    </div>
                                </div>

                                <div class="hover:bg-gray-100 border-gray-300 border-solid border-t">
                                    <div class="flex justify-between p-4 cursor-pointer">
                                        <h2 class="text-lg font-medium ">Opciones Múltiples</h2>
                                        <span class="font-bold pr-4 text-gray-500">></span>
                                    </div>
                                    <ul class="p-4 bg-gray-300">
                                        <li class="group p-2 hover:bg-gray-200 rounded flex gap-4">
                                            <input type="checkbox" id="check01" name="check01">
                                            <label class="cursor-pointer w-full" for="check01">Opción Multiple 1</label>
                                        </li>
                                        <li class="group p-2 hover:bg-gray-200 rounded flex gap-4">
                                            <input type="checkbox" id="check02" name="check02">
                                            <label class="cursor-pointer w-full" for="check02">Opción Multiple 1</label>
                                        </li>
                                        <li class="group p-2 hover:bg-gray-200 rounded flex gap-4">
                                            <input type="checkbox" id="check03" name="check03">
                                            <label class="cursor-pointer w-full" for="check03">Opción Multiple 1</label>
                                        </li>
                                    </ul>
                                </div>


                            </div>

                            <button class="py-3 px-6 bg-primary text-white rounded m-8 hover:bg-primary-lighter">Aplicar
                                Filtros</button>
                        </form>
                    </div>
                </aside>

                <main class="w-full lg:w-2/3">
                    <div class="flex justify-between p-4 bg-white">
                        <h2 class="py-1">5 Resultados</h2>
                        <button class="px-6 py-1 bg-secondary bg-opacity-50 text-white rounded-full text-sm"> Ordenar
                            por ></button>
                    </div>
                    <div>
                        <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-4">
                            <li class="h-48 rounded bg-primary"><a href=""
                                    class="block min-h-full rounded text-center text-white">Resultado 1</a></li>
                            <li class="h-48 rounded bg-primary"><a href=""
                                    class="block min-h-full rounded text-center text-white">Resultado 2</a></li>
                            <li class="h-48 rounded bg-primary"><a href=""
                                    class="block min-h-full rounded text-center text-white">Resultado 3</a></li>
                            <li class="h-48 rounded bg-primary"><a href=""
                                    class="block min-h-full rounded text-center text-white">Resultado 4</a></li>
                            <li class="h-48 rounded bg-primary"><a href=""
                                    class="block min-h-full rounded text-center text-white">Resultado 5</a></li>
                            <li class="h-48 rounded bg-primary"><a href=""
                                    class="block min-h-full rounded text-center text-white">Resultado 6</a></li>
                            <li class="h-48 rounded bg-primary"><a href=""
                                    class="block min-h-full rounded text-center text-white">Resultado 7</a></li>
                            <li class="h-48 rounded bg-primary"><a href=""
                                    class="block min-h-full rounded text-center text-white">Resultado 8</a></li>
                            <li class="h-48 rounded bg-primary"><a href=""
                                    class="block min-h-full rounded text-center text-white">Resultado 9</a></li>
                            <li class="h-48 rounded bg-primary"><a href=""
                                    class="block min-h-full rounded text-center text-white">Resultado 10</a></li>
                        </ul>
                    </div>

                    <button href=""
                        class="block mt-8 w-3/4 text-center px-6 py-2 hover:bg-white text-primary rounded-lg text-xl mx-auto">Cargar
                        más</button>

                </main>
            </div>
        </div>
    </section>
</x-guest-layout>
