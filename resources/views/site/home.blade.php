<x-guest-layout>

    {{-- header: hero-banner --}}
    <header class="overflow-x-hidden">
        <div class="relative w-screen h-auto min-h-screen overflow-hidden md:h-1/2 ">

            {{-- background image --}}
            <img src="{{ asset('images/bg/hero-bg-01.jpeg') }}" alt="multi-experiences collage"
                class="absolute inset-0 object-cover w-full h-full" />

            {{-- mask container --}}
            <div
                class="relative flex items-center justify-center w-full h-auto min-h-screen px-4 pt-24 pb-8 bg-opacity-75 bg-secondary md:h-1/2">
                <div class="w-full max-w-full rounded sm:max-w-full lg:text-center md:max-w-xl ">

                    <div class="relative hidden text-white lg:static">
                        <svg viewBox="0 0 52 24" fill="currentColor" class="w-32 mt-4 ml-8 -mb-4 -mr-8">
                            <defs>
                                <pattern id="700c93bf-0068-4e32-aafe-ef5b6a647708" x="0" y="0" width=".135"
                                    height=".30">
                                    <circle cx="1" cy="1" r=".7"></circle>
                                </pattern>
                            </defs>
                            <rect fill="url(#700c93bf-0068-4e32-aafe-ef5b6a647708)" width="52" height="24">
                            </rect>
                        </svg>
                    </div>

                    <h2 class="mb-4 text-5xl font-semibold text-white lg:text-center">
                        Creando <br class="sm:hidden"><span class="text-primary">Momentos</span> <br class="xs:hidden">
                        y Soluciones.
                    </h2>

                    <p class="text-xl text-white">
                        Servicios, experiencias y <br class="sm:hidden"> momentos hechos para vos!
                    </p>

                    {{-- form search component --}}
                    <div class="mt-8">
                        @livewire('search-product-form')
                    </div>

                </div>
            </div>
        </div>
    </header>

    {{-- section: services --}}
    <section class="relative bg-white text-secondary">
        <x-section-container class="flex flex-col items-center lg:h-screen lg:flex-row">

            <div class="w-full px-4 pt-12 space-y-4 md:pr-8 lg:w-2/5">
                <x-section-title>
                    Variedad
                    <span class=" text-primary"> de Servicios</span>
                    <span class="font-light sm:text-4xl">diseñados para tus necesidades</span>

                    <x-slot name="subtitle">
                        Desde lo mas simple hasta lo complejo ofreciendo servicios adaptados a tus requerimientos.
                    </x-slot>
                </x-section-title>
            </div>

            <div class="relative flex flex-wrap justify-end w-full px-4 py-12 lg:w-3/5">
                <div class="flex w-1/3 h-32 lg:p-2 lg:w-1/5 lg:h-48 lg:mt-24 ">
                    <img src="{{ asset('images/service-category-01.jpeg') }}"
                        class="object-cover w-full h-full lg:rounded" alt="" />
                </div>
                <div class="flex w-1/3 h-32 lg:p-2 lg:w-1/5 lg:h-48 lg:mt-8 ">
                    <img src="{{ asset('images/service-category-02.jpeg') }}"
                        class="object-cover w-full h-full lg:rounded" alt="" />
                </div>
                <div class="flex w-1/3 h-32 lg:p-2 lg:w-1/5 lg:h-48 lg:mt-24 ">
                    <img src="{{ asset('images/service-category-07.jpeg') }}"
                        class="object-cover w-full h-full lg:rounded" alt="" />
                </div>
                <div class="flex w-1/3 h-32 lg:p-2 lg:w-1/5 lg:h-48 lg:mt-4 ">
                    <img src="{{ asset('images/service-category-04.jpeg') }}"
                        class="object-cover w-full h-full lg:rounded" alt="" />
                </div>
                <div class="flex w-1/3 h-32 lg:p-2 lg:w-1/5 lg:h-48 lg:mt-12 ">
                    <img src="{{ asset('images/service-category-05.jpeg') }}"
                        class="object-cover w-full h-full lg:rounded" alt="" />
                </div>
                <div class="flex w-1/3 h-32 lg:p-2 lg:w-1/5 lg:h-48 lg:-mt-16 ">
                    <img src="{{ asset('images/service-category-06.jpeg') }}"
                        class="object-cover w-full h-full lg:rounded" alt="" />
                </div>
                <div class="flex w-1/3 h-32 lg:p-2 lg:w-1/5 lg:h-48 ">
                    <img src="{{ asset('images/service-category-03.jpeg') }}"
                        class="object-cover w-full h-full lg:rounded" alt="" />
                </div>
                <div class="flex w-1/3 h-32 lg:p-2 lg:w-1/5 lg:h-48 lg:-mt-20 ">
                    <img src="{{ asset('images/service-category-08.jpeg') }}"
                        class="object-cover w-full h-full lg:rounded" alt="" />
                </div>
                <div class="flex w-1/3 h-32 lg:p-2 lg:w-1/5 lg:h-48 lg:-mt-12 ">
                    <img src="{{ asset('images/service-category-09.jpeg') }}"
                        class="object-cover w-full h-full lg:rounded" alt="" />
                </div>
            </div>

        </x-section-container>
    </section>

    {{-- section: share-a-coffee --}}
    <section class="relative bg-fixed bg-center bg-cover"
        style="background-image: url({{ asset('images/bg/section-bg-share-a-coffe.jpeg') }}); ">

        <div class="flex items-center p-4 lg:px-24 md:h-96 bg-accent-orange bg-opacity-90">
            <x-section-container class="py-4 pl-4 space-y-4 ">
                <div class="max-w-4xl mx-auto">
                    <x-section-title>
                        <span class="uppercase">
                            Comparte <span class="text-primary"> un Momento</span>
                        </span><br>
                        <span class="text-4xl font-light text-white">
                            creando experiencias y oportunidades
                            <span class="text-secondary">
                                de una manera fácil y sencilla
                            </span>
                        </span>

                        <x-slot name="subtitle">
                            Compartir un café, un té, un mate o cualquiera que sea tu bebida favorita, haciendo de un
                            pequeño momento una experiencia, reconectándonos con lo perdido.
                        </x-slot>
                    </x-section-title>
                </div>
            </x-section-container>
        </div>

        <div class="space-y-16 bg-opacity-80 md:py-16 bg-secondary">

            <x-section-container class="flex flex-col lg:h-full lg:flex-row">

                <div class="w-full p-4 transition-all rounded lg:w-1/3 h-80 hover:transform hover:scale-90 ">
                    <x-link-card :link="'#'" :alt="'alt'" :img="asset('images/share-a-coffee-category-01.jpeg')"
                        class="group-hover:bg-primary-light group-hover:bg-opacity-25">
                        <div class="flex">
                            <span
                                class="flex-initial px-4 py-2 text-white rounded bg-primary-light ">Profesionales</span>
                        </div>
                    </x-link-card>
                </div>

                <div class="w-full p-4 transition-all rounded lg:w-1/3 h-80 hover:transform hover:scale-90 ">
                    <x-link-card :link="'#'" :alt="'alt'" :img="asset('images/share-a-coffee-category-02.jpeg')"
                        class="group-hover:bg-accent-purple group-hover:bg-opacity-25">
                        <div class="flex">
                            <span class="flex-initial px-6 py-2 text-white rounded bg-accent-purple">Easy life</span>
                        </div>
                    </x-link-card>
                </div>

                <div class="w-full p-4 transition-all rounded lg:w-1/3 h-80 hover:transform hover:scale-90 ">
                    <x-link-card :link="'#'" :alt="'alt'" :img="asset('images/share-a-coffee-category-03.jpeg')"
                        class="group-hover:bg-accent-aqua group-hover:bg-opacity-25">
                        <div class="flex">
                            <span class="flex-initial px-8 py-2 text-white rounded bg-accent-aqua">Aprende</span>
                        </div>
                    </x-link-card>
                </div>

            </x-section-container>

            <x-section-container class="pb-4 ">
                <div class="space-y-4 text-center">
                    <h1 class="text-3xl font-bold text-white sm:text-4xl">
                        Ven y disfruta de un momento <br><span class="text-6xl text-primary">whujo</span>
                    </h1>
                    <p class="font-light text-gray-100">
                        Te acercamos cuando todo parece estar lejos.
                    </p>
                    <div class="py-4">
                        <x-button
                            class="text-white bg-third-orange hover:ring hover:ring-third-orange hover:ring-opacity-50">
                            {{ __('Let\'s go') }}
                        </x-button>
                    </div>
                </div>
            </x-section-container>

        </div>
    </section>

    {{-- section: experiences --}}
    <section class="h-auto min-h-screen bg-fixed bg-center bg-cover "
        style="background-image: url({{ asset('images/bg/section-bg-experience-cta.jpeg') }}); backdrop-filter: blur(.5rem); ">
        <div class="w-full h-auto bg-white">
            <x-section-container class="relative flex items-center h-auto py-8 md:py-24 ">
                <div class="w-full ">

                    <div class="z-10 p-4 space-y-2 lg:w-1/2 ">
                        <x-section-title>
                            <span>Experiencias</span>
                            <x-slot name="subtitle">
                                Conoce una nueva cultura, aprende algo nuevo, experimenta la vida desde otros ojos, ven
                                y conoce la experiencia <span class="whujo-brand">whujo</span>
                            </x-slot>
                        </x-section-title>
                    </div>

                    <div class="z-10 flex flex-col justify-between md:flex-row">

                        <div class="w-full p-4 md:w-1/2 h-80 ">
                            <x-link-card :link="'#'" :alt="'alt'" :img="asset('images/experience-category-01.jpeg')"
                                class="from-secondary bg-gradient-to-t group-hover:from-transparent">
                                <h2 class="text-3xl font-bold text-duolingo ">Presencial</h2>
                                <p class="w-full text-white ">Vive y aprende mirando a los ojos</p>
                            </x-link-card>
                        </div>

                        <div class="w-full p-4 md:w-1/2 h-80">
                            <x-link-card :link="'#'" :alt="'alt'" :img="asset('images/experience-category-02.jpeg')"
                                class="from-secondary bg-gradient-to-t group-hover:from-transparent">
                                <h2 class="text-3xl font-bold text-right text-skype ">Online</h2>
                                <p class="w-4/5 ml-auto text-right text-white md:w-full">Vive la experiencia no importa
                                    donde estés</p>
                            </x-link-card>
                        </div>

                    </div>

                </div>
            </x-section-container>
        </div>

        {{-- cta: experiences --}}
        <div class="flex flex-col items-center h-auto p-4 lg:flex-row bg-gradient-to-r from-gray-900 to-transparent">
            <x-section-container>
                <div class="py-16 space-y-4 lg:w-1/2 ">

                    <h1 class="text-3xl font-bold text-white sm:text-5xl">
                        Brinda las mejores experiencias, servicios y momentos, abre un mundo de posibilidades
                    </h1>
                    <p class="hidden font-light text-gray-100 ">
                        Conviértete en <span class="text-xl font-bold font-whujo text-primary">Whujo/Anfrition/vendedor/</span>
                    </p>

                    <div class="pt-8">
                        <x-button class="bg-accent-aqua hover:ring hover:ring-accent-aqua hover:ring-opacity-50"
                            size="lg">
                            {{ __('Let\'s go') }}
                        </x-button>
                    </div>

                </div>
            </x-section-container>
        </div>

    </section>

</x-guest-layout>
