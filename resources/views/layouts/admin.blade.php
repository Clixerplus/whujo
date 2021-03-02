<x-appnonav-layout>


    <div class="relative bg-gray">

        {{-- navbar --}}
        <div class="fixed top-0 inset-x-0 w-full z-10 lg:z-20 shadow lg:shadow-none lg:border-b">
            <div class="flex items-center h-16 bg-white">

                <div class="border-r w-16 h-full lg:hidden">
                    <button onclick="toggleMenu()" class="rounded-md p-2 h-full w-full">
                        <x-icon-menu-outline class="h-auto w-full" />
                    </button>
                </div>

                <div class="px-4 flex items-center justify-between w-full">

                    <h1 class="text-3xl font-bold font-whujo text-whujo lg:w-36 xl:w-48">
                        whujo
                    </h1>

                    <div class="lg:flex flex-grow">
                        <div class="flex h-full items-center w-full justify-between space-x-8 md:px-8">

                            <ul class="hidden lg:flex h-full items-center space-x-8">
                                <li
                                    class="flex items-center hover:bg-gray-200 hover:bg-opacity-75 border-b-4 border-transparent hover:border-whujo transition-300 h-16">
                                    <a href="" class="h-full w-28 flex items-center text-center">
                                        <span class="w-full">Share a coffe</span>
                                    </a>
                                </li>
                                <li
                                    class="flex items-center hover:bg-gray-200 hover:bg-opacity-75 border-b-4 border-transparent hover:border-whujo transition-300 h-16">
                                    <a href="" class="h-full w-28 flex items-center text-center">
                                        <span class="w-full">Experiencias</span>
                                    </a>
                                </li>
                                <li
                                    class="flex items-center hover:bg-gray-200 hover:bg-opacity-75 border-b-4 border-transparent hover:border-whujo transition-300 h-16">
                                    <a href="" class="h-full w-28 flex items-center text-center">
                                        <span class="w-full">Servicios</span>
                                    </a>
                                </li>
                            </ul>

                            <div class="flex h-full items-center justify-end w-full space-x-4 ml-auto">

                                <a href="#" class="h-10 w-10 rounded-full bg-black ring ring-gray-300 ml-auto"></a>

                                <a href="" class="hidden lg:flex items-center justify-between rounded-full text-primary
                                           text-base font-light border border-primary p-2 h-10 space-x-1 border-opacity-75
                                           hover:bg-primary hover:text-white transition-300">
                                    <span>Crear anuncio</span>
                                    <x-icon-add-circle-outline class="h-6 w-6" />
                                </a>

                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>

        {{-- sideMenu --}}
        <div id="sideMenu"
            class="fixed inset-y-0 left-0 lg:transform-none lg:pt-20 bg-white h-screen overflow-y-auto w-full max-w-xs lg:w-1/6
                    shadow-xl lg:shadow-none border-r transform -translate-x-full transition-transform duration-500 ease-in-out z-20 lg:z-10">

            <div class="w-full text-right px-4 py-1 lg:hidden">
                <button onclick="toggleMenu()" class="ml-auto">
                    <x-icon-close-outline class="h-8 w-8 text-gray-400" />
                </button>
            </div>

            <ul class="lg:text-sm space-y-2">
                <li class="text-gray-600 font-bold opacity-75 p-3 "> Main </li>

                <li class="border-l-4 border-whujo border-opacity-75 hover:bg-gray-200 transition-500">
                    <a href="" class="inline-flex  items-center py-2 px-6 space-x-2 w-full ">
                        <x-icon-bar-chart-outline class="h-5" />
                        <span> Dashboard</span>
                        <span class=" ml-12 h-2 w-2 rounded-full bg-primary"></span>
                    </a>
                </li>

                <li class="border-l-4 border-transparent  hover:border-whujo hover:bg-gray-200 transition-500">
                    <a href="" class="inline-flex items-center py-2 px-6 space-x-2">
                        <x-icon-notifications-outline class="h-5" />
                        <span> Notificaciones</span>
                    </a>
                </li>

                <li class="border-l-4 border-transparent  hover:border-whujo hover:bg-gray-200 transition-500">
                    <a href="" class="inline-flex items-center py-2 px-6 space-x-2">
                        <span class="h-5">
                            <x-icon-wallet-outline class="h-full" /></span>
                        <span> Reservaciones</span>
                    </a>
                </li>

                <li class="border-l-4 border-transparent  hover:border-whujo hover:bg-gray-200 transition-500">
                    <a href="" class="inline-flex items-center py-2 px-6 space-x-2">
                        <span class="h-5">
                            <x-icon-book-outline class="h-full" /></span>
                        <span> Cartera</span>
                    </a>
                </li>

                <li class="border-l-4 border-transparent  hover:border-whujo hover:bg-gray-200 transition-500">
                    <a href="" class="inline-flex items-center py-2 px-6 space-x-2">
                        <span class="h-5">
                            <x-icon-star-outline class="h-full" /></span>
                        <span> Reseñas</span>
                    </a>
                </li>

            </ul>

            <ul class="lg:text-sm space-y-2 lg:hidden">
                <li class="text-gray-600 font-bold opacity-75 p-3 "> Account</li>

                <li class="border-l-4 border-transparent  hover:border-whujo hover:bg-gray-200 transition-500">
                    <a href="" class="inline-flex items-center py-2 px-6 space-x-2">
                        <span class="h-5">
                            <x-icon-share-social-outline class="h-full" /></span>
                        <span> Share a...</span>
                    </a>
                </li>

                <li class="border-l-4 border-transparent  hover:border-whujo hover:bg-gray-200 transition-500">
                    <a href="" class="inline-flex items-center py-2 px-6 space-x-2">
                        <span class="h-5">
                            <x-icon-construct-outline class="h-full" /></span>
                        <span> Servicios</span>
                    </a>
                </li>

                <li class="border-l-4 border-transparent  hover:border-whujo hover:bg-gray-200 transition-500">
                    <a href="" class="inline-flex items-center py-2 px-6 space-x-2">
                        <span class="h-5">
                            <x-icon-expand-outline class="h-full" /></span>
                        <span> Experiencias</span>
                    </a>
                </li>

            </ul>

            <ul class="lg:text-sm space-y-2">
                <li class="text-gray-600 font-bold opacity-75 p-3 "> Account</li>

                <li class="border-l-4 border-transparent  hover:border-whujo hover:bg-gray-200 transition-500">
                    <a href="" class="inline-flex items-center py-2 px-6 space-x-2">
                        <span class="h-5">
                            <x-icon-settings-outline class="h-full" /></span>
                        <span> Configuracion</span>
                    </a>
                </li>

                <li class="border-l-4 border-transparent  hover:border-whujo hover:bg-gray-200 transition-500">
                    <a href="" class="inline-flex items-center py-2 px-6 space-x-2">
                        <span class="h-5">
                            <x-icon-shield-outline class="h-full" /></span>
                        <span> Seguridad</span>
                    </a>
                </li>

                <li class="border-l-4 border-transparent  hover:border-whujo hover:bg-gray-200 transition-500">
                    <a href="" class="inline-flex items-center py-2 px-6 space-x-2">
                        <span class="h-5">
                            <x-icon-power-outline class="h-full" /></span>
                        <span> Cerrar Sesión</span>
                    </a>
                </li>

            </ul>

        </div>

        {{-- content --}}
        <div id="content" class="h-screen w-full  lg:w-5/6 lg:ml-auto lg:pr-4">
            {{ $slot }}
        </div>

        {{-- btnNew --}}
        <div class="lg:hidden fixed bottom-4 inset-x-0">
            <div class="pb-8 space-y-8">
                <div
                    class="btn-create-new transform translate-x-full transition-transform duration-500 ease-out delay-75">
                    <button class="mx-auto bg-amazon text-white p-6 rounded-xl flex space-x-2 items-center">
                        <span>Share a ...</span>
                        <span>
                            <x-icon-add-circle-outline class="h-6 w-auto text-white" />
                        </span>
                    </button>
                </div>
                <div class="btn-create-new transform translate-x-full transition-transform duration-500 ease-in-out">
                    <button class="mx-auto bg-telegram text-white p-6 rounded-xl flex space-x-2 items-center">
                        <span>Experiencias</span>
                        <span>
                            <x-icon-add-circle-outline class="h-6 w-auto text-white" />
                        </span>
                    </button>
                </div>
                <div class="btn-create-new transform translate-x-full transition-transform duration-500 ease-out">
                    <button class="mx-auto bg-duolingo text-white p-6 rounded-xl flex space-x-2 items-center">
                        <span>Servicios</span>
                        <span>
                            <x-icon-add-circle-outline class="h-6 w-auto text-white" />
                        </span>
                    </button>
                </div>

            </div>

            <button onclick="toggleBtnNew()"
                class="mx-auto bg-whujo text-white py-3 px-4 rounded-full flex space-x-2 items-center">
                <span>Nuevo</span>
                <span>
                    <x-icon-add-circle-outline class="btn-new-icon h-6 w-auto text-white" />
                    <x-icon-close-circle-outline class="btn-new-icon h-6 w-auto text-white hidden" />
                </span>
            </button>

        </div>

    </div>
    {{--  <div class="relative w-screen h-auto flex bg-gray-200">

        <div class="fixed top-0 inset-x-0 z-10 bg-white">
            <div class="w-full h-16 flex">

                <div class="w-64 flex items-center px-4">
                    <h1 class="text-3xl font-bold font-whujo text-whujo">
                        whujo
                    </h1>
                </div>

                <div class="flex-grow shadow-sm bg-gray-100">
                    <div class="flex h-full items-center space-x-8 px-8">

                        <a href=""
                            class="h-full w-28 flex items-center hover:bg-white hover:bg-opacity-75 text-center transition-300">
                            <span class="w-full">Share a coffe</span>
                        </a>

                        <a href=""
                            class="h-full w-28 flex items-center hover:bg-white hover:bg-opacity-75 text-center transition-300">
                            <span class="w-full">Experiencias</span>
                        </a>

                        <a href=""
                            class="h-full w-28 flex items-center hover:bg-white hover:bg-opacity-75 text-center transition-300">
                            <span class="w-full">Servicios</span>
                        </a>

                        <div class="flex-grow"></div>

                        <a href="#" class="bg-gray-400 h-10 w-10 rounded-full border-2 border-gray-100"></a>

                        <a href="" class="flex items-center justify-between rounded-full
                                                text-primary text-base font-light border
                                                border-primary p-2 h-10 space-x-2
                                                hover:b10-primary hover:bg-opacity-5 transition-l06">
                            <span class="5-4">Crear anuncio</span>
                            <span class="h-6 w-6 rounded-full border border-primary">
                                <x-icon-add-outline class="w-auto h-full" />
                            </span>
                        </a>

                    </div>
                </div>

            </div>
        </div>

        <div class="fixed left-0 inset-y-0 w-64 h-screen bg-white shadow ">

            <div class="pt-20 text-sm z-10 bg-black">







            </div>
        </div>

        <div class="relative pl-72 pt-24 px-8">


            <br>
            <br>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        </div>

    </div> --}}
    @push('script')
    <script>
        let toggleMenu = ()=>{
                const sideMenu= document.getElementById('sideMenu');
                sideMenu.classList.toggle('-translate-x-full')
            }

        let toggleBtnNew = ()=>{
            const btns  = document.querySelectorAll('.btn-create-new');
            const icons = document.querySelectorAll('.btn-new-icon');

            btns.forEach((btn)=>{
                btn.classList.toggle('translate-x-full')
            })

            icons.forEach((icon)=>{
                icon.classList.toggle('translate-x-full')
            })
        }
    </script>

    @endpush
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
