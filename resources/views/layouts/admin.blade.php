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
                                    <a href="{{ route('service.index') }}" class="h-full w-28 flex items-center text-center">
                                        <span class="w-full">Servicios</span>
                                    </a>
                                </li>
                            </ul>

                            <div class="flex h-full items-center justify-end w-full space-x-4 ml-auto">

                                <x-jet-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                        <button
                                            class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                                                alt="{{ Auth::user()->name }}" />
                                        </button>
                                        @else
                                        <button
                                            class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                            <div>{{ Auth::user()->name }}</div>

                                            <div class="ml-1">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
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

                                <a href="{{ route('wizard.options') }}" class="hidden lg:flex items-center justify-between rounded-2xl text-primary
                                           text-sm font-light border border-primary py-1 px-2 h-10 space-x-1 border-opacity-75
                                           hover:bg-primary hover:text-white transition-150">
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
            class="fixed inset-y-0 left-0 lg:transform-none lg:pt-20 bg-white h-screen overflow-y-auto w-full max-w-xs lg:w-1/5
                    shadow-xl lg:shadow-none border-r transform -translate-x-full transition-transform duration-500 ease-in-out z-20 lg:z-10">

            <div class="w-full text-right px-4 py-1 lg:hidden">
                <button onclick="toggleMenu()" class="ml-auto">
                    <x-icon-close-outline class="h-8 w-8 text-gray-400" />
                </button>
            </div>

            <ul class="lg:text-sm space-y-2">
                <li class="text-gray-600 font-bold opacity-75 p-3 "> Main </li>

                <li class="border-l-4 border-whujo border-opacity-75 hover:bg-gray-200 transition-500">
                    <a href="{{ route('account.dashboard') }}" class="inline-flex  items-center py-2 px-6 space-x-2 w-full ">
                        <x-icon-bar-chart-outline class="h-5" />
                        <span> Dashboard</span>
                        <span class=" ml-12 h-2 w-2 rounded-full bg-primary"></span>
                    </a>
                </li>

                <li class="border-l-4 border-transparent  hover:border-whujo hover:bg-gray-200 transition-500">
                    <a href="{{ route('account.notifications') }}" class="inline-flex items-center py-2 px-6 space-x-2">
                        <x-icon-notifications-outline class="h-5" />
                        <span> Notificaciones</span>
                    </a>
                </li>

                <li class="border-l-4 border-transparent  hover:border-whujo hover:bg-gray-200 transition-500">
                    <a href="" class="inline-flex items-center py-2 px-6 space-x-2">
                        <span class="h-5">
                            <x-icon-book-outline class="h-full" /></span>
                        <span> Reservaciones</span>
                    </a>
                </li>

                <li class="border-l-4 border-transparent  hover:border-whujo hover:bg-gray-200 transition-500">
                    <a href="{{ route('account.wallet') }}" class="inline-flex items-center py-2 px-6 space-x-2">
                        <span class="h-5">
                            <x-icon-wallet-outline class="h-full" /></span>
                        <span> Cartera</span>
                    </a>
                </li>

                <li class="border-l-4 border-transparent  hover:border-whujo hover:bg-gray-200 transition-500">
                    <a href="{{ route('account.reviews') }}" class="inline-flex items-center py-2 px-6 space-x-2">
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
                    <a href="{{ route('service.index') }} class="inline-flex items-center py-2 px-6 space-x-2">
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
                    <a href="{{ route('account.setup') }}" class="inline-flex items-center py-2 px-6 space-x-2">
                        <span class="h-5">
                            <x-icon-settings-outline class="h-full" /></span>
                        <span> Configuracion</span>
                    </a>
                </li>

                <li class="border-l-4 border-transparent  hover:border-whujo hover:bg-gray-200 transition-500">
                    <a href="{{ route('account.security') }}" class="inline-flex items-center py-2 px-6 space-x-2">
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
        <div id="content" class=" w-full lg:w-4/5 lg:ml-auto lg:pr-4">
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
