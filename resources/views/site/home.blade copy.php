<x-guest-layout>

    {{-- Hero Banner --}}
    <header class="relative h-auto max-w-screen ">

        {{-- Background --}}
        <img src="{{ asset('images/bg/bg-hero.jpeg') }}" class="absolute inset-0 object-cover w-full h-full" alt="" />

        <div class="relative flex items-center bg-gray-900 bg-opacity-80 w-full h-full overflow-x-hidden">
            <div class="px-4 py-24 mx-auto sm:max-w-xl md:max-w-screen-xl md:px-12 lg:px-8 md:pt-44">
                <div class="max-w-2xl mx-auto sm:max-w-xl md:max-w-4xl">
                    <div class="text-center pt-4">

                        <div id="banner"
                            class="max-w-xl mb-10 md:mx-auto text-left md:text-center lg:max-w-2xl md:mb-12">
                            <h2 class="max-w-full mb-6 font-sans text-4xl font-bold text-white sm:text-5xl md:mx-auto">
                                <span class="relative inline-block ">
                                    <svg viewBox="0 0 52 24" fill="currentColor"
                                        class="absolute top-0 left-0 hidden w-32 -mt-8 -ml-20 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                                        <defs>
                                            <pattern id="700c93bf-0068-4e32-aafe-ef5b6a647708" x="0" y="0" width=".135"
                                                height=".30">
                                                <circle cx="1" cy="1" r=".7"></circle>
                                            </pattern>
                                        </defs>
                                        <rect fill="url(#700c93bf-0068-4e32-aafe-ef5b6a647708)" width="52" height="24">
                                        </rect>
                                    </svg>
                                    <span class="relative">Un modo</span>
                                </span>
                                <span class="block w-full bg-clip-text bg-opacity-75  transform lg:inline">
                                    Seguro y Rápido</span>
                                de encontrar soluciones.
                            </h2>

                            <p class="text-base text-white md:text-lg">
                                Servicios, experiencias y actividades, hechas por gente como tú!!
                            </p>
                        </div>

                        {{-- Formulario de busquedad --}}
                        <form method="get" action="{{route('search')}}"
                            class="flex flex-col md:flex-row items-center w-full mb-8 justify-center md:rounded-full md:px-2 py-2 md:bg-white text-lg shadow-xl border">
                            <div class="w-full md:flex-1 md:border-r mb-2 md:mb-0">
                                <input name="search" placeholder="Que estas buscando?"
                                    class="w-full p-4 md:py-2 rounded-sm md:rounded-full text-gray-500 placeholder-black outline-none" />
                            </div>

                            <div class="w-full md:flex-1 md:border-r mb-2 md:mb-0">
                                <input name="location" placeholder="Ubicación"
                                    class="w-full p-4 md:py-2 rounded-sm md:rounded-full text-gray-600 placeholder-black outline-none" />
                            </div>

                            <div class="w-full md:flex-1 mb-2 md:mb-0">
                                <select name="type" class="appearance-none w-full p-4 md:py-2 rounded-sm
                                               md:rounded-full text-gray-400 outline-none" required>

                                    <option disabled selected>Tipo producto</option>
                                    <option value="{{config('product.TYPE_SERVICE')}}" class=" text-secondary">
                                        Servicios
                                    </option>
                                    <option value="{{config('product.TYPE_EXPERIENCE')}}" class=" text-secondary">
                                        Experiencias
                                    </option>
                                </select>
                            </div>
                            <div class="self-start md:self-center mb-2 md:mb-0 ">
                                <button type="submit" class="mt-4 md:mt-0 md:ml-2 py-2 md:py-2 px-8
                                             bg-primary hover:bg-primary-light font-bold text-white
                                               rounded-full">{{ __('Search') }}</button>
                            </div>

                        </form>


                        <div class="flex flex-wrap md:justify-center mb-10 md:mb-16">

                            <div class="m-2">
                                <a href="#"
                                    class="flex items-center h-10 px-4 space-x-2 text-sm font-light rounded-full text-white bg-amazon   ">
                                    <x-icon-search class="w-4 h-auto fill-current" />
                                    <span>Share a coffe</span>
                                </a>
                            </div>
                            <div class="m-2">
                                <a href="#"
                                    class="flex items-center h-10 px-4 space-x-2 text-sm font-light rounded-full bg-amazon text-disabled-light bg-opacity-50 hover:bg-opacity-75 hover:text-white transition-colors duration-300 ease-linear">
                                    <x-icon-search class="w-4 h-auto fill-current" />
                                    <span>Servicios</span>
                                </a>
                            </div>
                            <div class="m-2">
                                <a href="#"
                                    class="flex items-center h-10 px-4 space-x-2 text-sm font-light rounded-full bg-amazon text-disabled-light bg-opacity-50 hover:bg-opacity-75 hover:text-white transition-colors duration-300 ease-linear">
                                    <x-icon-search class="w-4 h-auto fill-current" />
                                    <span>Experiencias</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </header>
    {{-- Hero Banner --}}

    {{-- Seccion Servicios --}}
    <section class="relative bg-white min-h-screen">
        <img src="{{ asset('images/bg/bg-01.png') }}" alt="" class="object-contain w-full h-full opacity-25">

        <div class="absolute inset-0 h-screen max-w-6xl mx-auto flex flex-col lg:flex-row items-center ">

            <div class="w-full lg:w-2/5 ">
                <h1 class="text-3xl font-bold sm:text-5xl pb-2">
                    Variedad
                    <span class="text-primary">de Servicios</span>
                    <span class="font-light">para lo que necesites</span>

                </h1>
                <p class="border-t-4 border-primary pt-2 font-light">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Error enim ab eos delectus asperiores sit quas porro.
                    Tempore, distinctio est.
                </p>
            </div>

            <div class="w-full lg:w-3/5 ">
                <div class="flex lg:p-8">

                    <div class="w-1/5 space-y-4 p-2 lg:pt-24">
                        <div class="rounded-md h-44 w-full transform hover:-translate-y-2 transition-500 shadow-xl">
                            <a href="#" class="block relative h-full">
                                <img src="https://images.pexels.com/photos/2773494/pexels-photo-2773494.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                    class="rounded-md object-cover h-full w-full" alt="" />
                                <div class="absolute inset-0 rounded-md
                                            bg-third-cardinal bg-opacity-0 hover:bg-opacity-75
                                            h-full w-full transition-300 flex items-center
                                            justify-center text-transparent hover:text-white">
                                    Categoria
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="w-1/5 space-y-4 p-2 lg:pt-8">
                        <div class="rounded-md h-44 w-full transform hover:-translate-y-2 transition-500 shadow-xl">
                            <a href="#" class="block relative h-full">
                                <img src="https://images.pexels.com/photos/936048/pexels-photo-936048.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                    class="rounded-md object-cover h-full w-full" alt="" />
                                <div class="absolute inset-0 rounded-md
                                                                  bg-third-cardinal bg-opacity-0 hover:bg-opacity-75
                                                                    h-full w-full transition-300 flex items-center
                                                                    justify-center text-transparent hover:text-white">
                                    Categoria 2
                                </div>
                            </a>
                        </div>
                        <div class="rounded-md h-44 w-full transform hover:-translate-y-2 transition-500 shadow-xl">
                            <a href="#" class="block relative h-full">
                                <img src="https://images.pexels.com/photos/3861447/pexels-photo-3861447.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                    class="rounded-md object-cover h-full w-full" alt="" />
                                <div class="absolute inset-0 rounded-md
                                                                  bg-third-cardinal bg-opacity-0 hover:bg-opacity-75
                                                                    h-full w-full transition-300 flex items-center
                                                                    justify-center text-transparent hover:text-white">
                                    Categoria
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="w-1/5 space-y-4 p-2 lg:pt-28">
                        <div class="rounded-md h-44 w-full transform hover:-translate-y-2 transition-500 shadow-xl">
                            <a href="#" class="block relative h-full">
                                <img src="https://images.pexels.com/photos/1261373/pexels-photo-1261373.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                    class="rounded-md object-cover h-full w-full" alt="" />
                                <div class="absolute inset-0 rounded-md
                                                                  bg-third-cardinal bg-opacity-0 hover:bg-opacity-75
                                                                    h-full w-full transition-300 flex items-center
                                                                    justify-center text-transparent hover:text-white">
                                    Categoria
                                </div>
                            </a>
                        </div>
                        <div class="rounded-md h-44 w-full transform hover:-translate-y-2 transition-500 shadow-xl">
                            <a href="#" class="block relative h-full">
                                <img src="https://images.pexels.com/photos/1312067/pexels-photo-1312067.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                    class="rounded-md object-cover h-full w-full" alt="" />
                                <div class="absolute inset-0 rounded-md
                                                                  bg-third-cardinal bg-opacity-0 hover:bg-opacity-75
                                                                    h-full w-full transition-300 flex items-center
                                                                    justify-center text-transparent hover:text-white">
                                    Categoria
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="w-1/5 space-y-4 p-2 lg:pt-4">
                        <div class="rounded-md h-44 w-full transform hover:-translate-y-2 transition-500 shadow-xl">
                            <a href="#" class="block relative h-full">
                                <img src="https://images.pexels.com/photos/1185244/pexels-photo-1185244.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                    class="rounded-md object-cover h-full w-full" alt="" />
                                <div class="absolute inset-0 rounded-md
                                                                  bg-third-cardinal bg-opacity-0 hover:bg-opacity-75
                                                                    h-full w-full transition-300 flex items-center
                                                                    justify-center text-transparent hover:text-white">
                                    Categoria
                                </div>
                            </a>
                        </div>
                        <div class="rounded-md h-44 w-full transform hover:-translate-y-2 transition-500 shadow-xl">
                            <a href="#" class="block relative h-full">
                                <img src="https://images.pexels.com/photos/1453479/pexels-photo-1453479.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                    class="rounded-md object-cover h-full w-full" alt="" />
                                <div class="absolute inset-0 rounded-md
                                                                  bg-third-cardinal bg-opacity-0 hover:bg-opacity-75
                                                                    h-full w-full transition-300 flex items-center
                                                                    justify-center text-transparent hover:text-white">
                                    Categoria
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="w-1/5 space-y-4 p-2 lg:pt-12">
                        <div class="rounded-md h-44 w-full transform hover:-translate-y-2 transition-500 shadow-xl">
                            <a href="#" class="block relative h-full">
                                <img src="https://images.pexels.com/photos/260759/pexels-photo-260759.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                    class="rounded-md object-cover h-full w-full" alt="" />
                                <div class="absolute inset-0 rounded-md
                                                                  bg-third-cardinal bg-opacity-0 hover:bg-opacity-75
                                                                    h-full w-full transition-300 flex items-center
                                                                    justify-center text-transparent hover:text-white">
                                    Categoria
                                </div>
                            </a>
                        </div>
                        <div class="rounded-md h-44 w-full transform hover:-translate-y-2 transition-500 shadow-xl">
                            <a href="#" class="block relative h-full">
                                <img src="https://images.pexels.com/photos/860227/pexels-photo-860227.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                    class="rounded-md object-cover h-full w-full" alt="" />
                                <div class="absolute inset-0 rounded-md
                                                                  bg-third-cardinal bg-opacity-0 hover:bg-opacity-75
                                                                    h-full w-full transition-300 flex items-center
                                                                    justify-center text-transparent hover:text-white">
                                    Categoria
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    {{-- Seccion Servicios --}}

    {{-- Seccion Share a Coffe --}}
    <section class="">

        <div class="relative h-72">
            <img src="{{ asset('images/bg/bg-share-coffe.jpg') }}" class=" object-top object-cover h-full w-full"
                alt="" />

            <div class="absolute inset-0 bg-amazon bg-opacity-75">

                <div
                    class="max-w-5xl mx-auto flex flex-col lg:flex-row lg:space-x-8 justify-center h-full items-center">
                    <div class="w-full lg:w-1/2 px-8">
                        <h2 class="text-3xl font-bold sm:text-5xl  border-b-4 border-primary mx-auto ">
                            Share a Coffe
                        </h2>
                    </div>
                    <div class="w-full lg:w-1/2 px-8">
                        <p class="">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Fugit voluptatem quas totam quae quos ullam dicta labore
                            corporis cum delectus. Delectus accusantium ullam doloremque,
                            voluptas int exercitationem esse pariatur iusto!
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <div class="max-w-5xl mx-auto py-16">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                <path class="elementor-shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
            	c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
            	c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
            </svg>
            <div class="flex flex-col lg:flex-row items-center">
                <div class="w-1/2 px-8">
                    <h1 class="text-3xl font-bold sm:text-5xl pb-2 border-b-4 border-primary ">
                        Share a coffe
                    </h1>
                </div>
                <div class="w-1/2 px-8">
                    <p class=" font-light">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi alias debitis minus iusto fugit
                        similique ullam, quisquam sapiente, dolorum inventore itaque facilis est nostrum a optio
                        adipisci
                        cupiditate quo ipsam.
                    </p>
                </div>
            </div>

            <div class="flex flex-col lg:flex-row lg:space-x-8 py-16">

                <div class="relative w-1/3 h-72 shadow-2xl">
                    <a href="#" class="h-full w-full">
                        <img src="https://images.pexels.com/photos/3771074/pexels-photo-3771074.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                            class="rounded-md object-cover h-full w-full" alt="" />
                        <div
                            class="absolute inset-0 rounded-md bg-gray-900 bg-opacity-0 hover:bg-opacity-75 h-full w-full transition-500 flex items-center justify-center text-transparent hover:text-white p-16">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum facere sequi quos eaque
                            magnam. Laboriosam.
                        </div>
                        <span class="block m-2">Profesionales</span>
                    </a>
                </div>

                <div class="relative w-1/3 h-72">

                    <a href="#" class="h-full w-full shadow-2xl ">
                        <img src="https://images.pexels.com/photos/1257110/pexels-photo-1257110.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                            class="rounded-md object-cover h-full w-full" alt="" />
                        <div
                            class="absolute inset-0 rounded-md bg-gray-900 bg-opacity-0 hover:bg-opacity-75 h-full w-full transition-500 flex items-center justify-center text-transparent hover:text-white p-16">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum facere sequi quos eaque
                            magnam. Laboriosam.
                        </div>
                        <span class="block m-2">Make it easy</span>
                    </a>
                </div>

                <div class="relative w-1/3 h-72">

                    <a href="#" class="h-full w-full shadow-2xl">
                        <img src="https://images.pexels.com/photos/4778401/pexels-photo-4778401.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                            class="rounded-md object-cover h-full w-full" alt="" />
                        <div
                            class="absolute inset-0 rounded-md bg-gray-900 bg-opacity-0 hover:bg-opacity-75 h-full w-full transition-500 flex items-center justify-center text-transparent hover:text-white p-16">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum facere sequi quos eaque
                            magnam. Laboriosam.
                        </div>
                        <span class="block m-2">Aprende</span>
                    </a>
                </div>
            </div>
            <div class="py-16">
                <h2 class="font-bold text-2xl text-center mb-8">Lorem ipsum dolor sit amet.</h2>
                <p class="text-center font-light">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur
                    tempora deserunt dignissimos perspiciatis molestias ut qui ab laudantium exercitationem, est ea.
                    Quibusdam consequatur repellendus laborum obcaecati a, explicabo sunt error, quam numquam ipsa amet
                    molestiae ab quia illum perferendis voluptates saepe deserunt. Inventore et tenetur perferendis eum
                    quisquam harum aspernatur corrupti pariatur commodi tempore neque hic distinctio quos perspiciatis,
                    asperiores error, minus laboriosam fugiat exercitationem ad accusantium saepe unde deleniti cum? At,
                    illum. Iure sit aspernatur cupiditate, laudantium dignissimos quia ea! Obcaecati quasi esse iste
                    veritatis voluptatum placeat unde odit nesciunt! Error accusantium pariatur, excepturi rem
                    cupiditate optio atque tenetur.</p>
            </div>

        </div>
    </section>

    <section class="h-screen bg-amazon hidden">

        <img src="https://images.pexels.com/photos/745045/pexels-photo-745045.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
            class="object-cover h-full w-full z-0" alt="" />

    </section>
    {{-- Seccion Share a Coffe --}}


    {{-- Call to action --}}
    <section class="py-16 bg-primary">
        <div class="max-w-5xl mx-auto flex flex-col lg:flex-row i h-full">
            <div class="w-full lg:w-2/3 flex flex-col justify-center">
                <h1 class="text-3xl font-bold sm:text-5xl pb-2 text-white">
                    Tienes mucho que ofrecer y nosotros te ayudamos
                </h1>
                <p class="border-t-4 border-primary pt-2 font-light text-gray-200">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas quibusdam libero, quasi doloribus
                    officia sit dolore harum cupiditate corrupti quam suscipit temporibus enim corporis nobis eius amet
                    rerum dicta ab?
                </p>
            </div>
            <div class="w-full lg:w-2/3  flex items-center justify-center">
                <div class="text-center h-auto  my-auto ">
                    <button
                        class=" bg-secondary text-2xl font bold py-3 px-6 rounded-md text-white">{{ __('Join us') }}</button>
                </div>
            </div>

        </div>
    </section>
    {{-- Call to action --}}

    {{-- Seccion Experiencias --}}
    <section class="h-screen my-16">
        <div class="max-w-5xl mx-auto">
            <div class="w-1/3">
                <h1 class="text-3xl font-bold sm:text-5xl pb-2">
                    Servicios
                </h1>
                <p class="border-t-4 border-primary pt-2 font-light">
                    Sed ut perspiciatis unde omnis iste natus error sit iste voluptatem.
                </p>
            </div>
            <div class="flex space-x-12 justify-center py-8">
                <div class="rounded-md w-1/2">
                    <a href="#"
                        class="block relative h-full hover:shadow-2xl hover:opacity-90 transition-opacity ease-in-out">
                        <img src="https://images.pexels.com/photos/3856027/pexels-photo-3856027.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                            class="rounded-xl object-cover h-full w-full" alt="" />
                        <div class="absolute inset-0 flex flex-col justify-end text-white p-8 ">
                            <h2 class="text-4xl font-bold">Presencial</h2>
                            <p class="w-3/4">
                                Vive y aprende compartiendo experiienciasy actividades entre amigos
                            </p>
                        </div>
                    </a>
                </div>
                <div class="rounded-md w-1/2">
                    <a href="#"
                        class="block relative h-full hover:shadow-2xl hover:opacity-90 transition-opacity ease-in-out">
                        <img src="https://images.pexels.com/photos/853151/pexels-photo-853151.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                            class="rounded-xl object-cover h-full w-full" alt="" />
                        <div class="absolute inset-0 flex flex-col justify-end text-white p-8 text-right ">
                            <h2 class="text-4xl font-bold">Online</h2>
                            <p class="w-3/4 ml-auto">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Odio dictaofficiis optio nulla
                            </p>
                        </div>

                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- Seccion Experiencias --}}

</x-guest-layout>
