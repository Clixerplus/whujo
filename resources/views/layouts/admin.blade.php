<x-app-nonav-layout>


    <div class="relative bg-gray">

        {{-- navbar --}}
        <div class="fixed inset-x-0 top-0 z-10 w-full shadow lg:z-20 lg:shadow-none lg:border-b">
            <div class="flex items-center h-16 bg-white">

                <div class="w-16 h-full border-r lg:hidden">
                    <button onclick="toggleMenu()" class="w-full h-full p-2 rounded-md">
                        <x-icon-menu-outline class="w-full h-auto" />
                    </button>
                </div>

                <div class="flex items-center justify-between w-full px-4">

                    <h1 class="text-3xl font-bold font-whujo text-whujo lg:w-36 xl:w-48">
                        whujo
                    </h1>

                    <div class="flex-grow lg:flex">
                        <div class="flex items-center justify-between w-full h-full space-x-8 md:px-8">

                            <ul class="items-center hidden h-full space-x-8 lg:flex">
                                <li
                                    class="flex items-center h-16 border-b-4 border-transparent hover:bg-gray-200 hover:bg-opacity-75 hover:border-whujo transition-300">
                                    <a href="" class="flex items-center h-full text-center w-28">
                                        <span class="w-full">Share a coffe</span>
                                    </a>
                                </li>
                                <li
                                    class="flex items-center h-16 border-b-4 border-transparent hover:bg-gray-200 hover:bg-opacity-75 hover:border-whujo transition-300">
                                    <a href="" class="flex items-center h-full text-center w-28">
                                        <span class="w-full">Experiencias</span>
                                    </a>
                                </li>
                                <li
                                    class="flex items-center h-16 border-b-4 border-transparent hover:bg-gray-200 hover:bg-opacity-75 hover:border-whujo transition-300">
                                    <a href="{{ route('service.index') }}" class="flex items-center h-full text-center w-28">
                                        <span class="w-full">Servicios</span>
                                    </a>
                                </li>
                            </ul>

                            <div class="flex items-center justify-end w-full h-full ml-auto space-x-4">

                                <x-jet-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                        <button
                                            class="flex text-sm transition duration-150 ease-in-out border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300">
                                            <img class="object-cover w-8 h-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}"
                                                alt="{{ Auth::user()->name }}" />
                                        </button>
                                        @else
                                        <button
                                            class="flex items-center text-sm font-medium text-gray-500 transition duration-150 ease-in-out hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300">
                                            <div>{{ Auth::user()->name }}</div>

                                            <div class="ml-1">
                                                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        </button>
                                        @endif
                                    </x-slot>

                                    <x-slot name="content">
                                        <!-- Account Management -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Manage Account') }}
                                        </div>

                                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                            {{ __('Profile') }}
                                        </x-jet-dropdown-link>

                                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                        <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                            {{ __('API Tokens') }}
                                        </x-jet-dropdown-link>
                                        @endif

                                        <div class="border-t border-gray-100"></div>

                                        <!-- Team Management -->
                                        @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Manage Team') }}
                                        </div>

                                        <!-- Team Settings -->
                                        <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                            {{ __('Team Settings') }}
                                        </x-jet-dropdown-link>

                                        @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                            {{ __('Create New Team') }}
                                        </x-jet-dropdown-link>
                                        @endcan

                                        <div class="border-t border-gray-100"></div>

                                        <!-- Team Switcher -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Switch Teams') }}
                                        </div>

                                        @foreach (Auth::user()->allTeams() as $team)
                                        <x-jet-switchable-team :team="$team" />
                                        @endforeach

                                        <div class="border-t border-gray-100"></div>
                                        @endif

                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                            this.closest('form').submit();">
                                                {{ __('Logout') }}
                                            </x-jet-dropdown-link>
                                        </form>
                                    </x-slot>
                                </x-jet-dropdown>

                                <a href="{{ route('wizard.options') }}" class="items-center justify-between hidden h-10 px-2 py-1 space-x-1 text-sm font-light border border-opacity-75 lg:flex rounded-2xl text-primary border-primary hover:bg-primary hover:text-white transition-150">
                                    <span>Crear anuncio</span>
                                    <x-icon-add-circle-outline class="w-6 h-6" />
                                </a>

                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>

        {{-- sideMenu --}}
        <div id="sideMenu"
            class="fixed inset-y-0 left-0 z-20 w-full h-screen max-w-xs overflow-y-auto transition-transform duration-500 ease-in-out transform -translate-x-full bg-white border-r shadow-xl lg:transform-none lg:pt-20 lg:w-1/5 lg:shadow-none lg:z-10">

            <div class="w-full px-4 py-1 text-right lg:hidden">
                <button onclick="toggleMenu()" class="ml-auto">
                    <x-icon-close-outline class="w-8 h-8 text-gray-400" />
                </button>
            </div>

            <ul class="space-y-2 lg:text-sm">
                <li class="p-3 font-bold text-gray-600 opacity-75 "> Main </li>

                <li class="border-l-4 border-opacity-75 border-whujo hover:bg-gray-200 transition-500">
                    <a href="{{ route('account.dashboard') }}" class="inline-flex items-center w-full px-6 py-2 space-x-2 ">
                        <x-icon-bar-chart-outline class="h-5" />
                        <span> Dashboard</span>
                        <span class="w-2 h-2 ml-12 rounded-full bg-primary"></span>
                    </a>
                </li>

                <li class="border-l-4 border-transparent hover:border-whujo hover:bg-gray-200 transition-500">
                    <a href="{{ route('account.notifications') }}" class="inline-flex items-center px-6 py-2 space-x-2">
                        <x-icon-notifications-outline class="h-5" />
                        <span> Notificaciones</span>
                    </a>
                </li>

                <li class="border-l-4 border-transparent hover:border-whujo hover:bg-gray-200 transition-500">
                    <a href="" class="inline-flex items-center px-6 py-2 space-x-2">
                        <span class="h-5">
                            <x-icon-book-outline class="h-full" /></span>
                        <span> Reservaciones</span>
                    </a>
                </li>

                <li class="border-l-4 border-transparent hover:border-whujo hover:bg-gray-200 transition-500">
                    <a href="{{ route('account.wallet') }}" class="inline-flex items-center px-6 py-2 space-x-2">
                        <span class="h-5">
                            <x-icon-wallet-outline class="h-full" /></span>
                        <span> Cartera</span>
                    </a>
                </li>

                <li class="border-l-4 border-transparent hover:border-whujo hover:bg-gray-200 transition-500">
                    <a href="{{ route('account.reviews') }}" class="inline-flex items-center px-6 py-2 space-x-2">
                        <span class="h-5">
                            <x-icon-star-outline class="h-full" /></span>
                        <span> Reseñas</span>
                    </a>
                </li>

            </ul>

            <ul class="space-y-2 lg:text-sm lg:hidden">
                <li class="p-3 font-bold text-gray-600 opacity-75 "> Account</li>

                <li class="border-l-4 border-transparent hover:border-whujo hover:bg-gray-200 transition-500">
                    <a href="" class="inline-flex items-center px-6 py-2 space-x-2">
                        <span class="h-5">
                            <x-icon-share-social-outline class="h-full" /></span>
                        <span> Share a...</span>
                    </a>
                </li>

                <li class="border-l-4 border-transparent hover:border-whujo hover:bg-gray-200 transition-500">
                    <a href="{{ route('service.index') }} class="inline-flex items-center px-6 py-2 space-x-2">
                        <span class="h-5">
                            <x-icon-construct-outline class="h-full" /></span>
                        <span> Servicios</span>
                    </a>
                </li>

                <li class="border-l-4 border-transparent hover:border-whujo hover:bg-gray-200 transition-500">
                    <a href="" class="inline-flex items-center px-6 py-2 space-x-2">
                        <span class="h-5">
                            <x-icon-expand-outline class="h-full" /></span>
                        <span> Experiencias</span>
                    </a>
                </li>

            </ul>

            <ul class="space-y-2 lg:text-sm">
                <li class="p-3 font-bold text-gray-600 opacity-75 "> Account</li>

                <li class="border-l-4 border-transparent hover:border-whujo hover:bg-gray-200 transition-500">
                    <a href="{{ route('account.profile') }}" class="inline-flex items-center px-6 py-2 space-x-2">
                        <span class="h-5">
                            <x-icon-person-add-outline class="h-full" /></span>
                        <span> Profile</span>
                    </a>
                </li>

                <li class="border-l-4 border-transparent hover:border-whujo hover:bg-gray-200 transition-500">
                    <a href="{{ route('account.setup') }}" class="inline-flex items-center px-6 py-2 space-x-2">
                        <span class="h-5">
                            <x-icon-settings-outline class="h-full" /></span>
                        <span> Configuracion</span>
                    </a>
                </li>

                <li class="border-l-4 border-transparent hover:border-whujo hover:bg-gray-200 transition-500">
                    <a href="{{ route('account.security') }}" class="inline-flex items-center px-6 py-2 space-x-2">
                        <span class="h-5">
                            <x-icon-shield-outline class="h-full" /></span>
                        <span> Seguridad</span>
                    </a>
                </li>

                <li class="border-l-4 border-transparent hover:border-whujo hover:bg-gray-200 transition-500">
                    <a href="" class="inline-flex items-center px-6 py-2 space-x-2">
                        <span class="h-5">
                            <x-icon-power-outline class="h-full" /></span>
                        <span> Cerrar Sesión</span>
                    </a>
                </li>

            </ul>

        </div>

        {{-- content --}}
        <div id="content" class="w-full lg:w-4/5 lg:ml-auto lg:pr-4">
            {{ $slot }}
        </div>

        {{-- btnNew --}}
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

        </div>

    </div>

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
</x-app-nonav-layout>
