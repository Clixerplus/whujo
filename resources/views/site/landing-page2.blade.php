<x-guest-layout>
    <header>
        <div class="relative flex w-screen h-[550px]">
            {{-- background image --}}
            <img src="{{ asset('images/landing01/hero-banner.jpg') }}" alt="multi-experiences collage"
                class="absolute inset-0 object-cover object-top w-full h-full" />

            <div class="absolute inset-0 bg-opacity-75 bg-secondary"></div>

            <div class="relative w-full px-4 pb-8 m-auto pt-28 max-w-screen md:max-w-xl lg:max-w-3xl xl:max-w-5xl">
                <h2 class="text-2xl font-bold leading-tight text-center text-white md:text-4xl lg:text-5xl"
                    style="text-shadow: rgba(255,255,255,.5) 0 0 2px">
                    Devolviéndole la importancia a la presencialidad
                </h2>


                <div class="mt-8">
                    <x-ui.link-button href="{{-- /* TODO: Crear link directo hacia el creador de productos --}}"
                        class="mx-auto text-white w-44 bg-primary-dark hover:ring hover:ring-primary hover:ring-opacity-50">
                        Comencemos
                    </x-ui.link-button>
                </div>

            </div>
        </div>
    </header>

    <div class="bg-gray-100 ">
        <x-section-container class="py-16" title="Servicios whujo">
            <div class="items-center md:flex md:space-x-6">

                <x-section-title class="z-10 w-full md:w-1/2">
                    <span class="text-5xl font-extrabold text-secondary">
                        Servicios
                    </span>
                    <x-slot name="subtitle">
                        <span class="md:block md:max-w-md">
                            Desde lo más simple a hasta lo más complejo. Nos adaptamos a la realidad virtual sin
                            olvidar la importancia del contacto humano.
                        </span>
                    </x-slot>
                </x-section-title>


                <div class="mt-8 md:mt-0 md:w-1/2">
                    <div class="grid w-full grid-cols-3 grid-rows-2 gap-4 ">
                        <div class="col-span-1 col-start-1 row-span-1 row-start-1 ">
                            <img class="object-cover h-full rounded-lg shadow-lg"
                                src="https://images.pexels.com/photos/973403/pexels-photo-973403.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260"
                                alt="1" />
                        </div>
                        <div class="col-span-2 col-start-2 row-span-1 row-start-1">
                            <img class="object-cover w-full rounded-lg shadow-lg"
                                src="https://images.pexels.com/photos/1569076/pexels-photo-1569076.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260"
                                alt="2" />
                        </div>
                        <div class="col-span-2 col-start-1 row-span-1 row-start-2">
                            <img class="object-cover w-full rounded-lg shadow-lg"
                                src="https://images.pexels.com/photos/4491461/pexels-photo-4491461.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260"
                                alt="3" />
                        </div>
                        <div class="col-span-1 col-start-3 row-span-1 row-start-2">
                            <img class="object-cover h-full rounded-lg shadow-lg"
                                src="https://images.pexels.com/photos/5089178/pexels-photo-5089178.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260"
                                alt="4" />
                        </div>
                    </div>
                    {{-- <div class="relative space-y-4">
                            <div class="flex items-end justify-center space-x-4 lg:justify-start">
                                <img class="w-32 rounded-lg shadow-lg md:w-56" width="200"
                                    src="https://images.pexels.com/photos/973403/pexels-photo-973403.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260"
                                    alt="1" />
                                <img class="w-40 rounded-lg shadow-lg md:w-64" width="260"
                                    src="https://images.pexels.com/photos/1569076/pexels-photo-1569076.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260"
                                    alt="2" />
                            </div>
                            <div class="flex items-start justify-center ml-12 space-x-4 lg:justify-start">
                                <img class="z-10 w-24 rounded-lg shadow-lg md:w-40" width="170"
                                    src="https://images.pexels.com/photos/4491461/pexels-photo-4491461.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260"
                                    alt="3" />
                                <img class="z-10 w-32 rounded-lg shadow-lg md:w-56" width="200"
                                    src="https://images.pexels.com/photos/5089178/pexels-photo-5089178.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260"
                                    alt="4" />
                            </div>
                        </div> --}}
                </div>
            </div>
        </x-section-container>
    </div>

    <x-section-container class="py-16" title="Experiencias whujo">
        <div class="flex flex-wrap items-center space-y-8 md:space-y-0">

            <div class="w-full md:w-1/2 md:order-2 md:pl-6">
                <x-section-title>
                    <span class="font-extrabold text-5 xl text-secondary">
                        Experiencias
                    </span>
                    <x-slot name="subtitle">
                        <span>
                            Conoce una nueva cultura, aprende algo nuevo, experimenta la vida desde otros ojos,
                            ven y conoce la experiencia whujo.
                        </span>
                    </x-slot>
                </x-section-title>
            </div>

            <div class="w-full md:w-1/2 md:order-1 ">
                <div class="flex items-center justify-center">
                    <div class="max-w-md">
                        <img class="object-cover object-center w-full rounded-md shadow" style="height: 500px;"
                            src="{{ asset('images/landing01/experiences-01.jpg') }}">
                    </div>
                </div>
            </div>

        </div>
    </x-section-container>

    <x-section-container class="py-16">
        <div class="px-8 py-12 rounded-md bg-secondary md:px-20 md:flex md:items-center md:justify-between">
            <div>
                <h3 class="text-3xl font-semibold text-white uppercase">Es sencillo!</h3>
                <p class="max-w-md mt-4 text-2xl text-gray-300">
                    Ven y ofrece tu servicio, tu experiencia o solo un momento de tu tiempo
                </p>
            </div>

            <a class="block px-8 py-2 mt-6 text-lg font-medium text-center text-white transition-colors duration-300 transform rounded bg-primary md:mt-0 hover:bg-primary-light"
                href="#">Vamos!</a>
        </div>
    </x-section-container>

    <div class="py-12 bg-gray-100">
        <x-section-container class="relative max-w-5xl px-6 py-4 mx-auto text-center" title="Comparte momentos whujo">
            <x-section-title>
                <span class="text-5xl font-extrabold text-secondary">
                    Share A Coffee
                </span>
                <x-slot name="subtitle">
                    <span class="block max-w-2xl mx-auto">
                        Donde los pequeños momentos se hacen especiales, porque compartir algo simple puede ser tan
                        gratificante y lleno aprendizaje.
                    </span>
                </x-slot>
            </x-section-title>

            <div class="z-10">
                <img class="object-cover object-center w-full mt-16 rounded-md shadow h-96"
                    src="{{ asset('images/landing01/share-a-coffee-02.jpg') }}">
            </div>
        </x-section-container>

        <x-section-container class="grid h-auto grid-cols-3 grid-rows-3 gap-4 lg:h-screen">
            <div class="hidden col-span-1 row-span-1 lg:block">
                <img class="object-cover object-center w-full h-full rounded-md shadow"
                    src="{{ asset('images/bg/section-bg-share-a-coffe.jpeg') }}">
            </div>
            <div class="hidden col-span-1 row-span-2 lg:block">
                <img class="object-cover object-center h-full rounded-md shadow"
                    src="{{ asset('images/landing01/services-01.jpg') }}">
            </div>
            <div class="hidden col-span-1 row-span-3 lg:block">
                <img class="object-cover object-center w-full h-full rounded-md shadow"
                    src="{{ asset('images/landing01/experiences-03.jpg') }}">
            </div>
            <div class="col-span-3 row-span-3 py-8 lg:row-span-1 lg:col-span-2">
                <x-section-title>
                    <span class="text-4xl font-extrabold text-secondary">
                        Creando Momentos Whujo
                    </span>
                    <x-slot name="subtitle">
                        <p class="max-w-3xl mx-auto text-xl leading-relaxed">
                            Comparte un par de minutos para conversar un tema específico, debatir ideas,
                            aprender de nuevos temas o solo conversar mientras disfrutas de tu bebida favorita.
                        </p>
                    </x-slot>
                </x-section-title>
            </div>
        </x-section-container>
    </div>
    {{-- <div class="bg-gray-100">
            <div class="grid max-w-5xl grid-cols-3 grid-rows-2 px-6 mx-auto">

                <div class="hidden col-span-2 row-span-1 md:flex md:space-x-10">


                </div>

                <div class="col-span-1 row-span-2 ">

                </div>

                <div class="col-span-2 row-span-1 pt-16 md:pr-16">

                </div>

            </div>
        </div> --}}

    <x-section-container title="Todo en 3 simples pasos">
        <div class="max-w-5xl px-6 py-16 mx-auto space-y-8 md:flex md:items-center md:space-y-0">
            <div class="flex flex-wrap -mx-8">
                <div class="w-full px-8 lg:w-1/2">
                    <div class="pb-12 mb-12 border-b lg:mb-0 lg:pb-0 lg:border-b-0">
                        <x-section-title>
                            <span class="text-3xl font-extrabold text-secondary">
                                Todo en 3 simples pasos!
                            </span>

                            <x-slot name="description">
                                Explora entre los distintos tipos de servicios, tematicas, experiencias,
                                modalidades, filtros y ajusta tu busqueda a tus necesidades. Contrata o guarda en
                                favoritos!
                                No dejes que se te escape! Si quieres saber mas contactanos.
                            </x-slot>

                            <x-slot name="call_to_action">
                                <div class="flex items-center gap-4">
                                    <x-ui.link-button href="#"
                                        class="text-white bg-primary-dark hover:ring hover:ring-primary-dark hover:ring-opacity-50">
                                        Vamos
                                    </x-ui.link-button>

                                    <x-ui.link-button href="#"
                                        class="border border-secondary hover:ring hover:ring-secondary hover:ring-opacity-25 hover:bg-secondary hover:text-white">
                                        Contacto
                                    </x-ui.link-button>
                                </div>
                            </x-slot>

                        </x-section-title>
                    </div>
                </div>
                <div class="w-full px-8 lg:w-1/2">
                    <ul class="space-y-12">
                        <li class="flex -mx-4">
                            <div class="px-4">
                                <span class="flex items-center justify-center w-16 h-16 mx-auto text-secondary">
                                    <x-icon-search class="w-full h-full" />
                                </span>
                            </div>
                            <div class="px-4">
                                <h3 class="text-xl font-semibold ">
                                    Busca
                                </h3>
                                <p class="mt-2 font-light leading-relaxed">
                                    Empieza por explorar servicios, experiencias o comparte un momento.
                                </p>
                            </div>
                        </li>
                        <li class="flex -mx-4">
                            <div class="px-4">
                                <span class="flex items-center w-16 h-16 mx-auto text-secondary">
                                    <x-icon-calendar-outline class="w-full h-full" />
                                </span>
                            </div>
                            <div class="px-4">
                                <h3 class="text-xl font-semibold ">
                                    Agenda
                                </h3>
                                <p class="mt-2 font-light leading-relaxed">
                                    Conseguiste lo que necesitabas, lee sovre los mismos, busca reseñas, ve
                                    calendarios y agenda!
                                </p>
                            </div>
                        </li>
                        <li class="flex -mx-4">
                            <div class="px-4">
                                <span class="flex items-center w-16 h-16 mx-auto text-secondary">
                                    <x-icon-rocket class="w-full h-full" />
                                </span>
                            </div>
                            <div class="px-4">
                                <h3 class="text-xl font-semibold ">
                                    Vive la experiencia o el momento Whujo
                                </h3>
                                <p class="mt-2 font-light leading-relaxed">
                                    <strong>¡Ya está todo listo!</strong> Conéctate a través de la aplicación
                                    para
                                    recibir sugerencias, preguntas o consejos locales.
                                </p>
                                <p class="mt-8 text-xl font-semibold text-right text-secondary">Conéctate y
                                    recibe...!</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="flex justify-center w-full gap-8 mt-8 md:hidden">
                    <x-ui.link-button href="#"
                        class="text-white bg-primary-dark hover:ring hover:ring-primary-dark hover:ring-opacity-50">
                        Vamos
                    </x-ui.link-button>

                    <x-ui.link-button href="#"
                        class="border border-secondary hover:ring hover:ring-secondary hover:ring-opacity-25 hover:bg-secondary hover:text-white">
                        Contacto
                    </x-ui.link-button>
                </div>
            </div>
        </div>
    </x-section-container>
</x-guest-layout>
