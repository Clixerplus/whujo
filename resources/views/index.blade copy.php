<x-guest-layout>

    {{-- Hero Banner --}}
    <header class="relative h-auto max-w-screen ">

        {{-- Background --}}
        <img src="https://images.pexels.com/photos/3184419/pexels-photo-3184419.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
            class="absolute inset-0 object-cover w-full h-full" alt="" />

        <div class="relative flex items-center bg-secondary bg-opacity-30 w-full h-full overflow-x-hidden">
            <div class="px-4 py-24 mx-auto sm:max-w-xl md:max-w-screen-xl  md:px-12 lg:px-8 md:pt-44">
                <div class="max-w-2xl mx-auto sm:max-w-xl md:max-w-4xl">
                    <div class="text-center pt-4">

                        <div id="banner"
                            class="max-w-xl mb-10 md:mx-auto text-left md:text-center lg:max-w-2xl md:mb-12">
                            <h2 class="max-w-full mb-6 font-sans text-4xl font-bold text-white sm:text-5xl md:mx-auto">
                                <span class="relative inline-block">
                                    <svg viewBox="0 0 52 24" fill="currentColor"
                                        class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-deep-purple-accent-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                                        <defs>
                                            <pattern id="700c93bf-0068-4e32-aafe-ef5b6a647708" x="0" y="0" width=".135"
                                                height=".30">
                                                <circle cx="1" cy="1" r=".7"></circle>
                                            </pattern>
                                        </defs>
                                        <rect fill="url(#700c93bf-0068-4e32-aafe-ef5b6a647708)" width="52" height="24">
                                        </rect>
                                    </svg>
                                    <span class="relative">Un Modo</span>
                                </span>
                                <span
                                    class="block w-full text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-primary lg:inline">
                                    Seguro y Rápido</span>
                                de encontrar soluciones.
                            </h2>

                            <p class="text-base text-gray-200 md:text-lg">
                                Servicios, experiencias y actividades, hechas por gente como tú!!
                            </p>
                        </div>

                        {{-- Formulario de busquedad --}}
                        <form method="get" action="{{route('search')}}"
                            class="flex flex-col md:flex-row items-center w-full mb-8 justify-center md:rounded-full md:px-2 py-2 md:bg-white text-lg">
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
                                    <option value="{{config('product.TYPE_SERVICE')}}" class=" text-secondary">Servicios
                                    </option>
                                    <option value="{{config('product.TYPE_EXPERIENCE')}}" class=" text-secondary">
                                        Experiencias</option>
                                </select>
                            </div>
                            <div class="self-start md:self-center mb-2 md:mb-0 ">
                                <button type="submit" class="mt-4 md:mt-0 md:ml-2 py-2 md:py-2 px-8
                                             bg-primary font-bold text-white
                                               rounded-full">Buscar</button>
                            </div>

                        </form>

                        <p class="max-w-md text-left md:text-center md:mx-auto mb-4 text-lg text-white font-semibold">
                            O escoge una categoría:
                        </p>

                        <div class="flex flex-wrap md:justify-center mb-10 md:mb-16">
                            <div class="m-2">
                            <a href="#"
                                class="flex h-10 items-center space-x-2 rounded-full font-light text-white bg-gray-300 bg-opacity-30 py-1 px-4">
                                <x-icon-search class="w-4 h-auto text-gray-100 fill-current" />
                                <span>Life-style</span>
                            </a>
                            </div>
                            <div class="m-2">
                            <a href="#"
                                class="flex h-10 items-center space-x-2 rounded-full font-light text-white bg-gray-300 bg-opacity-30 py-1 px-4">
                                <x-icon-search class="w-4 h-auto text-gray-100 fill-current" />
                                <span>Life-style</span>
                            </a>
                            </div>
                            <div class="m-2">
                            <a href="#"
                                class="flex h-10 items-center space-x-2 rounded-full font-light text-white bg-gray-300 bg-opacity-30 py-1 px-4">
                                <x-icon-search class="w-4 h-auto text-gray-100 fill-current" />
                                <span>Life-style</span>
                            </a>
                            </div>
                            <div class="m-2">
                            <a href="#"
                                class="flex h-10 items-center space-x-2 rounded-full font-light text-white bg-gray-300 bg-opacity-30 py-1 px-4">
                                <x-icon-search class="w-4 h-auto text-gray-100 fill-current" />
                                <span>Life-style</span>
                            </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden text-gray-50"
            style="height: 80px; transform: translateZ(0px);">
            <svg class="absolute bottom-0 overflow-hidden -mb-0.5"
                xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0"
                y="0">
                <polygon class="fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </header>
    {{-- Hero Banner --}}

    {{-- Carrusel Servicios --}}
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

                <div class="w-full">
                    <x-embla-carousel id="servCarousel"
                                      :items="$services"
                                      :type="TYPE_SERVICE"
                                      :cardType="'V02'"
                                      :height="'20rem'"
                                      route="'services'"/>
                </div>

            </div>
        </div>
    </section>
    {{-- Carrusel Servicios --}}

    {{-- CTA Share a Coffe --}}
    <section class="relative text-secondary py-12 bg-gray-100
                    sm:max-w-xl md:max-w-full
                    mx-auto px-4 md:px-24
                    lg:px-8 ">

        <svg viewBox="0 0 52 24" fill="currentColor"
            class="absolute bottom-4 right-12 lg:bottom-8 lg:right-28 mx-auto z-0 hidden w-48 text-secondary lg:w-32 sm:block">
            <defs>
                <pattern id="9a29985a-fc16-419b-ae53-1670f5ca4491" x="0" y="0" width=".135" height=".30">
                    <circle cx="1" cy="1" r=".7"></circle>
                </pattern>
            </defs>
            <rect fill="url(#9a29985a-fc16-419b-ae53-1670f5ca4491)" width="52" height="24"></rect>
        </svg>

        <svg viewBox="0 0 52 24" fill="currentColor"
            class="absolute top-4 left-12 lg:left-64  lg:top-12 mx-auto z-0 hidden w-48  text-secondary lg:w-32  sm:block">
            <defs>
                <pattern id="9a29985a-fc16-419b-ae53-1670f5ca4491" x="0" y="0" width=".135" height=".30">
                    <circle cx="1" cy="1" r=".7"></circle>
                </pattern>
            </defs>
            <rect fill="url(#9a29985a-fc16-419b-ae53-1670f5ca4491)" width="52" height="24"></rect>
        </svg>

        <div class="relative flex flex-col max-w-screen-lg
                    overflow-hidden bg-white border rounded
                    shadow-sm lg:flex-row sm:mx-auto">

            <div class="relative lg:w-1/2">
                <img src="https://images.pexels.com/photos/1253184/pexels-photo-1253184.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                    alt="" class="object-cover w-full lg:absolute h-80 lg:h-full" />
                <svg class="absolute top-0 right-0 hidden h-full text-primary lg:inline-block -mr-2"
                    viewBox="0 0 20 104" fill="currentColor">
                    <polygon points="17.3036738 5.68434189e-14 20 5.68434189e-14 20 104 0.824555778 104"></polygon>
                </svg>
            </div>

            <div class="flex flex-col justify-center p-8 lg:p-16 lg:pl-10 lg:w-1/2 bg-primary">
                <h5 class="mb-3 text-3xl font-extrabold leading-none sm:text-4xl text-white">
                    Vive las mejores experiencias
                </h5>
                <p class="mb-5 text-gray-300">
                    <span class="font-bold">Lorem ipsum</span> dolor sit amet, consectetur adipiscing elit. Etiam sem
                    neque, molestie sit amet venenatis et, dignissim ut erat. Sed aliquet velit id dui eleifend, sed
                    consequat odio sollicitudin.
                </p>
            </div>

        </div>
    </section>
    {{-- CTA Share a Coffe --}}

    {{-- Carrusel Experiencias --}}
    <section class="relative max-w-screen bg-gray-50 -mt-0.5">
        <div class="container mx-auto px-4 ">
            <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                <div class="flex flex-col mb-6 lg:justify-between lg:flex-row md:mb-8">
                    <h2 class="max-w-lg mb-5 font-sans text-3xl
                               font-bold tracking-tight text-gray-900
                               sm:text-4xl sm:leading-5 md:mb-6 group">
                        <span class="inline-block mb-1 sm:mb-4">
                            Experiencias que enseñan
                        </span>
                        <div class="h-1 ml-auto duration-300 origin-left
                                    transform bg-primary rounded-full scale-x-30 group-hover:scale-x-100">
                        </div>
                    </h2>
                </div>

                <div class="w-full">
                    <x-embla-carousel id="expeCarousel"
                                      route="'experiences'"
                                      :items="$experiences"
                                      :type="TYPE_EXPERIENCE"
                                      :cardType="'V01'"
                                      :height="'50rem'"/>
                </div>

            </div>
        </div>
    </section>

    {{-- Caracteristicas importantes --}}
    <section class="relative block bg-secondary max-w-screen py-8">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
            style="height: 80px; transform: translateZ(0px);">
            <svg class="absolute bottom-0 overflow-hidden -mb-1" xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-secondary fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <div class="max-w-7xl mx-auto px-8 pt-24 pb-16">
            <div class="flex flex-wrap text-center justify-center">
                <div class="w-full lg:w-6/12 px-4">
                    <h2 class="text-4xl font-semibold text-white">Comparte con el mundo</h2>
                    <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit recusandae sint, veniam ipsum
                        distinctio aliquam incidunt cum ducimus officiis quas magni assumenda vitae qui eum.
                    </p>
                </div>
            </div>
            <div class="flex flex-wrap mt-12 justify-center">
                <div class="w-full lg:w-3/12 px-4 text-center">
                    <div
                        class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                        <i class="fas fa-medal text-xl"></i>
                    </div>
                    <h6 class="text-xl mt-5 font-semibold text-white">
                        Excelentes Servicios
                    </h6>
                    <p class="mt-2 mb-4 text-gray-500">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et tenetur vel quisquam sequi eum
                        corporis debitis aspernatur libero, facere consequuntur?
                    </p>
                </div>
                <div class="w-full lg:w-3/12 px-4 text-center">
                    <div
                        class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                        <i class="fas fa-poll text-xl"></i>
                    </div>
                    <h5 class="text-xl mt-5 font-semibold text-white">
                        Experiencias Inolvidables
                    </h5>
                    <p class="mt-2 mb-4 text-gray-500">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus eos delectus tempora
                        architecto quae, rerum culpa distinctio aperiam?
                    </p>
                </div>
                <div class="w-full lg:w-3/12 px-4 text-center">
                    <div
                        class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                        <i class="fas fa-lightbulb text-xl"></i>
                    </div>
                    <h5 class="text-xl mt-5 font-semibold text-white">Compartir entre amigos</h5>
                    <p class="mt-2 mb-4 text-gray-500">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi corrupti nulla delectus
                        repellat nihil voluptates temporibus?
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA de Registro --}}
    <div class="w-full bg-white mt-8" style="background-image: url('{{ asset('images/people.jpg') }}'); background-size:cover;">
        <div class="flex flex-wrap md:flex-nowrap justify-center w-full lg:w-3/4 space-y-4 md:space-y-0 p-4 md:p-0 md:space-x-4 mx-auto h-full bg-white ">

            <div class="w-ful md:w-1/2 bg-gray-200 text-center p-6 rounded-md md:rounded-l-none">
                <div class="flex flex-col py-10">
                    <h3 class="font-bold text-secondary text-xl">Ofrece tus Servicios</h3>
                    <p class="my-6 text-sm">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda nobis accusamus nisi
                        neque? Voluptatem nisi molestias laudantium delectus distinctio! Adipisci est delectus
                        quisquam optio iusto.
                    </p>
                    <a class="btn bg-primary text-white w-2/4 mx-auto">Comencemos </a>
                </div>
            </div>

            <div class="w-ful md:w-1/2 bg-gray-200 text-center p-6 rounded-md md:rounded-r-none">
                <div class="flex flex-col py-10">
                    <h3 class="font-bold text-secondary text-xl">Crea una Experiencia</h3>
                    <p class="my-6 text-sm">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat esse consequuntur impedit
                        amet aliquam illum dignissimos adipisci libero deleniti deserunt?
                    </p>
                    <a class="btn bg-primary text-white w-2/4 mx-auto">Comencemos </a>
                </div>
            </div>

        </div>
    </div>

</x-guest-layout>
