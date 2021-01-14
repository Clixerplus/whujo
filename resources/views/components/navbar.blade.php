
<div id="navbar" class="fixed w-full navbar-transparent transition-500 z-20">
    <div class="flex flex-wrap lg:flex-nowrap h-full w-full ">
        {{-- Logo --}}
        <div class="flex items-center justify-between h-full w-full lg:w-auto p-4 shadow-w1 border-b lg:border-b-0 lg:shadow-none lg:flex-shrink z-20">
            <a href="{{ route('index') }}" aria-label="Whujo" title="Whujo" class="flex items-center">
                <span class="ml-2 text-4xl font-whujo
                             font-bold tracking-wide text-primary">whujo</span>
            </a>

            <x-button onclick="document.getElementById('dropdown-menu').classList.toggle('h-0')"
                class="h-12 w-12 border boder-secondar-light rounded-md text-secondary lg:hidden">
                <x-icon-menu-outline class="w-full h-full p-0.5" />
            </x-button>
        </div>

        <div id="dropdown-menu"
             class="flex flex-col lg:flex-row lg:justify-between bg-white lg:bg-transparent w-full text-secondary h-0 lg:h-full overflow-hidden transition-all ease-out duration-500">

            {{-- Links --}}
            <ul class="flex flex-col lg:flex-row lg:justify-center lg:flex-grow space-y-2 lg:space-y-0 p-4">
                <li class="p-4">
                    <a href="/"
                       aria-label="Landing Pages 1"
                       title="landing 1"
                       class="font-medium tracking-wide
                              transition-colors duration-200
                             hover:text-gray-700">

                        Landing Page 2
                    </a>
                </li>
                <li class="p-4">
                    <a href="/" aria-label="Landing Pages 2" title="Landing 2" class="font-medium tracking-wide
                              transition-colors duration-200
                            hover:text-gray-700">

                        Landing Page 3
                    </a>
                </li>
                <li class="p-4">
                    <a href="/" aria-label="Landing Pages 3" title="Landing 3" class="font-medium tracking-wide
                              transition-colors duration-200
                            hover:text-gray-700">

                        Landing Page 1
                    </a>
                </li>
            </ul>

            {{-- Botons Auth --}}
            <ul class="bg-white lg:bg-transparent w-full lg:w-auto lg:flex-shrink p-4 flex items-center  space-x-8 ">
                <li>
                    <a class="btn-login flex border border-secondary lg:border-white
                            lg:text-white rounded-md items-center space-x-2
                            hover:text-gray-600 tracking-wide
                              outline-none px-4 py-2" href="{{ route('login') }}">
                        <span>Entrar</span>
                        <x-icon-enter-outline class="w-4 h-4" />
                    </a>
                </li>
                <li>
                    <a href="{{ route('register') }}" aria-label="Sign up" title="Sign up"
                        class="bg-primary text-white rounded-md px-4 py-3 tracking-wide hover:bg-primary-light ring ring-red-400">
                        Regístrate </a>
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
