@extends('layouts.backoffice')

@section('content')
    <div class="content">
        <div class="flex items-center justify-between w-full pl-4 my-4 sm:pr-4">
            <div class="mr-6">
                <h2 class="mb-1 text-3xl font-semibold leading-7 tracking-tight truncate md:text-4xl md:leading-10">Manage
                    My Products</h2>
                <div class="tracking-tight text-gray-600 font-base">Lorem ipsum is placeholder text commonly used in the
                    graphic.</div>
            </div>
            <div class="flex items-center">
                <x-ui.link-button href="#"
                    class="flex space-x-4 text-sm font-semibold tracking-wider text-white bg-primary hover:bg-gray-800 hover:ring-secondary">
                    <x-icon-calendar class="w-full h-full text-white"/>
                    <span>Bookings</span>
                </x-ui.link-button>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-8 mt-8 md:grid-cols-2 xl:grid-cols-2">

            <div class="flex flex-col">
                <div class="p-4 bg-white border shadow-xl rounded-3xl">
                    <div class="flex-none lg:flex">

                        <div class="w-full h-full mb-3 lg:h-36 lg:w-28 lg:mb-0">
                            <img src="{{ asset('images/landing01/services-04.jpg') }}" alt="Just a flower"
                                class="object-scale-down w-full lg:object-cover lg:h-36 rounded-2xl">
                        </div>

                        <div class="flex-auto py-2 ml-3 justify-evenly">

                            <div class="flex flex-wrap ">
                                <div class="flex-none w-full text-xs font-medium text-primary ">
                                    Product
                                </div>
                                <h2 class="flex-auto text-lg font-medium">Services</h2>
                            </div>

                            <p class="mt-3"></p>

                            <div class="flex p-4 pb-2 border-t border-gray-200 "></div>
                            <div class="flex space-x-3 text-sm font-medium">
                                <div class="flex flex-auto space-x-3">
                                    <x-ui.link-button href="{{ route('service.index') }}"
                                        class="flex items-center space-x-4 border border-secondary hover:bg-secondary hover:text-white hover:ring-secondary ">

                                        <x-icon-eye class="w-5 h-5" />
                                        <span>{{ Auth::user()->services()->count() }} Products</span>
                                    </x-ui.link-button>
                                </div>
                                <x-ui.link-button href="{{ route('service.create') }}"
                                    class="text-white rounded bg-secondary hover:text-white hover:ring-primary hover:bg-primary "
                                    type="button" aria-label="like">Create</x-ui.link-button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col">
                <div class="p-4 bg-white border shadow-xl rounded-3xl">
                    <div class="flex-none lg:flex">

                        <div class="w-full h-full mb-3 lg:h-36 lg:w-28 lg:mb-0">
                            <img src="{{ asset('images/landing01/experiences-01.jpg') }}" alt="Just a flower"
                                class="object-scale-down w-full lg:object-cover lg:h-36 rounded-2xl">
                        </div>

                        <div class="flex-auto py-2 ml-3 justify-evenly">

                            <div class="flex flex-wrap ">
                                <div class="flex-none w-full text-xs font-medium text-primary ">
                                    Product
                                </div>
                                <h2 class="flex-auto text-xl font-medium">Experiences</h2>
                            </div>

                            <p class="mt-3"></p>

                            <div class="flex p-4 pb-2 border-t border-gray-200 "></div>

                            <div class="flex space-x-3 text-sm font-medium">
                                <div class="flex flex-auto space-x-3">
                                    <x-ui.link-button href="{{ route('experience.index') }}"
                                        class="flex items-center space-x-4 border border-secondary hover:bg-secondary hover:text-white hover:ring-secondary ">

                                        <x-icon-eye class="w-5 h-5" />
                                        <span>{{ Auth::user()->experiences()->count() }} Products</span>
                                    </x-ui.link-button>
                                </div>
                                <x-ui.link-button href="{{ route('experience.index') }}"
                                    class="text-white rounded bg-secondary hover:text-white hover:ring-primary hover:bg-primary "
                                    type="button" aria-label="like">Create</x-ui.link-button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col">
                <div class="p-4 bg-white border shadow-xl rounded-3xl">
                    <div class="flex-none lg:flex">

                        <div class="w-full h-full mb-3 lg:h-36 lg:w-28 lg:mb-0">
                            <img src="{{ asset('images/landing01/experiences-05.jpg') }}" alt="Just a flower"
                                class="object-scale-down w-full lg:object-cover lg:h-36 rounded-2xl">
                        </div>

                        <div class="flex-auto py-2 ml-3 justify-evenly">

                            <div class="flex flex-wrap ">
                                <div class="flex-none w-full text-xs font-medium text-primary ">
                                    Product
                                </div>
                                <h2 class="flex-auto text-xl font-medium">Share a Coffee</h2>
                            </div>

                            <p class="mt-3"></p>

                            <div class="flex p-4 pb-2 border-t border-gray-200 "></div>
                            <div class="flex space-x-3 text-sm font-medium">
                                <div class="flex flex-auto space-x-3">
                                    <x-ui.link-button href="{{ route('shareACoffee.index') }}"
                                        class="flex items-center space-x-4 border border-secondary hover:bg-secondary hover:text-white hover:ring-secondary ">

                                        <x-icon-eye class="w-5 h-5" />
                                        <span>{{ Auth::user()->shareACoffees()->count() }} Products</span>
                                    </x-ui.link-button>
                                </div>
                                <x-ui.link-button href="{{ route('shareACoffee.index') }}"
                                    class="text-white rounded bg-secondary hover:text-white hover:ring-primary hover:bg-primary "
                                    type="button" aria-label="like">Create</x-ui.link-button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
