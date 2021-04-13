<div x-data="{ open: false }" id="navbar" class="fixed z-20 w-full navbar-transparent transition-500 ">
    <div class="flex flex-wrap w-full h-full lg:flex-nowrap">

        {{-- Logo --}}
        <div class="z-20 flex items-center justify-between w-full h-full p-4 border-b shadow-xl lg:w-auto lg:border-b-0 lg:shadow-none lg:flex-shrink">

            <a href="{{ route('home') }}" aria-label="whujo" title="whujo">
                <span class="text-4xl font-bold tracking-wide font-whujo text-primary">whujo</span>
            </a>

            <button @click="open = ! open"
                class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out border rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 lg:hidden">
                <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        {{-- Dropdown-Menu --}}
        <div id="dropdown-menu"  :class="{'h-auto': open, 'h-0': ! open}"
             class="flex flex-col w-full h-0 overflow-hidden transition-all duration-500 ease-out bg-white lg:flex-row lg:justify-between lg:bg-transparent lg:h-full">

            {{-- Links --}}
            <ul class="flex flex-col pt-1 space-y-2 lg:flex-row lg:justify-center lg:flex-grow lg:space-y-0">
                <li class="flex flex-col justify-center p-4">
                    <a href="/" aria-label="Landing Pages 1" title="landing 1" class="font-medium tracking-wide transition-colors duration-200 hover:text-secondary">
                        Share a coffe
                    </a>

                </li>
                <li class="p-4">
                    <a href="/" aria-label="Landing Pages 2" title="Landing 2" class="font-medium tracking-wide transition-colors duration-200 hover:text-secondary">
                        Servicios
                    </a>
                </li>
                <li class="p-4">
                    <a href="/" aria-label="Landing Pages 3" title="Landing 3" class="font-medium tracking-wide transition-colors duration-200 hover:text-secondary">
                        Experiencias
                    </a>
                </li>
            </ul>

            {{-- Botons Auth --}}
            <ul class="flex items-center w-full pt-1 pr-4 space-x-4 bg-white lg:bg-transparent lg:w-auto lg:flex-shrink ">
                <li>
                    <a class="flex items-center px-4 py-2 space-x-2 tracking-wide border border-gray-900 rounded-md outline-none btn-login lg:border-none lg:text-white hover:text-gray-600 " href="{{ route('login') }}">
                        <span>{{ __('Login') }}</span>
                        {{-- <x-icon-enter-outlineclass="w-4h-4"/> --}}
                    </a>
                </li>
                <li>
                    <a href="{{ route('register') }}" aria-label="Sign up" title="Sign up"
                        class="px-4 py-3 tracking-wide text-white rounded bg-primary hover:bg-primary-light">
                        {{ __('Join us') }}
                    </a>
                </li>
            </ul>

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
