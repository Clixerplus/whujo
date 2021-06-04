<div x-data="{open_side_menu:false, show_explore:false}" class="fixed z-40 h-20 ">
    <div class="relative">

        {{-- topbar --}}
        <div id="navbar" class="w-screen h-20 px-8 navbar navbar-transparent bg-opacity-80">

            {{-- logo brand --}}
            <div class="flex items-center">
                <h1 class="">
                    <a href="{{ route('home') }}">
                        <span class="text-4xl font-bold text-primary font-whujo">
                            whujo
                        </span>
                    </a>
                </h1>
            </div>

            {{-- landing page links --}}
            <div class="mx-auto">
                <ul class="hidden space-x-8 lg:flex">
                    <li class=""><a href="#">Landing page 1</a></li>
                    <li class=""><a href="#">Landing page 2</a></li>
                    <li class=""><a href="#">Landing page 3</a></li>
                </ul>
            </div>

            {{-- auth section --}}
            <div class="items-center justify-center hidden w-auto h-20 lg:flex">
                @auth
                <x-dropdown-avatar />
                @else
                <ul class="flex items-center ml-auto space-x-4">
                    <li>
                        <a href="{{ route('login') }}" class="capitalize">
                            {{ __('login') }}
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('login') }}" class="px-4 py-2 font-semibold rounded btn-join">
                            {{ __('Join whujo') }}
                        </a>
                    </li>
                </ul>
                @endauth
            </div>

            {{-- button side menu --}}
            <button @click="open_side_menu = ! open_side_menu" class="text-secondary focus:outline-none lg:hidden">
                <svg class="w-8 h-8" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

        </div>

        {{-- side menu --}}
        <div class="absolute inset-0 z-50 w-screen h-screen overflow-hidden" x-cloak x-show="open_side_menu">
            <div class="relative h-full w-ful">

                {{-- dark mask --}}
                <div class="absolute inset-0 h-full bg-black bg-opacity-75"
                x-show="open_side_menu"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-90"
                x-transition:leave="ease-in duration-300"
                x-transition:leave-start=" opacity-90"x-transition:leave-end=" opacity-0"></div>

                {{-- menu wrapper --}}
                <div class="absolute top-0 left-0 w-4/5 h-full max-w-xs p-6 bg-white"
                    @click.away="open_side_menu = false"
                    x-show="open_side_menu"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="transform -translate-x-full" x-transition:enter-end="transform translate-x-0"
                    x-transition:leave="ease-in duration-300"
                    x-transition:leave-start=" transform translate-x-0"x-transition:leave-end=" transform -translate-x-full">

                    {{-- TODO: Cambiar maquetacion por el componente sidebar de https://merakiui.com/  --}}
                    {{-- register side menu --}}
                    <div class="flex justify-between">
                        <a href="{{ route('login') }}" class="px-4 py-2 font-semibold text-white rounded-md bg-primary">
                            {{ __('Join whujo') }}
                        </a>
                        <button @click="open_side_menu = false" class="text-secondary focus:outline-none">
                            <svg class="w-8 h-8" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path class="text-gray-600" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>


                    {{-- options link side menu --}}
                    <ul class="py-3 mt-3 space-y-3 text-gray-600">
                        <li>
                            <a href="{{ route('login') }}" class="capitalize">{{ __('login') }}</a>
                        </li>
                        <li>
                            <button @click="show_explore = !show_explore"
                                class="flex items-baseline justify-between w-full capitalize focus:outline-none">
                                <span>{{ __('explore') }}</span>
                                <x-icon-angle-down class="w-3 h-3 transform rotate-90" />
                            </button>

                            <ul class="w-full p-3 space-y-3 text-gray-500" x-show="show_explore">
                                <li>
                                    <a href="#" class="capitalize">{{ __('services') }}</a>
                                </li>
                                <li>
                                    <a href="#" class="capitalize">{{ __('experiences') }}</a>
                                </li>
                                <li>
                                    <a href="#" class="capitalize">{{ __('share a coffe') }}</a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <h3 class="py-2 mt-8 font-semibold border-b text-secondary">{{ __('General') }}</h3>
                    <ul class="py-3 space-y-3 text-gray-400">
                        <li>
                            <a href="/" class="capitalize">{{ __('home') }}</a>
                        </li>
                        <li>
                            <a href="#">Landing page 1</a>
                        </li>
                        <li>
                            <a href="#">Landing page 2</a>
                        </li>
                        <li>
                            <a href="#">Landing page 3</a>
                        </li>
                    </ul>

                </div>

            </div>
        </div>

    </div>
</div>

@push('scripts')
<script>
    const navbar = document.getElementById('navbar')
        window.onscroll = function() {
            if (window.outerWidth >= 1024){
                if (window.scrollY > 80 ){
                    navbar.classList.remove('navbar-transparent')
                    navbar.classList.add('navbar-dark')

                } else {
                    navbar.classList.remove('navbar-dark')
                    navbar.classList.add('navbar-transparent')
                }
            }
        };
</script>
@endpush