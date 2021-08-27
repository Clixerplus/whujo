<x-guest-layout>
    {{-- https://www.pexels.com/es-es/foto/foto-de-personas-que-buscan-en-el-portatil-3182743/
https://www.pexels.com/es-es/foto/mujer-camara-escritorio-internet-4491461/ --}}

    {{-- header: hero-banner --}}
    <header>
        <div class="relative flex w-screen min-h-screen">
            {{-- background image --}}
            <img src="{{ asset('images/bg/section-bg-experience-cta.jpeg') }}" alt="multi-experiences collage"
                class="absolute inset-0 object-cover w-full h-full" />
            <div class="absolute inset-0 bg-opacity-75 bg-secondary"></div>

            <div class="relative w-full px-4 pb-8 m-auto pt-28 max-w-screen md:max-w-xl lg:max-w-3xl xl:max-w-5xl">
                <h2 class="text-5xl font-bold leading-tight text-white md:text-center"
                    style="text-shadow: rgba(255,255,255,.5) 0 0 2px">

                    @lang('website.home.title.0')<br><span class="text-primary">@lang('website.home.title.1')</span>
                </h2>

                <livewire:search-product-form />
            </div>
        </div>
    </header>

    {{-- section: products --}}
    <x-section-container class="py-16 md:py-24">

        <x-section-title :separator="false">
            @lang('website.home.product_title.0') <span class="block text-primary md:inline">@lang('website.home.product_title.1')</span>

            <x-slot name="subtitle">
                @lang('website.home.product_description')<span class="whujo-brand"> whujo</span>
            </x-slot>
        </x-section-title>


        <div class="flex flex-col items-center justify-center mt-8 space-y-4 md:space-x-4 md:flex-row md:space-y-0">

            <div class="w-full md:w-1/2 h-80 ">
                <x-link-card :link="'#'" :alt="'alt'" :img="asset('images/landing01/services-04.jpg')"
                    class="transition-opacity duration-700 ease-in from-secondary bg-gradient-to-t group-hover:via-transparent">
                    <h2 class="text-2xl font-bold text-accent-aqua">@lang('Services')</h2>
                    <p class="w-full font-light text-white ">@lang('website.home.service_description')</p>
                </x-link-card>
            </div>

            <div class="w-full md:w-1/2 h-80 ">
                <x-link-card :link="'#'" :alt="'alt'" :img="asset('images/landing01/share-a-coffee-02.jpg')"
                    class="transition-opacity duration-500 ease-in from-secondary bg-gradient-to-t group-hover:via-transparent">
                    <h2 class="text-2xl font-bold text-accent-orange">@lang('Share a moment')</h2>
                    <p class="w-full font-light text-white ">@lang('website.home.share_moment_description')</p>
                </x-link-card>
            </div>

            <div class="w-full md:w-1/2 h-80 ">
                <x-link-card :link="'#'" :alt="'alt'" :img="asset('images/landing01/experiences-01.jpg')"
                    class="transition-opacity duration-500 ease-in from-secondary bg-gradient-to-t group-hover:via-transparent">
                    <h2 class="text-2xl font-bold text-duolingo">@lang('Experiences')</h2>
                    <p class="w-full font-light text-white ">@lang('website.home.experience_description')</p>
                </x-link-card>
            </div>
        </div>

    </x-section-container>

    {{-- section: modalidades --}}
    <div class="bg-gray-100">
        <x-section-container class="py-16 md:py-24">
            <x-section-title>
                @lang('website.home.modality_title.0')
                <span class="text-primary ">@lang('website.home.modality_title.1')
                    <span class="whujo-brand"> whujo</span>
                </span>
            </x-section-title>
            <div class="flex flex-col items-center justify-center mt-8 space-y-4 md:space-x-8 md:flex-row md:space-y-0">
                <div class="w-full md:w-1/2 h-80 ">
                    <x-link-card :link="'#'" :alt="'alt'" :img="asset('images/experience-category-01.jpeg')"
                        class="transition-opacity duration-700 ease-in from-secondary bg-gradient-to-t group-hover:via-transparent">
                        <h2 class="text-3xl font-bold text-duolingo ">@lang('Onsite')</h2>
                        <p class="w-full text-white ">@lang('website.home.onsite_description')</p>
                    </x-link-card>
                </div>
                <div class="w-full md:w-1/2 h-80">
                    <x-link-card :link="'#'" :alt="'alt'" :img="asset('images/experience-category-02.jpeg')"
                        class="transition-opacity duration-700 ease-in from-secondary bg-gradient-to-t group-hover:via-transparent">
                        <h2 class="text-3xl font-bold text-skype ">@lang('Online')</h2>
                        <p class="text-white md:w-4/5 ">
                            @lang('website.home.online_description')
                        </p>
                    </x-link-card>
                </div>
            </div>
        </x-section-container>
    </div>

    {{-- cta: conversion V2 --}}
    <x-section-container class="hidden py-16 md:py-24">
        <x-section-title>
            Conviertete en
            <span class="text-primary ">Anfitrión</span>
        </x-section-title>
        <div class="relative mt-8 bg-cover rounded-xl"
            style="background-image: url({{ asset('images/landing01/hero-banner2.jpeg') }});">

            <div class="w-full h-full bg-opacity-50 rounded-xl bg-secondary">
                <x-section-container class="py-16">
                    <div class="px-4 space-y-4 md:px-8 lg:w-3/4 ">
                        <x-section-title>
                            <span class="text-white ">
                                Brinda las mejores experiencias, servicios y momentos, abre un mundo de
                                posibilidades
                            </span>

                            <x-slot name="call_to_action">
                                <x-ui::button
                                    class="bg-accent-aqua hover:ring hover:ring-accent-aqua hover:ring-opacity-50"
                                    size="lg">
                                    {{ __('Let\'s go') }}
                                </x-ui::button>
                            </x-slot>
                        </x-section-title>

                    </div>
                </x-section-container>
            </div>
        </div>

    </x-section-container>

    {{-- cta: conversion V1 --}}
    <div class="relative bg-fixed bg-top bg-cover"
        style="background-image: url({{ asset('images/landing01/hero-banner2.jpeg') }}); background-position:top;">

        <div class="w-full h-full bg-opacity-50 bg-secondary">
            <x-section-container>
                <div class="py-16 space-y-4 lg:w-1/2 ">

                    <x-section-title>
                        <span class="text-white">@lang('website.home.cta_title')</span>

                        <x-slot name="call_to_action">
                            <x-ui::button class="bg-accent-aqua hover:ring hover:ring-accent-aqua hover:ring-opacity-50"
                                size="lg">
                                @lang("Let's go")
                            </x-ui::button>
                        </x-slot>
                    </x-section-title>

                </div>
            </x-section-container>
        </div>
    </div>

</x-guest-layout>
