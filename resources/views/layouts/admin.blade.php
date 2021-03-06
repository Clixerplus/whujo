<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="icon" href="/favicon.png" type="image/png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/apple-touch-icon-72x72-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/apple-touch-icon-114x114precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/apple-touch-icon-144x144-precomposed.png" />
        <meta name="msapplication-TileImage" content="/favicon.png" />
        <meta name="msapplication-TileColor" content="#E32a2e" />
        <link rel="fluid-icon" href="http://whujo.test/favicon.png" title="whujo" />

        <title>{{ config('app.name', 'whujo') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        @stack('styles')

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    </head>

    <body class="font-sans antialiased">
        <div class="flex w-screen h-screen overflow-hidden bg-white">


            <div class=" h-full border-r shadow-2xl rounded-xl"
                 x-data="{open:false}"
                 :class="{'w-2/12': open, 'w-16' : !open}">
                <x-side-menu></x-side-menu>
            </div>

            <div class="flex-1 h-full overflow-y-auto bg transition-all ease-in duration-300 max-w-6xl ml-auto">

                {{ $slot }}

            </div>

            <div class="w-3/12 h-full">
                <div class="p-8 px-12 space-y-4">

                    <div class="flex items-center pb-4 space-x-4">
                        <x-avatar-custom></x-avatar-custom>
                        <div>
                            <p class="font-light">{{ __('Welcome') }}!</p>
                            <h1 class="text-2xl font-bold text-secondary">{{ Auth::user()->name }}</h1>
                        </div>
                    </div>


                    <div class="w-full p-4 bg-green-100 rounded">
                        <span
                            class="inline-flex px-3 py-1 mb-4 text-xl font-bold bg-green-500 rounded text-green-50">ARS</span>
                        <p class="mb-4 text-3xl font-bold text-green-800"> 25.000,00</p>
                        <h2 class="font-light text-green-800 capitalize ">{{ __('total profit') }}</h2>
                    </div>

                    <div class="py-4 mt-2 border-b flex flex-col space-y-4">
                        <a href="{{ route('service.index') }}"
                            class="group p-2 text-center text-secondary bg-gray-50 rounded border w-full flex space-x-4 items-center
                                  hover:border-gray-200 hover:bg-gray-100 hover:shadow-xl
                                    transition-all ease-in duration-200">

                            <div class="w-16 h-16 flex-shrink-0 rounded shadow">
                                <img src="{{ asset('images/landing01/share-a-coffee-02.jpg') }}" alt=""
                                    class="object-cover w-full h-full rounded shadow">

                            </div>

                            <h2 class="text-xl text-secondary-light font-bold flex-shrink px-4
                                     group-hover:text-secondary gourp-hover:bg-gray-100
                                       transition-all duration-200 ease-in">
                                {{ __('Share A Coffee Managament') }}
                            </h2>
                        </a>
                        <a href=""
                            class="group p-2 text-center text-secondary bg-gray-50 rounded border w-full flex space-x-4 items-center
                                  hover:border-gray-200 hover:bg-gray-100 hover:shadow-xl
                                    transition-all ease-in duration-200">

                            <div class="w-16 h-16 flex-shrink-0 rounded shadow">
                                <img src="{{ asset('images/landing01/services-01.jpg') }}" alt=""
                                    class="object-cover w-full h-full rounded shadow">

                            </div>

                            <h2 class="text-xl text-secondary-light font-bold flex-shrink px-4
                                     group-hover:text-secondary gourp-hover:bg-gray-100
                                       transition-all duration-200 ease-in">
                                {{ __('Services Managament') }}
                            </h2>
                        </a>
                        <a href=""
                            class="group p-2 text-center text-secondary bg-gray-50 rounded border w-full flex space-x-4 items-center
                                  hover:border-gray-200 hover:bg-gray-100 hover:shadow-xl
                                    transition-all ease-in duration-200">

                            <div class="w-16 h-16 flex-shrink-0 rounded shadow">
                                <img src="{{ asset('images/landing01/experiences-01.jpg') }}" alt=""
                                    class="object-cover w-full h-full rounded shadow">

                            </div>

                            <h2 class="text-xl text-secondary-light font-bold flex-shrink px-4
                                     group-hover:text-secondary gourp-hover:bg-gray-100
                                       transition-all duration-200 ease-in">
                                {{ __('Experiences Managament') }}
                            </h2>
                        </a>

                    </div>

                </div>


            </div>

        </div>

        {{-- <div class=" bg-gray">

        <x-admin-navbar></x-admin-navbar>

        <x-side-menu></x-side-menu>


        <div id="content" class="pl-20 mx-auto max-w-7xl bg-gray-50">
            {{ $slot }}
        </div>

        <div class="fixed inset-x-0 lg:hidden bottom-4">
            <div class="pb-8 space-y-8">
                <div
                    class="transition-transform duration-500 ease-out delay-75 transform translate-x-full btn-create-new">
                    <button class="flex items-center p-6 mx-auto space-x-2 text-white bg-amazon rounded-xl">
                        <span>Share a ...</span>
                        <span>
                            <x-icon-add-circle-outline class="w-auto h-6 text-white" />
                        </span>
                    </button>
                </div>
                <div class="transition-transform duration-500 ease-in-out transform translate-x-full btn-create-new">
                    <button class="flex items-center p-6 mx-auto space-x-2 text-white bg-telegram rounded-xl">
                        <span>Experiencias</span>
                        <span>
                            <x-icon-add-circle-outline class="w-auto h-6 text-white" />
                        </span>
                    </button>
                </div>
                <div class="transition-transform duration-500 ease-out transform translate-x-full btn-create-new">
                    <button class="flex items-center p-6 mx-auto space-x-2 text-white bg-duolingo rounded-xl">
                        <span>Servicios</span>
                        <span>
                            <x-icon-add-circle-outline class="w-auto h-6 text-white" />
                        </span>
                    </button>
                </div>

            </div>

            <button onclick="toggleBtnNew()"
                class="flex items-center px-4 py-3 mx-auto space-x-2 text-white rounded-full bg-whujo">
                <span>Nuevo</span>
                <span>
                    <x-icon-add-circle-outline class="w-auto h-6 text-white btn-new-icon" />
                    <x-icon-close-circle-outline class="hidden w-auto h-6 text-white btn-new-icon" />
                </span>
            </button>

        </div> --}}
        </div>

        @push('script')
        <script>
            let toggleMenu = () => {
                const sideMenu = document.getElementById('sideMenu');
                sideMenu.classList.toggle('-translate-x-full')
            }

            let toggleBtnNew = () => {
                const btns = document.querySelectorAll('.btn-create-new');
                const icons = document.querySelectorAll('.btn-new-icon');

                btns.forEach((btn) => {
                    btn.classList.toggle('translate-x-full')
                })

                icons.forEach((icon) => {
                    icon.classList.toggle('translate-x-full')
                })
            }

        </script>

        @endpush

        @stack('modals')

        @stack('script')

        @livewireScripts
    </body>

</html>
