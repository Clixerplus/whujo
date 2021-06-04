<x-guest-layout>
    {{-- https://www.pexels.com/es-es/foto/foto-de-personas-que-buscan-en-el-portatil-3182743/
https://www.pexels.com/es-es/foto/mujer-camara-escritorio-internet-4491461/ --}}

    {{-- header: hero-banner --}}
    <header class="overflow-x-hidden ">
        <div class="relative w-screen md:h-96">

            {{-- background image --}}
            <img src="{{ asset('images/bg/section-bg-experience-cta.jpeg') }}" alt="multi-experiences collage"
                class="absolute inset-0 object-cover w-full h-full" />

            {{-- mask container --}}
            <div
                class="relative flex justify-center w-full px-4 pb-8 bg-opacity-75 h-96 bg-secondary md:h-1/2 md:items-center lg:items-start">
                <div class="w-full max-w-full mt-32 mb-16 rounded sm:max-w-full lg:text-center md:max-w-xl">

                    <div class="absolute top-0 right-0 hidden text-white lg:inline">
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
                        Creando Momentos y <span class="text-primary">Soluciones</span>
                    </h2>

                    <p class="text-xl text-white">
                        Servicios, experiencias y <br class="sm:hidden"> momentos hechos para vos!
                    </p>

                    {{-- form search component --}}
                    <div class="mt-8">
                        <livewire:search-product-form />
                    </div>

                </div>
            </div>
        </div>
    </header>

    {{-- section: services --}}


    {{-- section: products --}}
    <x-section-container class="relative ">

        <x-section-title>

            Lorem ipsum dolor <span class="text-primary">sit amet</span>
            <x-separator class="mt-4" />

            <x-slot name="subtitle">
                <div class="w-full lg:w-2/3">
                    Conoce una nueva cultura, aprende algo nuevo, experimenta la vida desde otros ojos, ven
                    y conoce el mundo <span class="text-xl whujo-brand">whujo</span>
                </div>
            </x-slot>


        </x-section-title>


        <div class="flex flex-col items-center justify-center mt-8 space-y-4 md:space-x-4 md:flex-row md:space-y-0">
            <div class="w-full md:w-1/2 h-80 ">
                <x-link-card :link="'#'" :alt="'alt'" :img="asset('images/landing01/services-04.jpg')"
                    class="from-secondary bg-gradient-to-t group-hover:from-transparent">
                    <h2 class="text-2xl font-bold lg:text-3xl text-accent-aqua">Servicios</h2>
                    <p class="text-white ">Vive y aprende mirando a los ojos</p>
                </x-link-card>
            </div>

            <div class="w-full md:w-1/2 h-80">
                <x-link-card :link="'#'" :alt="'alt'" :img="asset('images/landing01/share-a-coffee-02.jpg')"
                    class="from-secondary bg-gradient-to-t group-hover:from-transparent">
                    <h2 class="text-2xl font-bold lg:text-3xl text-accent-orange">Comparte un momento</h2>
                    <p class="w-4/5 text-white md:w-full">Vive la experiencia no importa donde estés</p>
                </x-link-card>
            </div>

            <div class="w-full md:w-1/2 h-80">
                <x-link-card :link="'#'" :alt="'alt'" :img="asset('images/landing01/experiences-01.jpg')"
                    class="from-secondary bg-gradient-to-t group-hover:from-transparent">
                    <h2 class="text-2xl font-bold lg:text-3xl text-duolingo">Experiencias</h2>
                    <p class="w-4/5 text-white md:w-full">Vive la experiencia no importa
                        donde estés</p>
                </x-link-card>
            </div>
        </div>

    </x-section-container>


    {{-- section: cta-share-a-coffee --}}
    <div class="relative bg-black">
        <x-section-container class="z-20 flex flex-col items-center space-y-8 lg:h-screen lg:flex-row">

            <div class="w-full md:pr-8 lg:w-2/5">
                <x-section-title>

                    {{-- title --}}

                    <span class="text-white">Share a</span>
                    <span class=" text-primary"> Coffee </span>

                    <div class="mt-4"></div>

                    <x-separator class="mt-4" />

                    <x-slot name="subtitle">
                        <span class="text-xl text-gray-50">
                            Desde lo mas simple hasta lo complejo ofreciendo servicios adaptados a tus requerimientos.
                            Diseñados para tus necesidades
                        </span>
                    </x-slot>

                    <x-slot name="call_to_action">
                        <x-button class="text-white bg-primary">Vamos...!</x-button>
                    </x-slot>

                </x-section-title>
            </div>

            <div class="relative flex flex-wrap justify-end w-full lg:w-3/5">
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

            {{-- <x-icon-coffee class="absolute z-10 text-white opacity-25 right-24 top-24 h-96 w-96"></x-icon-coffee> --}}

    </div>

    {{-- section: modalidades --}}
    <x-section-container>

        <x-section-title>
            Lorem ipsum dolor <span class="text-primary">sit amet</span>
            <x-separator class="mt-4" />

            <x-slot name="subtitle">
                <div class="w-full lg:w-2/3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, modi! Labore sequi vel
                    cumque libero.
                </div>
            </x-slot>
        </x-section-title>

        <div class="flex flex-col justify-between mt-8 space-y-8 md:space-x-8 md:flex-row md:space-y-0">

            <div class="w-full md:w-1/2 h-80 ">
                <x-link-card :link="'#'" :alt="'alt'" :img="asset('images/experience-category-01.jpeg')"
                    class="from-secondary bg-gradient-to-t group-hover:from-transparent">
                    <h2 class="text-3xl font-bold text-duolingo ">Presencial</h2>
                    <p class="w-full text-white ">Vive y aprende mirando a los ojos</p>
                </x-link-card>
            </div>

            <div class="w-full md:w-1/2 h-80">
                <x-link-card :link="'#'" :alt="'alt'" :img="asset('images/experience-category-02.jpeg')"
                    class="from-secondary bg-gradient-to-t group-hover:from-transparent">
                    <h2 class="text-3xl font-bold text-right text-skype ">Online</h2>
                    <p class="w-4/5 ml-auto text-right text-white md:w-full">Vive la experiencia no importa
                        donde estés</p>
                </x-link-card>
            </div>

        </div>


    </x-section-container>


    {{-- cta: conversion --}}
    <div class="relative bg-fixed bg-center bg-cover in-h-screen"
        style="background-image: url({{ asset('images/bg/section-bg-experience-cta.jpeg') }});">

        <div class="w-full h-full bg-opacity-50 bg-secondary">
            <x-section-container>
                <div class="py-16 space-y-4 lg:w-1/2 ">

                    <x-section-title>
                        <span class="text-white">Brinda las mejores experiencias, servicios y momentos, abre un mundo de
                            posibilidades</span>

                        <x-slot name="call_to_action">
                            <x-button class="bg-accent-aqua hover:ring hover:ring-accent-aqua hover:ring-opacity-50"
                                size="lg">
                                {{ __('Let\'s go') }}
                            </x-button>
                        </x-slot>
                    </x-section-title>

                </div>
            </x-section-container>
        </div>
    </div>

</x-guest-layout>
