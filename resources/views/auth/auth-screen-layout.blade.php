<x-main-layout>
    <div class="relative flex w-screen h-screen overflow-hidden bg-gray-100">
        {{-- Logo y Boton --}}
        <div class="absolute inset-x-0 top-0 z-10 h-20">
            <div class="flex flex-row items-center justify-between w-full p-4 space-y-2">
                <div>
                    <a href="{{ route('home') }}">
                        <x-logo-brand class="text-4xl text-primary" />
                    </a>
                </div>
                <div class="flex flex-col items-center pr-4 space-x-2 space-y-2 text-xs md:flex-row">

                    @yield('call-to-action')

                </div>
            </div>
        </div>
        {{-- Logo y Boton --}}

        {{-- Panel Izquierdo --}}
        <div class="relative hidden w-1/3 h-full overflow-hidden bg-gray-500 lg:block">
            <img src="@yield('background-image')"
                 alt="login" class="absolute inset-0 object-cover w-full h-full">

            <div class="absolute inset-0 w-full h-full bg-gradient-to-t from-primary to-secondary opacity-80"></div>
        </div>
        {{-- Panel Izquierdo --}}

        {{-- Panel derecho --}}
        <div class="w-full h-full overflow-y-auto lg:w-2/3">
            <div class="max-w-sm p-4 mx-auto mt-40 lg:max-w-xl">

                @yield('form')

            </div>
        </div>
        {{-- Panel Izquierdo --}}




        {{-- Barra Inferior --}}
        <div class="absolute inset-x-0 bottom-0 h-10 px-8 text-sm ">
            <div class="py-2 text-center text-gray-500 md:text-left lg:text-gray-100">
                <span class="font-wujo">whujo&reg;</span>
                <span> - </span>
                <span>Todos los derechos reservados&copy;</span>
            </div>
        </div>
        {{-- Barra Inferior --}}

    </div>

</x-main-layout>
