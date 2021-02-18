<x-appnonav-layout>

    <div class="w-screen h-screen flex bg-gray-300">

        <div class="w-64 h-full bg-gray-900">
            <div class="h-16 bg-white bg-opacity-10">
                <h1 class="text-3xl font-bold font-whujo text-whujo p-3">whujo</h1>
            </div>
            <div>
                <div class="text-gray-50 pl-4 h-10 py-1">Main</div>
                <div>
                    <ul>
                        <li class="border-l-4 border-blue-400 h-10 flex items-stretch text-gray-400 transition-150">
                            <a href=""
                                class="hover:bg-blue-900 hover:text-white w-full flex items-center  space-x-2 px-4">
                                <span class="h-6">
                                    <x-icon-newspaper class="h-full" />
                                </span>
                                <span> Dashboard</span>
                            </a>
                        </li>
                        <li
                            class="border-l-4 border-transparent hover:border-blue-400 h-10 flex items-stretch text-gray-400 transition-150">
                            <a href=""
                                class="hover:bg-blue-900 hover:text-white w-full flex items-center  space-x-2 px-4">
                                <span class="h-6">
                                    <x-icon-camera class="h-full" /></span>
                                <span> Perfil</span>
                            </a>
                        </li>
                        <li
                            class="border-l-4 border-transparent hover:border-blue-400 h-10 flex items-stretch text-gray-400 transition-150">
                            <a href=""
                                class="hover:bg-blue-900 hover:text-white w-full flex items-center  space-x-2 px-4">
                                <span class="h-6">
                                    <x-icon-wallet class="h-full" /></span>
                                <span> Seguridad</span>
                            </a>
                        </li>
                        <li
                            class="border-l-4 border-transparent hover:border-blue-400 h-10 flex items-stretch text-gray-400 transition-150">
                            <a href=""
                                class="hover:bg-blue-900 hover:text-white w-full flex items-center  space-x-2 px-4">
                                <span class="h-6">
                                    <x-icon-location class="h-full" /></span>
                                <span> Notifcaciones</span>
                            </a>
                        </li>
                        <li
                            class="border-l-4 border-transparent hover:border-blue-400 h-10 flex items-stretch text-gray-400 transition-150">
                            <a href=""
                                class="hover:bg-blue-900 hover:text-white w-full flex items-center  space-x-2 px-4">
                                <span class="h-6">
                                    <x-icon-wallet class="h-full" /></span>
                                <span> Wallet</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="w-full">
            <div class="h-16 shadow-xl">
                <div class="flex h-full items-center space-x-8 px-8">
                    <a href="" class="h-full w-28 flex items-center hover:bg-white hover:bg-opacity-25 text-center transition-300">
                        <span class="w-full">Share a coffe</span>
                    </a>
                    <a href="" class="h-full w-28 flex items-center hover:bg-white hover:bg-opacity-25 text-center transition-300">
                        <span class="w-full">Experiencias</span>
                    </a>
                    <a href="" class="h-full w-28 flex items-center hover:bg-white hover:bg-opacity-25 text-center transition-300">
                        <span class="w-full">Servicios</span>
                    </a>
                    <div class="flex-grow"></div>
                    <a href="#" class="bg-gray-400 h-10 w-10 rounded-full border-2 border-gray-100"></a>
                    <a href="" class="flex items-center justify-between rounded-full
                                    text-primary text-base font-light border
                                    border-primary p-2 h-10 space-x-2
                                    hover:bg-primary hover:bg-opacity-5 transition-300">
                        <span class="h-6">Crear anuncio</span>
                        <span class="h-6 w-6 rounded-full border border-primary">
                            <x-icon-add-outline class="w-auto h-full" />
                        </span>
                    </a>
                </div>
            </div>
            <div class="p-8">
                <h1 class="text-3xl font-light">Hola, Usuario!</h1>
                <div class="flex space-x-8 py-4">
                    <div class="w-1/4 rounded-xl h-32 bg-primary flex items-end justify-between p-6">
                        <div class="text-gray-100 w-2/3">
                            <h2 class="text-6xl">0</h2>
                            <h3>Anuncios Activos</h3>
                        </div>
                        <div class="w-1/3 h-full text-white">
                            <x-icon-newspaper class="w-full h-full"/>
                        </div>
                    </div>
                    <div class="w-1/4 rounded-xl h-32 bg-secondary flex items-end justify-between p-6">
                        <div class="text-gray-100 w-2/3">
                            <h2 class="text-6xl">0</h2>
                            <h3>Reservaciones</h3>
                        </div>
                        <div class="w-1/3 h-full text-white">
                            <x-icon-newspaper class="w-full h-full" />
                        </div>
                    </div>
                    <div class="w-1/4 rounded-xl h-32 bg-third-orange flex items-end justify-between p-6">
                        <div class="text-gray-100 w-2/3">
                            <h2 class="text-6xl">0</h2>
                            <h3>Rating & reviews</h3>
                        </div>
                        <div class="w-1/3 h-full text-white">
                            <x-icon-newspaper class="w-full h-full" />
                        </div>
                    </div>
                    <div class="w-1/4 rounded-xl h-32 bg-third-yonder flex items-end justify-between p-6">
                        <div class="text-gray-100 w-2/3">
                            <h2 class="text-6xl">0</h2>
                            <h3>Fondos Totales</h3>
                        </div>
                        <div class="w-1/3 h-full text-white">
                            <x-icon-newspaper class="w-full h-full" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</x-appnonav-layout>

{{--
    <div class="bg-white w-screen h-screen flex flex-wrap">
        <div class="hidden lg:static lg:w-1/6 bg-white rounded-r-3xl h-full pt-8">

            <div class="relative h-16  ">

                <div class="flex items-center pl-4">
                    <h1 class="font-whujo text-white text-4xl font-bold">whujo</h1>
                </div>

                <div class="absolute bg-white bg-opacity-75 rounded-l-2xl right-0 inset-y-0 flex items-center h-full px-1">
                    <span>
                        <x-icon-chevron-forward class="h-8 w-auto transform rotate-180" />
                    </span>
                </div>

            </div>

            <div class="mt-16">

                <div class="space-x-4 flex items-center text-white ">
                    <a href="#"
                        class="hover:bg-white hover:bg-opacity-25 h-12 w-full flex items-center pl-8 space-x-4 transition-200">
                        <span>
                            <x-icon-newspaper class="w-6 h-6" /></span>
                        <span class="text-xl">Dashboard</span>
                    </a>
                </div>

                <div class="space-x-4 flex items-center text-white ">
                    <a href="#"
                        class="hover:bg-white hover:bg-opacity-25 h-12 w-full flex items-center pl-8 space-x-4 transition-200">
                        <span>
                            <x-icon-newspaper class="w-6 h-6" /></span>
                        <span class="text-xl">Dashboard</span>
                    </a>
                </div>

                <div class="space-x-4 flex items-center text-white ">
                    <a href="#"
                        class="hover:bg-white hover:bg-opacity-25 h-12 w-full flex items-center pl-8 space-x-4 transition-200">
                        <span>
                            <x-icon-newspaper class="w-6 h-6" /></span>
                        <span class="text-xl">Dashboard</span>
                    </a>
                </div>

                <div class="space-x-4 flex items-center text-white ">
                    <a href="#"
                        class="hover:bg-white hover:bg-opacity-25 h-12 w-full flex items-center pl-8 space-x-4 transition-200">
                        <span>
                            <x-icon-newspaper class="w-6 h-6" /></span>
                        <span class="text-xl">Dashboard</span>
                    </a>
                </div>

                <div class="space-x-4 flex items-center text-white ">
                    <a href="#"
                        class="hover:bg-white hover:bg-opacity-25 h-12 w-full flex items-center pl-8 space-x-4 transition-200">
                        <span>
                            <x-icon-newspaper class="w-6 h-6" /></span>
                        <span class="text-xl">Dashboard</span>
                    </a>
                </div>

                <div class="space-x-4 flex items-center text-white ">
                    <a href="#"
                        class="hover:bg-white hover:bg-opacity-25 h-12 w-full flex items-center pl-8 space-x-4 transition-200">
                        <span>
                            <x-icon-newspaper class="w-6 h-6" /></span>
                        <span class="text-xl">Dashboard</span>
                    </a>
                </div>


            </div>

        </div>

        <div class="w-full lg:w-5/6">
            <div class=" h-20 border-gray-200 border-b"></div>

            <div class="p-8 lg:p-16 ">
                <div class="max-w-5xl mx-auto flex flex-wrap space-y-4 lg:space-y-0 ">

                    <div class="w-full group border-4 lg:border-2 border-gray-200 lg:border-t-0 lg:border-l-0
                                    lg:w-80 h-80 flex flex-col space-y-4 items-center justify-center cursor-pointer hover:border-4
                                    hover:shadow-2xl transition-500 text-gray-400 hover:rounded-xl active:transform">
                        <span class="group-hover:text-primary">
                            <x-icon-newspaper class="w-16 h-16" />
                        </span>
                        <h2 class="font-bold text-xl text-gray-500 group-hover:text-gray-700">Share a coffe</h2>

                        <div>
                            <button class="group-hover:bg-primary group-hover:bg-opacity-10 group-hover:text-primary
                                               bg-gray-200 rounded-xl py-4 px-8 transition-500">
                                Panel de Control</button>
                        </div>

                    </div>

                    <div class="w-full group border-gray-200 border-b border-r lg:w-80 h-80 flex flex-col space-y-4
                                    items-center justify-center cursor-pointer hover:border-4
                                    hover:shadow-2xl transition-500 text-gray-400 hover:rounded-xl active:transform">
                        <span class="group-hover:text-primary">
                            <x-icon-camera class="w-16 h-16" />
                        </span>
                        <h2 class="font-bold text-xl text-gray-500 group-hover:text-gray-700">Experiencias</h2>

                        <div>
                            <button class="group-hover:bg-primary group-hover:bg-opacity-10 group-hover:text-primary
                                               bg-gray-200 rounded-xl py-4 px-8 transition-500">
                                Panel de Control</button>
                        </div>
                    </div>

                    <div class="w-full group border-gray-200 border-b lg:w-80 h-80 flex flex-col space-y-4
                                      items-center justify-center cursor-pointer hover:border-4
                                      hover:shadow-2xl transition-500 text-gray-400 hover:rounded-xl active:transform">
                        <span class="group-hover:text-primary">
                            <x-icon-options class="w-16 h-16" />
                        </span>
                        <h2 class="font-bold text-xl text-gray-500 group-hover:text-gray-700">Servicios</h2>

                        <div>
                            <button class="group-hover:bg-primary group-hover:bg-opacity-10 group-hover:text-primary
                                               bg-gray-200 rounded-xl py-4 px-8 transition-500">
                                Panel de Control</button>
                        </div>
                    </div>
                </div>
                <div class="max-w-5xl mx-auto flex ">
                    <div class="border-gray-200 border-r w-60 h-60 flex items-center justify-center">1</div>
                    <div class="border-gray-200 border-r w-60 h-60 flex items-center justify-center">2</div>
                    <div class="border-gray-200 border-r w-60 h-60 flex items-center justify-center">3</div>
                    <div class="w-60 h-60 flex items-center justify-center">4</div>
                </div>
            </div>
        </div>

    </div>
    --}}
