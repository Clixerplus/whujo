
<x-guest-layout>

    <livewire:search-product/>

{{--
    <section role="main" class="relative bg-white top-24">
        <div id="filters"
            class="fixed top-0 z-20 h-screen px-4 py-6 transition-transform duration-500 ease-out transform translate-y-full bg-white md:h-24 md:sticky">



            <div class="flex items-center justify-between h-10">
                <h2 class="text-lg leading-5">Buscar</h2>
                <button class="text-2xl leading-5"
                    onclick="document.getElementById('filters').classList.add('translate-y-full')">x</button>
            </div>

            <form method="get" action="/search"
                class="flex flex-col items-center justify-center w-full mt-4 mb-8 text-lg transform md:flex-row md:px-8">

                <div class="flex-1 md:mx-1">
                    <x-input key="search" placeholder="Que estas buscando?" class="h-12 placeholder-secondary" />
                </div>

                <div class="flex-1 md:mx-1">
                    <x-input key="location" placeholder="Que estas buscando?" class="h-12 placeholder-secondary" />
                </div>

                <div class="flex-1 w-full md:mx-1">
                    <x-select key="type" placeholder="Que estas buscando?" class="w-full h-12 text-sm">
                        <option disabled selected value="" class="text-gray-400">Productos</option>
                        <option value="1">Servicios</option>
                        <option value="2">Experiencias</option>
                    </x-select>
                </div>

                <div class="flex-1 w-full md:mx-1">
                    <x-select key="category" placeholder="Que estas buscando?" class="h-12 text-sm">
                        <option disabled selected value="" class="text-gray-400">Categorías</option>
                        @foreach (App\Models\Category::all(['id', 'name']) as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </x-select>
                </div>


                <x-button type="button" class="w-full h-12 m-1 border boder-gray-400">
                    <x-icon-options class="w-5 h-auto" />
                    <span class="ml-4 text-secondary">Filtros</span>
                </x-button>

                <x-button type="submit"
                    class="w-full h-12 mt-6 text-sm bg-primary hover:bg-secondary active:bg-primary-light">
                    Buscar
                </x-button>


            </form>
        </div>

        <div class="container py-4 mx-auto">

            <div class="z-0 px-4 py-4 my-4 border-b 4">
                <h1 class="text-3xl font-semibold">Búsqueda</h1>
                <h2 class="mb-3">Listado de Servicios y Experiencias</h2>
            </div>

            <div class="relative flex w-full">
                <aside class="sticky top-0 right-0 hidden w-full min-h-screen bg-opacity-75 md:mr-4 bg-secondary lg:flex lg:w-1/5">
                    <div class="w-3/4 bg-gray-200 lg:bg-gray-300 lg:w-full">
                        <h1 class="p-4 mb-4 text-xl font-semibold text-white bg-primary">Filtros</h1>
                        <form action="" class="flex flex-col gap-4">
                            <select class="px-2 py-4 mx-4" name="type_product" id="">
                                <option>Tipo de producto</option>
                                <option value="experiences">Experiencias</option>
                                <option value="services">Servicios</option>
                            </select>
                            <input class="px-2 py-4 mx-4" type="text" placeholder="Que estas buscando?">
                            <input class="px-2 py-4 mx-4" type="text" placeholder="En donde lo necesitas?">
                            <select class="px-2 py-4 mx-4" name="type_product" id="">
                                <option>Elige una categoría</option>
                                <option>Categoría 1</option>
                                <option>Categoría 2</option>
                            </select>

                            <select class="px-2 py-4 mx-4" name="type_product" id="">
                                <option>Disponibilidad</option>
                                <option>Categoría 1</option>
                                <option>Categoría 2</option>
                            </select>

                            <div>
                                <div class="border-t border-gray-300 border-solid hover:bg-gray-100">
                                    <div class="flex justify-between p-4 cursor-pointer">
                                        <h2 class="text-lg font-medium ">Rango de precios</h2>
                                        <span class="pr-4 font-bold text-gray-500">></span>
                                    </div>
                                    <ul class="p-4 bg-gray-300">
                                        <li class="flex gap-4 p-2 rounded group hover:bg-gray-200">
                                            <input class="" name="price" id="price1" type="radio" value="1">
                                            <label class="w-full cursor-pointer" for="price1">menos de $2.500</label>
                                        </li>
                                        <li class="flex gap-4 p-2 rounded group hover:bg-gray-200">
                                            <input class="" name="price" id="price2" type="radio" value="1">
                                            <label class="w-full cursor-pointer" for="price2">menos de $2.500</label>
                                        </li>
                                        <li class="flex gap-4 p-2 rounded group hover:bg-gray-200">
                                            <input class="" name="price" id="price3" type="radio" value="1">
                                            <label class="w-full cursor-pointer" for="price3">menos de $2.500</label>
                                        </li>
                                    </ul>
                                </div>

                                <div class="border-t border-gray-300 border-solid hover:bg-gray-100">
                                    <div class="flex justify-between p-4 cursor-pointer">
                                        <h2 class="text-lg font-medium ">Filtro 2</h2>
                                        <span class="pr-4 font-bold text-gray-500">></span>
                                    </div>
                                </div>

                                <div class="border-t border-gray-300 border-solid hover:bg-gray-100">
                                    <div class="flex justify-between p-4 cursor-pointer">
                                        <h2 class="text-lg font-medium ">Opciones Múltiples</h2>
                                        <span class="pr-4 font-bold text-gray-500">></span>
                                    </div>
                                    <ul class="p-4 bg-gray-300">
                                        <li class="flex gap-4 p-2 rounded group hover:bg-gray-200">
                                            <input type="checkbox" id="check01" name="check01">
                                            <label class="w-full cursor-pointer" for="check01">Opción Multiple 1</label>
                                        </li>
                                        <li class="flex gap-4 p-2 rounded group hover:bg-gray-200">
                                            <input type="checkbox" id="check02" name="check02">
                                            <label class="w-full cursor-pointer" for="check02">Opción Multiple 1</label>
                                        </li>
                                        <li class="flex gap-4 p-2 rounded group hover:bg-gray-200">
                                            <input type="checkbox" id="check03" name="check03">
                                            <label class="w-full cursor-pointer" for="check03">Opción Multiple 1</label>
                                        </li>
                                    </ul>
                                </div>


                            </div>

                            <button class="px-6 py-3 m-8 text-white rounded bg-primary hover:bg-primary-lighter">Aplicar
                                Filtros</button>
                        </form>
                    </div>
                </aside>

                <main class="w-full lg:w-4/5">
                    <div class="flex justify-between p-4 bg-white">
                        <h2 class="py-1">5 Resultados</h2>
                        <button class="px-6 py-1 text-sm text-white bg-opacity-50 rounded-full bg-secondary"> Ordenar
                            por ></button>
                    </div>
                    <div>
                        <ul class="flex flex-col -mx-2 md:flex-row md:flex-wrap">
                            @for ($i = 1; $i < 25; $i++) <li class="w-1/4 h-auto px-2 mt-2 ">
                                <a href="#" class="transition-opacity duration-500 ease-in-out group hover:opacity-75">
                                    <div class="w-full">
                                        <div
                                            class="relative flex flex-col w-full min-w-0 mb-6 break-words rounded-lg shadow-lg bg-primary">
                                            <img alt="..."
                                                src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1051&amp;q=80"
                                                class="object-cover h-full align-middle rounded-t-lg" />
                                            <blockquote class="relative p-8 mb-4 text-xs bg-gray-100 text-primary">
                                                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 583 95" class="absolute left-0 block w-full fil"
                                                    style="height: 95px; top: -94px;">
                                                    <polygon points="-30,95 583,95 583,65" class="fill-current">
                                                    </polygon>
                                                </svg>
                                                <h4 class="text-xl font-bold text-secondary ">
                                                    Top Notch Services
                                                </h4>
                                                <p class="mt-2 font-light text-md text-secondary">
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
                        class="block w-3/4 px-6 py-2 mx-auto mt-8 text-xl text-center rounded-lg hover:bg-white text-primary">
                        Cargar más
                    </button>

                </main>
            </div>
        </div>
    </section> --}}
</x-app-nonav-layout>
