<x-guest-layout>
    <div>
        <header class="relative overflow-hidden " x-data="{ isOpen: false }" style="height: 500px;">
            <img src="{{ asset('images/landing01/hero-banner.jpg') }}" alt="" class="object-cover object-center w-full h-full md:h-auto md:w-auto">
            <section title="whujo - banner" class="absolute inset-0 flex items-center justify-center bg-opacity-50 bg-secondary">
                <div class="text-center">

                    {{-- <p class="text-xl font-medium tracking-wider text-gray-300">
                        whujo
                    </p> --}}

                    <h2 class="mt-6 text-3xl font-bold text-white md:text-5xl">
                        Devolviéndole la importancia <br> a la presencialidad
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

        <section title="Servicios whujo" class="bg-white">
            <div class="max-w-5xl px-6 py-16 mx-auto">
                <div class="items-center md:flex md:space-x-6">
                    <div class="md:w-1/2">
                        <h3 class="text-4xl font-semibold text-gray-800">
                            Servicios
                        </h3>
                        <p class="max-w-md mt-4 text-gray-600">
                            Desde lo más simple a hasta lo más complejo. Ofreciendo servicios a la mano de cualquiera.
                            Nos adaptamos a la realidad virtual sin olvidar la importancia del contacto humano.
                        </p>
                    </div>

                    <div class="mt-8 md:mt-0 md:w-1/2">
                        <div class="flex items-center justify-center">
                            <div class="max-w-md">
                                <img class="object-cover object-center w-full rounded-md shadow" style="height: 500px;"
                                    src="{{ asset('images/landing01/services-04.jpg') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section title="Experiencias whujo" class="bg-white">
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
                        <h3 class="text-4xl font-semibold text-gray-800">
                            Experiencias
                        </h3>
                        <p class="max-w-md mt-4 text-gray-600">
                            Conoce una nueva cultura, aprende algo nuevo, experimenta la vida desde otros ojos, ven y
                            conoce la experiencia whujo.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white">
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

        <section title="Comparte momentos whujo" class="bg-white">
            <div class="max-w-5xl px-6 py-16 mx-auto text-center">
                <h2 class="text-4xl font-semibold text-gray-800">
                    Share a coffee
                </h2>
                <p class="max-w-lg mx-auto mt-4 text-gray-600">
                    Donde los pequeños momentos se hacen especiales, porque compartir algo simple puede ser tan
                    gratificante y lleno aprendizaje.
                </p>

                <img class="object-cover object-center w-full mt-16 rounded-md shadow h-96"
                    src="{{ asset('images/landing01/share-a-coffee-02.jpg') }}">
            </div>
        </section>

        <section class="bg-white">
            <div class="max-w-5xl px-6 py-16 mx-auto space-y-8 md:flex md:items-center md:space-y-0">
                <div class="md:w-2/3">
                    <div class="hidden md:flex md:items-center md:space-x-10">
                        <img class="object-cover object-center rounded-md shadow w-72 h-72"
                            src="{{ asset('images/bg/section-bg-share-a-coffe.jpeg') }}">
                        <img class="object-cover object-center w-64 rounded-md shadow h-96"
                            src="{{ asset('images/landing01/services-01.jpg') }}">
                    </div>
                    <h2 class="text-3xl font-semibold text-gray-800 md:mt-6">Creando Momentos Whujo</h2>
                    <p class="max-w-lg mt-4 text-gray-600">
                        Comparte un par de minutos para conversar un tema específico, debatir ideas, aprender de nuevos
                        temas, o solo conversar, mientras disfrutas de tu bebida favorita o solo el momento.
                    </p>
                </div>
                <div class="md:w-1/3">
                    <img class="object-cover object-center w-full rounded-md shadow" style="height: 700px;"
                        src="{{ asset('images/landing01/experiences-03.jpg') }}">
                </div>
            </div>
        </section>

        <section title="Todo en 3 simples pasos" class="py-20 ">
            <div class="container p-4 mx-auto max-w-7xl sm:p-6 lg:p-8 ">
                <div class="flex flex-wrap -mx-8">
                    <div class="w-full px-8 lg:w-1/2">
                        <div class="pb-12 mb-12 border-b lg:mb-0 lg:pb-0 lg:border-b-0">
                            <h2 class="mb-4 text-3xl font-bold lg:text-4xl font-heading ">
                                Todo en tres simples pasos!
                            </h2>
                            <p class="mb-8 leading-loose text-gray-500 dark:text-gray-300">
                                Puedes buscar entre varios tipo de servicio, temática, educación, online, presencial,
                                aplicar filtros y ajustar la busqueda a tus necesidades .<br>
                                Contrata o guardarla en tus preferencias, !No dejes que se te escape!<br>
                                Si quieres saber un poco mas, puedes contactarnos en cualquier momento para obtener
                                asistencia adicional.
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
                                        <x-icon-search class="w-full h-full" />
                                    </span>
                                </div>
                                <div class="px-4">
                                    <h3 class="my-4 text-xl font-semibold ">
                                        Busca
                                    </h3>
                                    <p class="leading-loose text-gray-500 dark:text-gray-300">
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
                                        <x-icon-calendar-outline class="w-full h-full" />
                                    </span>
                                </div>
                                <div class="px-4">
                                    <h3 class="my-4 text-xl font-semibold ">
                                        Agenda
                                    </h3>
                                    <p class="leading-loose text-gray-500 dark:text-gray-300">
                                        Ya que hayas conseguido lo que necesitabas, lee sobre
                                        los mismos, busca reseñas, ve calendarios y agenda!
                                    </p>
                                </div>
                            </li>
                            <li class="flex -mx-4">
                                <div class="px-4">
                                    <span
                                        class="flex items-center justify-center w-16 h-16 mx-auto text-2xl font-bold text-secondary font-heading">
                                        <x-icon-rocket class="w-full h-full" />
                                    </span>
                                </div>
                                <div class="px-4">
                                    <h3 class="my-4 text-xl font-semibold ">
                                        Vive la experiencia o el momento Whujo
                                    </h3>
                                    <p class="leading-loose text-gray-500 ">
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
