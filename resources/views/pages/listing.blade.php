
<x-app-nonav-layout>

    <livewire:search-product/>


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

            <div class="flex relative w-full">
                <aside class="hidden w-full min-h-screen top-0 right-0 md:mr-4 bg-secondary bg-opacity-75 lg:flex sticky lg:w-1/5">
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

                <main class="w-full lg:w-4/5">
                    <div class="flex justify-between p-4 bg-white">
                        <h2 class="py-1">5 Resultados</h2>
                        <button class="px-6 py-1 bg-secondary bg-opacity-50 text-white rounded-full text-sm"> Ordenar
                            por ></button>
                    </div>
                    <div>
                        <ul class="flex flex-col md:flex-row md:flex-wrap -mx-2">
                            @for ($i = 1; $i < 25; $i++) <li class="w-1/4 h-auto px-2 mt-2 ">
                                <a href="#" class="group hover:opacity-75 transition-opacity ease-in-out duration-500">
                                    <div class="w-full">
                                        <div
                                            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-primary">
                                            <img alt="..."
                                                src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1051&amp;q=80"
                                                class="object-cover h-full align-middle rounded-t-lg" />
                                            <blockquote class="relative p-8 mb-4 text-xs text-primary bg-gray-100">
                                                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 583 95" class="absolute left-0 w-full block fil"
                                                    style="height: 95px; top: -94px;">
                                                    <polygon points="-30,95 583,95 583,65" class="fill-current">
                                                    </polygon>
                                                </svg>
                                                <h4 class="text-xl font-bold text-secondary ">
                                                    Top Notch Services
                                                </h4>
                                                <p class="text-md font-light mt-2 text-secondary">
                                                    The Arctic Ocean freezes every winter and much of the
                                                    sea-ice then thaws every summer, and that process will
                                                    continue whatever happens.
                                                </p>
                                            </blockquote>
                                        </div>
                                    </div>
                                </a>

                                </li>
                                @endfor
                        </ul>
                    </div>

                    <button href=""
                        class="block mt-8 w-3/4 text-center px-6 py-2 hover:bg-white text-primary rounded-lg text-xl mx-auto">
                        Cargar más
                    </button>

                </main>
            </div>
        </div>
    </section>
</x-app-nonav-layout>
