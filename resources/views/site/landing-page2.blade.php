<x-guest-layout>
    <div>
        <header class="relative overflow-hidden h-[550px]" x-data="{ isOpen: false }">
            <img src="{{ asset('images/landing01/hero-banner.jpg') }}" alt=""
                class="object-cover object-center w-full h-full md:h-auto md:w-auto">
            <section title="whujo - banner"
                class="absolute inset-0 flex items-center justify-center bg-opacity-50 bg-secondary">
                <div class="text-center">
                    <h2 class="max-w-2xl text-3xl font-bold leading-10 text-white md:text-5xl">
                        Devolviéndole la importancia a la presencialidad
                    </h2>

                    <div class="flex justify-center mt-8">
                        <x-ui.link-button href="{{-- /* TODO: Crear link directo hacia el creador de productos --}}"
                            class="text-white bg-primary-dark hover:ring hover:ring-primary hover:ring-opacity-50">
                            Comencemos
                        </x-ui.link-button>
                    </div>
                </div>
            </section>
        </header>

        <section title="Servicios whujo" class="relative bg-white">

            <div class="max-w-5xl px-6 py-16 mx-auto ">
                <div class="items-center md:flex md:space-x-6">

                    <div class="z-10 w-1/2">
                        <x-section-title>
                            <h3 class="mb-4 text-6xl font-extrabold text-secondary">
                                Servicios
                            </h3>
                            <x-slot name="subtitle">
                                <p>
                                    Desde lo más simple a hasta lo más complejo. Nos adaptamos a la realidad virtual sin
                                    olvidar la importancia del contacto humano.
                                </p>
                            </x-slot>
                        </x-section-title>
                    </div>

                    <div class="mt-8 md:mt-0 md:w-1/2">
                        <div class="relative space-y-4">
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
                                    src="https://images.pexels.com/photos/7012254/pexels-photo-7012254.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260"
                                    alt="3" />
                                <img class="z-10 w-32 rounded-lg shadow-lg md:w-56" width="200"
                                    src="https://images.pexels.com/photos/5089178/pexels-photo-5089178.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260"
                                    alt="4" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="absolute text-[24rem] text-gray-100 opacity-75" style="left:-70%; top:5%;">Servicios</h2>
        </section>

        <section title="Experiencias whujo" class="relative bg-gray-100">
            <div class="max-w-5xl px-6 py-16 mx-auto">
                <div class="items-center md:flex md:space-x-6">

                    <div class="order-2 md:w-1/2 md:order-1">
                        <div class="flex items-center justify-center">
                            <div class="max-w-md">
                                <img class="object-cover object-center w-full rounded-md shadow" style="height: 500px;"
                                    src="{{ asset('images/landing01/experiences-01.jpg') }}">
                            </div>
                        </div>
                    </div>

                    <div class="order-1 mt-8 md:mt-0 md:w-1/2 md:order-2">
                        <x-section-title>
                            <h3 class="mb-4 text-6xl font-extrabold text-secondary">
                                Experiencias
                            </h3>
                            <x-slot name="subtitle">
                                <p>
                                    Conoce una nueva cultura, aprende algo nuevo, experimenta la vida desde otros ojos,
                                    ven y conoce la experiencia whujo.
                                </p>
                            </x-slot>
                        </x-section-title>
                    </div>
                </div>
            </div>
            <h2 class="absolute text-[24rem] opacity-[2%]" style="left:48%; bottom:10%;">Experiencias</h2>
        </section>

        <section class="bg-gray-100">
            <div class="max-w-5xl px-6 py-16 mx-auto">
                <div class="px-8 py-12 rounded-md bg-secondary md:px-20 md:flex md:items-center md:justify-between">
                    <div>
                        <h3 class="text-2xl font-semibold text-white">Lorem ipsum dolor sit amet</h3>
                        <p class="max-w-md mt-4 text-gray-400">
                            Lorem ipsum dolor sit amet, consectetur adipiscing Acaliquam ac volutpat, viverra magna
                            risus aliquam massa.
                        </p>
                    </div>

                    <a class="block px-8 py-2 mt-6 text-lg font-medium text-center text-white transition-colors duration-300 transform rounded bg-primary md:mt-0 hover:bg-primary-light"
                        href="#"> Vamos</a>
                </div>
            </div>
        </section>

        <section title="Comparte momentos whujo" class="">
            <div class="relative max-w-5xl px-6 py-16 mx-auto text-center">

                <x-section-title>
                    <h3 class="mb-4 text-6xl font-extrabold text-secondary">
                        Share A Coffee
                    </h3>
                    <x-slot name="subtitle">
                        <p class="max-w-3xl mx-auto ">
                            Donde los pequeños momentos se hacen especiales, porque compartir algo simple puede ser tan
                            gratificante y lleno aprendizaje.
                        </p>
                    </x-slot>
                </x-section-title>

                <div class="z-10">
                    <img class="object-cover object-center w-full mt-16 rounded-md shadow h-96"
                        src="{{ asset('images/landing01/share-a-coffee-02.jpg') }}">
                </div>

                <h2 class="absolute text-[24rem] text-gray-100 opacity-100 " style="left:-30%; top:-15%; z-index:-1">Share</h2>
            </div>
        </section>

        <section class="bg-white">
            <div class="grid max-w-5xl grid-cols-3 grid-rows-2 px-6 mx-auto">

                <div class="hidden col-span-2 row-span-1 md:flex md:space-x-10">
                    <img class="object-cover object-center rounded-md shadow w-72 h-72"
                        src="{{ asset('images/bg/section-bg-share-a-coffe.jpeg') }}">
                    <img class="object-cover object-center w-64 rounded-md shadow h-96"
                        src="{{ asset('images/landing01/services-01.jpg') }}">
                </div>

                <div class="col-span-1 row-span-2 ">
                    <img class="object-cover object-center w-full rounded-md shadow" style="height: 700px;"
                        src="{{ asset('images/landing01/experiences-03.jpg') }}">
                </div>

                <div class="col-span-2 row-span-1 pt-16 md:pr-16">
                    <x-section-title>
                        <h3 class="mb-4 text-4xl font-extrabold text-secondary">
                            Creando Momentos Whujo
                        </h3>
                        <x-slot name="subtitle">
                            <p class="max-w-3xl mx-auto text-xl leading-relaxed">
                                Comparte un par de minutos para conversar un tema específico, debatir ideas, aprender de
                                nuevos temas o solo conversar mientras disfrutas de tu bebida favorita.
                            </p>
                        </x-slot>
                    </x-section-title>
                </div>



            </div>
        </section>

        <section title="Todo en 3 simples pasos" class="py-20 bg-gray-50">
            <div class="max-w-5xl px-6 py-16 mx-auto space-y-8 md:flex md:items-center md:space-y-0">
                <div class="flex flex-wrap -mx-8">
                    <div class="w-full px-8 lg:w-1/2">
                        <div class="pb-12 mb-12 border-b lg:mb-0 lg:pb-0 lg:border-b-0">
                            <h2 class="mb-4 text-3xl font-bold lg:text-4xl font-heading ">
                                Todo en tres simples pasos!
                            </h2>
                            <p class="mb-8 leading-loose text-gray-700 font-extralight">
                                Puedes buscar entre varios tipo de servicio, temática, educación, online, presencial,
                                aplicar filtros y ajustar la busqueda a tus necesidades .
                                Contrata o guardarla en tus preferencias, !No dejes que se te escape!
                            </p>
                            <div class="hidden w-full gap-8 md:flex">
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
                    <div class="w-full px-8 lg:w-1/2">
                        <ul class="space-y-12">
                            <li class="flex -mx-4">
                                <div class="px-4">
                                    <span
                                        class="flex items-center justify-center w-16 h-16 mx-auto text-2xl font-bold text-secondary font-heading">
                                        <x-icon-search class="w-full h-full text-gray-400" />
                                    </span>
                                </div>
                                <div class="px-4">
                                    <h3 class="text-xl font-semibold ">
                                        Busca
                                    </h3>
                                    <p class="leading-loose text-gray-500 font-extralight">
                                        Empiece por explorar servicios, experiencias o comparte un momento.
                                        {{-- Aplique filtros
                                        que tipo de servicio, temática, educación, online, presencial. También puedes
                                        guardar tus preferencias . --}}
                                    </p>
                                </div>
                            </li>
                            <li class="flex -mx-4">
                                <div class="px-4">
                                    <span
                                        class="flex items-center justify-center w-16 h-16 mx-auto text-2xl font-bold text-secondary font-heading">
                                        <x-icon-calendar-outline class="w-full h-full text-gray-400" />
                                    </span>
                                </div>
                                <div class="px-4">
                                    <h3 class="text-xl font-semibold ">
                                        Agenda
                                    </h3>
                                    <p class="leading-loose text-gray-500 font-extralight">
                                        Ya que hayas conseguido lo que necesitabas, lee sobre
                                        los mismos, busca reseñas, ve calendarios y agenda!
                                    </p>
                                </div>
                            </li>
                            <li class="flex -mx-4">
                                <div class="px-4">
                                    <span
                                        class="flex items-center justify-center w-16 h-16 mx-auto text-2xl font-bold text-secondary font-heading">
                                        <x-icon-rocket class="w-full h-full text-gray-400" />
                                    </span>
                                </div>
                                <div class="px-4">
                                    <h3 class="text-xl font-semibold ">
                                        Vive la experiencia o el momento Whujo
                                    </h3>
                                    <p class="leading-loose text-gray-500 font-extralight">
                                        <strong>¡Ya está todo listo!</strong> Conéctate a través de la aplicación para
                                        recibir sugerencias, preguntas o consejos locales.
                                    </p>
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
        </section>

    </div>
</x-guest-layout>
