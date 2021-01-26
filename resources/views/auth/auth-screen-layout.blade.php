<x-main-layout>
    <div class="relative flex w-screen h-screen overflow-hidden bg-gray-100">
        {{-- Logo y Boton --}}
        <div class="absolute top-0 inset-x-0 h-20 z-10">
            <div class="w-full flex flex-row space-y-2 items-center justify-between p-4">
                <div>
                    <a href="{{ route('home') }}"><x-logo-brand class="text-primary text-4xl" /></a>
                </div>
                <div class="flex flex-row space-x-2 items-center text-xs ">

                    @yield('call-to-action')

                </div>
            </div>
        </div>
        {{-- Logo y Boton --}}

        {{-- Panel Izquierdo --}}
        <div class="hidden lg:block relative w-1/3 h-full overflow-hidden bg-gray-500">
            <img src="@yield('background-image')"
                 alt="login" class="absolute inset-0
                      object-cover w-full h-full">

            <div class="absolute inset-0 bg-gradient-to-t from-primary to-secondary opacity-80  w-full h-full"></div>
        </div>
        {{-- Panel Izquierdo --}}

        {{-- Panel derecho --}}
        <div class="w-full lg:w-2/3 h-full overflow-y-auto">
            <div class="mt-40 max-w-sm lg:max-w-xl mx-auto">

                @yield('form')

            </div>
        </div>
        {{-- Panel Izquierdo --}}




        {{-- Barra Inferior --}}
        <div class="absolute bottom-0 inset-x-0  h-10 px-8 text-sm ">
            <div class="text-center md:text-left py-2 text-gray-500 lg:text-gray-100">
                <span class="font-wujo">whujo&reg;</span>
                <span> - </span>
                <span>Todos los derechos reservados&copy;</span>
            </div>
        </div>
        {{-- Barra Inferior --}}

    </div>

</x-main-layout>
