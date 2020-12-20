<x-guest-layout>
    <section role="main" class="my-20 bg-gray-200">
        <div class="container mx-auto py-4">

            <div class="breadcrumb text-md text-gray-500 mb-4 px-4 z-0">
                <ul class="flex gap-1">
                    <li><a href="#" class="text-primary">Inicio</a></li>
                    <li> > </li>
                    <li>Busqueda</li>
                </ul>
            </div>

            <div class="px-4 mb-8 4 z-0">
                <h1 class="text-3xl font-semibold">Búsqueda</h1>
                <h2 class="mb-3">Listado de Servicios y Experiencias</h2>
                <hr>
            </div>

            <div class="flex gap-4">
                <aside class="hidden w-full min-h-screen top-0 right-0 bg-secondary bg-opacity-75 lg:flex lg:w-1/3">
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
