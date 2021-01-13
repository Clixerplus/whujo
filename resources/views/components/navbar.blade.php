<div id="navbar" class="fixed w-full h-20 navbar-transparent transition-500 z-20">
    <div class="px-4 py-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
        <div class="relative flex items-center justify-between">

            <a href="/" aria-label="Whujo" title="Whujo" class="inline-flex items-center">
                <span class="ml-2 text-3xl font-whujo
                             font-bold tracking-wide text-gray-800 md:text-primary">whujo</span>
            </a>

            <ul class="items-center hidden space-x-8 lg:flex">
                <li>
                    <a href="/"
                       aria-label="Landing Pages 1"
                       title="Our product"
                       class="font-medium tracking-wide
                              transition-colors duration-200
                              hover:text-gray-700">

                        Landing Page 2
                    </a>
                </li>
                <li>
                    <a href="/"
                       aria-label="Landing Pages 2"
                       title="Product pricing"
                       class="font-medium tracking-wide
                              transition-colors duration-200
                              hover:text-gray-700">

                        Landing Page 3
                    </a>
                </li>
                <li>
                    <a href="/"
                       aria-label="Landing Pages 3"
                       title="Our product"
                       class="font-medium tracking-wide
                              transition-colors duration-200
                              hover:text-gray-700">

                        Landing Page 1
                    </a>
                </li>
            </ul>

            <ul class="items-center hidden space-x-8 lg:flex">
                <li>
                    <a class="flex items-center space-x-2
                            hover:text-gray-600 tracking-wide
                              outline-none"
                        href="{{ route('login') }}">
                        <span>Entrar</span>
                        <x-icon-enter-outline class="w-4 h-4" />
                    </a>
                </li>
                <li>
                    <a href="{{ route('register') }}"
                       aria-label="Sign up"
                       title="Sign up"
                       class="btn-sign-up">
                        Regístrate </a>
                </li>
            </ul>

            <!-- Mobile menu -->
            <div class="lg:hidden text-secondary">
                <button aria-label="Open Menu" title="Open Menu"
                    class="p-2 -mr-1 transition duration-200 rounded focus:outline-none focus:shadow-outline pt-4 border focus:bg-opacity-50">
                    <svg class="w-5" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M23,13H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,13,23,13z"></path>
                        <path fill="currentColor" d="M23,6H1C0.4,6,0,5.6,0,5s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,6,23,6z">
                        </path>
                        <path fill="currentColor"
                            d="M23,20H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,20,23,20z"></path>
                    </svg>
                </button>

                <!-- Mobile menu dropdown
                    <div class="absolute top-0 left-0 w-full">
                        <div class="p-5 bg-white border rounded shadow-sm">
                            <div class="flex items-center justify-between mb-4">
                                <div>
                                    <a href="/" aria-label="Whujo" title="Whujo" class="inline-flex items-center">
                                        <svg class="w-8 text-deep-purple-accent-400" viewBox="0 0 24 24" stroke-linejoin="round" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke="currentColor" fill="none">
                                            <rect x="3" y="1" width="7" height="12"></rect>
                                            <rect x="3" y="17" width="7" height="6"></rect>
                                            <rect x="14" y="1" width="7" height="6"></rect>
                                            <rect x="14" y="11" width="7" height="12"></rect>
                                        </svg>
                                        <span class="ml-2 text-xl font-bold tracking-wide text-gray-800 uppercase">Whujo</span>
                                    </a>
                                </div>
                                <div>
                                    <button aria-label="Close Menu" title="Close Menu" class="p-2 -mt-2 -mr-2 transition duration-200 rounded hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                        <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M19.7,4.3c-0.4-0.4-1-0.4-1.4,0L12,10.6L5.7,4.3c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4l6.3,6.3l-6.3,6.3 c-0.4,0.4-0.4,1,0,1.4C4.5,19.9,4.7,20,5,20s0.5-0.1,0.7-0.3l6.3-6.3l6.3,6.3c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3 c0.4-0.4,0.4-1,0-1.4L13.4,12l6.3-6.3C20.1,5.3,20.1,4.7,19.7,4.3z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <nav>
                                <ul class="space-y-4">
                                    <li><a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide  transition-colors duration-200 hover:text-deep-purple-accent-400">Product</a></li>
                                    <li><a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide  transition-colors duration-200 hover:text-deep-purple-accent-400">Features</a></li>
                                    <li><a href="/" aria-label="Product pricing" title="Product pricing" class="font-medium tracking-wide  transition-colors duration-200 hover:text-deep-purple-accent-400">Pricing</a></li>
                                    <li><a href="/" aria-label="About us" title="About us" class="font-medium tracking-wide  transition-colors duration-200 hover:text-deep-purple-accent-400">About us</a></li>
                                    <li>
                                        <a
                                            href="/"
                                            class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
                                            aria-label="Sign up"
                                            title="Sign up"
                                        > Sign up </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                -->
            </div>

        </div>
    </div>
</div>

@push('scripts')
<script>
    const navbar = document.getElementById('navbar')
    window.onscroll = function() {
        console.log("scroll " + window.scrollY)
        console.log("Outer" + outerWidth)
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
