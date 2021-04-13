<x-guest-layout>
    <div id="navbar" class="h-auto bg-white">
        <div class="flex justify-between items-center px-4 h-16 border-b">
            <h1 class="text-whujo font-whujo text-3xl font-semibold">
                <a href="{{ route('home') }}">whujo</a>
            </h1>

            <div>
                <x-button onclick="document.getElementById('dropdown-menu').classList.toggle('h-0')"
                    class="h-10 w-10 border boder-secondar-light rounded-md text-dark lg:hidden">
                    <x-icon-menu-outline class="w-full h-full p-0.5" />
                </x-button>
            </div>
        </div>

        <div class="bg-white">
            <div class="p-1">
                <form action="" class="px-4">
                    <x-input key="search" class="w-full rounded-md h-10" />

                    <div id="productType" class="w-full flex flex-wrap overflow-hidden">

                        <div class="h-auto w-auto">
                            <input id="shareACoffe" type="radio" name="type" value="share-a-coffe"
                                class="toggle-radio appearance-none hidden" checked>
                            <label for="shareACoffe"
                                class="cursor-pointer toggle-label flex space-x-2 items-center rounded-full border text-disabled text-sm p-2 m-2">
                                <img src="{{ asset('public/images/bg/bg-hero.jpg') }}" alt=""
                                    class="object-cover rounded-full h-8 w-8 ">
                                <span class="pr-1">Share a coffe</span>
                            </label>
                        </div>

                        <div class="h-auto w-auto">
                            <input id="experiences" type="radio" name="type" value="share-a-coffe"
                                class="toggle-radio appearance-none hidden">
                            <label for="experiences"
                                class=" cursor-pointer toggle-label flex space-x-2 items-center rounded-full border text-disabled text-sm p-2 m-2">
                                <img src="{{ asset('public/iamges/bg/bg-hero.jpeg') }}" alt=""
                                    class="object-cover rounded-full h-8 w-8 bg-black">
                                <span class="pr-1">Experiencias</span>
                            </label>
                        </div>

                        <div class="h-auto w-auto">
                            <input id="services" type="radio" name="type" value="share-a-coffe"
                                class="toggle-radio appearance-none hidden">
                            <label for="services"
                                class="cursor-pointer toggle-label flex space-x-2 items-center rounded-full border text-disabled text-sm p-2 m-2">
                                <img src="{{ asset('public/iamges/bg/bg-hero.jpeg') }}" alt=""
                                    class="object-cover rounded-full h-8 w-8 bg-black">
                                <span class="pr-1">Servicios</span>
                            </label>
                        </div>

                    </div>

                </form>
            </div>

        </div>
    </div>


    <div class="h-screen  bg-gray-800">

    </div>

    {{-- Cards
    <section class="relative max-w-screen  mb-16 -mt-1   ">
        <div class="container mx-auto px-4 ">
            <div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:pt-20">

                <div class="flex flex-col mb-6 lg:justify-between lg:flex-row md:mb-8">
                    <h2 class="max-w-lg text-3xl font-semibold
                                   sm:text-4xl border-b-4 border-primary pb-2">
                        Los mejores profesionales todos a tu disposició
                    </h2>
                    <p class="text-gray-700 lg:text-sm lg:max-w-md mt-4 lg:mt-0">
                        "Sed ut perspiciatis unde omnis iste natus error sit iste voluptatem accusantium doloremque rem
                        aperiam, ipsa eaque quae. Sed ut perspiciatis unde omnis iste."
                    </p>
                </div>

                <div class="max-w-6xl mx-auto bg-gray-100 py-8 px-4">
                    <div class="flex flex-wrap">

                        <div class="relative group w-1/2 pl-8 pt-8 cursor-pointer">
                            <div class="absolute inset-0 bg-primary rounded h-64 mr-16"></div>
                            <div class="relative p-6 h-64">
                                <img src="https://images.pexels.com/photos/1301547/pexels-photo-1301547.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                    class="absolute object-cover inset-0 w-full h-full rounded-md" />
                                <div
                                    class="absolute inset-0 bg-secondary-light bg-opacity-70 group-hover:bg-opacity-20 rounded-md transition-150">
                                </div>
                                <div
                                    class="absolute bottom-0 left-0 border-l-8 rounded border-yellow-400 bg-gray-300 bg-opacity-90 m-4 p-3">
                                    <h2 class="font-semibold text-xl text-secondary-light">Category</h2>
                                </div>
                            </div>
                        </div>

                        <div class="group pt-8 px-2 w-1/2 cursor-pointer">
                            <div class="relative p-6 h-64">
                                <img src="https://images.pexels.com/photos/3823488/pexels-photo-3823488.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                    class="absolute object-cover inset-0 w-full h-full rounded-md" />
                                <div
                                    class="absolute inset-0 bg-third bg-opacity-70 group-hover:bg-opacity-20 rounded-md transition-150">
                                </div>
                                <div
                                    class="absolute bottom-0 left-0 border-l-8 rounded-md border-useful bg-gray-300 bg-opacity-90 m-4 p-2">
                                    <h2 class="font-semibold text-xl text-secondary-light">Category</h2>
                                </div>
                            </div>
                        </div>

                        <div class="group p-2 w-1/3 cursor-pointer">
                            <div class="relative p-6 h-64">
                                <img src="https://images.pexels.com/photos/159306/construction-site-build-construction-work-159306.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                    class="absolute object-cover inset-0 w-full h-full rounded-md" />
                                <div
                                    class="absolute bottom-0 left-0 border-l-8 rounded-md border-yellow-400 bg-gray-300 bg-opacity-90 m-4 p-2">
                                    <h2 class="font-semibold text-xl text-secondary-light">Category</h2>
                                </div>
                            </div>
                        </div>

                        <div class="group p-2 w-1/3 cursor-pointer">
                            <div class="relative p-6 h-64">
                                <img src="https://images.pexels.com/photos/4393668/pexels-photo-4393668.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                    class="absolute object-cover inset-0 w-full h-full rounded-md" />
                                <div
                                    class="absolute bottom-0 left-0 border-l-8 rounded-md border-info bg-gray-300 bg-opacity-90 m-4 p-2">
                                    <h2 class="font-semibold text-xl text-secondary-light">Category</h2>
                                </div>
                            </div>
                        </div>

                        <div class="relative group w-1/3 pr-8 mt-2  cursor-pointer">
                            <div class="absolute inset-0 bg-primary rounded h-56 ml-16 mt-8 "></div>
                            <div class="relative p-6 h-56 ">
                                <img src="https://images.pexels.com/photos/2244746/pexels-photo-2244746.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                    class="absolute object-cover inset-0 w-full h-full rounded-md" />
                                <div
                                    class="absolute bottom-0 left-0 border-l-8 rounded-md border-success bg-gray-300 bg-opacity-90 m-4 p-2">
                                    <h2 class="font-semibold text-xl text-secondary-light">Category</h2>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="w-full">
                    <x-embla-carousel id="servCarousel" :items="$services" :type="TYPE_SERVICE" :cardType="'V02'"
                        :height="'20rem'" route="'services'" />
                </div>

            </div>
        </div>
    </section>
    Cards --}}
</x-guest-layout>
