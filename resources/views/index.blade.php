<x-app-nonav-layout>

    <div class="relative h-auto max-w-screen">
        <img src="https://images.pexels.com/photos/3184419/pexels-photo-3184419.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
            class="absolute inset-0 object-cover w-full h-full" alt="" />

        <div class="relative flex items-center bg-secondary bg-opacity-75 w-full h-full overflow-x-hidden">
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

                        <form method="get" action="/search"
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
                                <select class=" appearance-none w-full p-4 md:py-2 rounded-sm md:rounded-full text-gray-400 outline-none">
                                    <option disabled selected>Tipo producto</option>
                                    <option value="services" class=" text-secondary">Servicios</option>
                                    <option value="experiences" class=" text-secondary">Experiencias</option>
                                </select>
                            </div>
                            <div class="self-start md:self-center mb-2 md:mb-0 ">
                                <button type="submit"
                                    class="mt-4 md:mt-0 md:ml-2 py-2 md:py-2 px-8 bg-primary font-bold text-white rounded-full">Buscar</button>
                            </div>

                        </form>

                        <p class="max-w-md text-left md:text-center md:mx-auto mb-4 text-lg text-white font-semibold">
                            O escoge una categoría:
                        </p>
                        <div class="flex flex-wrap md:justify-center mb-10 md:mb-16">
                            <a href="#"
                                class="flex rounded-full  text-white leading-7 bg-gray-300 text-sm bg-opacity-30 py-1 px-4 mr-2 mb-3">
                                <x-icon-search class="w-4 h-auto text-gray-100 fill-current mr-2" />
                                Life-style
                            </a>
                            <a href="#"
                                class="flex rounded-full  text-white leading-7 bg-gray-300 text-sm bg-opacity-30 py-1 px-4 mr-2 mb-3">
                                <x-icon-search class="w-4 h-auto text-gray-100 fill-current mr-2" />
                                Life-style
                            </a>
                            <a href="#"
                                class="flex rounded-full  text-white leading-7 bg-gray-300 text-sm bg-opacity-30 py-1 px-4 mr-2 mb-3">
                                <x-icon-search class="w-4 h-auto text-gray-100 fill-current mr-2" />
                                Life-style
                            </a>
                            <a href="#"
                                class="flex rounded-full  text-white leading-7 bg-gray-300 text-sm bg-opacity-30 py-1 px-4 mr-2 mb-3">
                                <x-icon-search class="w-4 h-auto text-gray-100 fill-current mr-2" />
                                Life-style
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-16"
            style="height: 80px; transform: translateZ(0px);">
            <svg class="absolute bottom-0 overflow-hidden bg-transparent fill-current"
                xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0"
                y="0">
                <polygon class="text-gray-50 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>


    <section class="relative max-w-screen bg-gray-50 -mt-0.5">
        <div class="container mx-auto px-4 ">
            <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                <div class="flex flex-col mb-6 lg:justify-between lg:flex-row md:mb-8">
                    <h2
                        class="max-w-lg mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-5 md:mb-6 group">
                        <span class="inline-block mb-1 sm:mb-4">
                            Los mejores profesionales <br class="hidden md:block" />
                            todos a tu disposición
                        </span>
                        <div
                            class="h-1 ml-auto duration-300 origin-left transform bg-primary rounded-full scale-x-30 group-hover:scale-x-100">
                        </div>
                    </h2>
                    <p class="text-gray-700 lg:text-sm lg:max-w-md">
                        "Sed ut perspiciatis unde omnis iste natus error sit iste voluptatem accusantium doloremque rem
                        aperiam, ipsa eaque quae. Sed ut perspiciatis unde omnis iste."
                    </p>
                </div>
                <div class="w-full mb-8">

                    @php
                    $model = DB::table('experiences')->where('user_id','>', 1)->get();
                    @endphp

                    <x-embla-carousel :model="$model" />

                </div>

            </div>
        </div>
    </section>



    <div
        class="relative px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20 text-secondary">
        <svg viewBox="0 0 52 24" fill="currentColor"
            class="absolute bottom-12 right-16 mx-auto z-0 hidden w-48  text-secondary lg:w-32  sm:block">
            <defs>
                <pattern id="9a29985a-fc16-419b-ae53-1670f5ca4491" x="0" y="0" width=".135" height=".30">
                    <circle cx="1" cy="1" r=".7"></circle>
                </pattern>
            </defs>
            <rect fill="url(#9a29985a-fc16-419b-ae53-1670f5ca4491)" width="52" height="24"></rect>
        </svg>
        <svg viewBox="0 0 52 24" fill="currentColor"
            class="absolute left-64 top-12 mx-auto z-0 hidden w-48  text-secondary lg:w-32  sm:block">
            <defs>
                <pattern id="9a29985a-fc16-419b-ae53-1670f5ca4491" x="0" y="0" width=".135" height=".30">
                    <circle cx="1" cy="1" r=".7"></circle>
                </pattern>
            </defs>
            <rect fill="url(#9a29985a-fc16-419b-ae53-1670f5ca4491)" width="52" height="24"></rect>
        </svg>
        <div
            class="relative flex flex-col max-w-screen-lg overflow-hidden bg-white border rounded shadow-sm lg:flex-row sm:mx-auto">

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

    </div>




    <section class="pt-20 pb-16 max-w-screen">
        <div class="container mx-auto px-4">
            <h2
                class="max-w-lg mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-5 md:mb-6 group">
                <span class="inline-block mb-1 sm:mb-4">
                    Experiencias que enseñan
                </span>
                <div
                    class="h-1 ml-auto duration-300 origin-left transform bg-primary rounded-full scale-x-30 group-hover:scale-x-100">
                </div>
            </h2>
            <div class="px-4 pb-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:pb-20">
                <div class="grid gap-8 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full">
                    <div class="overflow-hidden transition-shadow duration-300 bg-white rounded shadow-sm">
                        <img src="https://images.pexels.com/photos/2408666/pexels-photo-2408666.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;w=500"
                            class="object-cover w-full h-64" alt="" />
                        <div class="p-5 border border-t-0">
                            <p class="mb-3 text-xs font-semibold tracking-wide uppercase">
                                <a href="/" class="transition-colors duration-200 text-blue-gray-900 hover:text-primary"
                                    aria-label="Category" title="Próximo">Próximo</a>
                                <span class="text-gray-600">— 28 Dec 2020</span>
                            </p>
                            <a href="/" aria-label="Category" title="Visit the East"
                                class="inline-block mb-3 text-2xl font-bold leading-5 transition-colors duration-200 hover:text-primary">Lorem
                                ipsum dolor sit.</a>
                            <p class="mb-2 text-gray-700 h-18  mt-6">
                                Sed ut perspiciatis unde omnis iste natus error sit sed quia consequuntur magni
                                voluptatem
                                doloremque.
                            </p>
                            <a href="/"
                                class="w-full bg-primary text-white rounded-md py-2 mt-4 inline-flex items-center justify-center font-semibold transition-colors duration-200 hover:bg-secondary">Reservar</a>

                        </div>
                    </div>
                    <div class="overflow-hidden transition-shadow duration-300 bg-white rounded shadow-sm">
                        <img src="https://images.pexels.com/photos/447592/pexels-photo-447592.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260"
                            class="object-cover w-full h-64" alt="" />
                        <div class="p-5 border border-t-0">
                            <p class="mb-3 text-xs font-semibold tracking-wide uppercase">
                                <a href="/" class="transition-colors duration-200 text-blue-gray-900 hover:text-primary"
                                    aria-label="Category" title="Próximo">Próximo</a>
                                <span class="text-gray-600">— 28 Dec 2020</span>
                            </p>
                            <a href="/" aria-label="Category" title="Simple is better"
                                class="inline-block mb-3 text-2xl font-bold leading-5 transition-colors duration-200 hover:text-primary">Lorem
                                ipsum dolor sit amet consectetur.</a>
                            <p class="mb-2 text-gray-700">
                                Sed ut perspiciatis unde omnis iste natus error sit sed quia consequuntur magni
                                voluptatem
                                doloremque.
                            </p>
                            <a href="/"
                                class="w-full bg-primary text-white rounded-md py-2 mt-4 inline-flex items-center justify-center font-semibold transition-colors duration-200 hover:bg-secondary">Reservar</a>
                        </div>
                    </div>
                    <div class="overflow-hidden transition-shadow duration-300 bg-white rounded shadow-sm">
                        <img src="https://images.pexels.com/photos/139829/pexels-photo-139829.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260"
                            class="object-cover w-full h-64" alt="" />
                        <div class="p-5 border border-t-0">
                            <p class="mb-3 text-xs font-semibold tracking-wide uppercase">
                                <a href="/" class="transition-colors duration-200 text-blue-gray-900 hover:text-primary"
                                    aria-label="Category" title="Próximo">Próximo</a>
                                <span class="text-gray-600">— 28 Dec 2020</span>
                            </p>
                            <a href="/" aria-label="Category" title="Film It!"
                                class="inline-block mb-3 text-2xl font-bold leading-5 transition-colors duration-200 hover:text-primary">Lorem,
                                ipsum dolor.</a>
                            <p class=" mt-4 h-20 mb-2 text-gray-700">
                                Sed ut perspiciatis unde omnis iste natus error sit sed quia consequuntur magni
                                voluptatem
                                doloremque.
                            </p>
                            <a href="/"
                                class="w-full bg-primary text-white rounded-md py-2 mt-4 inline-flex items-center justify-center font-semibold transition-colors duration-200 hover:bg-secondary">Reservar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="relative block bg-gray-900 max-w-screen">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
            style="height: 80px; transform: translateZ(0px);">
            <svg class="absolute bottom-0 overflow-hidden -mb-1" xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-gray-900 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <div class="container mx-auto px-4 lg:pt-24 lg:pb-16">
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



    <div class="relative mt-5 mb-32 bg-white">
        <img src="{{ asset('images/people.jpg') }}" class="object-cover w-full h-72" alt="" />
        <div class="absolute h-full top-0  bg-transparent">
            <div class="flex justify-center w-8/12 mx-auto h-full bg-white ">

                <div class="w-6/12 bg-gray-200 text-center p-4 mr-2">
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

                <div class="w-6/12 bg-gray-200 text-center p-4 ml-2">
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
    </div>

    <div class="relative mt-16 bg-secondary">
        <svg class="absolute top-0 w-full h-6 -mt-5 sm:-mt-10 sm:h-16 text-secondary" preserveAspectRatio="none"
            viewBox="0 0 1440 54">
            <path fill="currentColor"
                d="M0 22L120 16.7C240 11 480 1.00001 720 0.700012C960 1.00001 1200 11 1320 16.7L1440 22V54H1320C1200 54 960 54 720 54C480 54 240 54 120 54H0V22Z">
            </path>
        </svg>
        <div class="px-4 pt-12 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
            <div class="grid gap-16 row-gap-10 mb-8 lg:grid-cols-6">
                <div class="md:max-w-md lg:col-span-2">
                    <a href="/" aria-label="Go home" title="Company" class="inline-flex items-center">
                        <span class="ml-2 text-xl font-bold tracking-wide text-primary uppercase">Whujo</span>
                    </a>
                    <div class="mt-4 lg:max-w-sm text-gray-200">
                        <p class="text-sm ">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam.
                        </p>
                        <p class="mt-4 text-sm ">
                            Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                            explicabo.
                        </p>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-5 row-gap-8 lg:col-span-4 md:grid-cols-4">
                    <div>
                        <p class="font-semibold tracking-wide text-blue-900">
                            Categorías
                        </p>
                        <ul class="mt-2 space-y-2">
                            <li>
                                <a href="/"
                                    class="transition-colors duration-300 text-gray-200 hover:text-blue-900">Categoria1</a>
                            </li>
                            <li>
                                <a href="/"
                                    class="transition-colors duration-300 text-gray-200 hover:text-blue-900">Categoria2</a>
                            </li>
                            <li>
                                <a href="/"
                                    class="transition-colors duration-300 text-gray-200 hover:text-blue-900">Categoria3</a>
                            </li>
                            <li>
                                <a href="/"
                                    class="transition-colors duration-300 text-gray-200 hover:text-blue-900">Categoria4</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <p class="font-semibold tracking-wide text-blue-900">Lorem</p>
                        <ul class="mt-2 space-y-2">
                            <li>
                                <a href="/" class="transition-colors duration-300 text-gray-200 hover:text-blue-900">Sit
                                    amet</a>
                            </li>
                            <li>
                                <a href="/"
                                    class="transition-colors duration-300 text-gray-200 hover:text-blue-900">Consectetur</a>
                            </li>
                            <li>
                                <a href="/"
                                    class="transition-colors duration-300 text-gray-200 hover:text-blue-900">Adipisicing
                                    elit</a>
                            </li>
                            <li>
                                <a href="/" class="transition-colors duration-300 text-gray-200 hover:text-blue-900">Vel
                                    sequi magni</a>
                            </li>
                            <li>
                                <a href="/"
                                    class="transition-colors duration-300 text-gray-200 hover:text-blue-900">Necessitatibus</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <p class="font-semibold tracking-wide text-blue-900">Legal</p>
                        <ul class="mt-2 space-y-2">
                            <li>
                                <a href="/"
                                    class="transition-colors duration-300 text-gray-200 hover:text-blue-900">Politica de
                                    privacidad</a>
                            </li>
                            <li>
                                <a href="/"
                                    class="transition-colors duration-300 text-gray-200 hover:text-blue-900">Seguridad</a>
                            </li>
                            <li>
                                <a href="/"
                                    class="transition-colors duration-300 text-gray-200 hover:text-blue-900">Nonprofit</a>
                            </li>
                            <li>
                                <a href="/"
                                    class="transition-colors duration-300 text-gray-200 hover:text-blue-900">Ayuda</a>
                            </li>

                        </ul>
                    </div>
                    <div>
                        <p class="font-semibold tracking-wide text-blue-900">
                            Whujo
                        </p>
                        <ul class="mt-2 space-y-2">
                            <li>
                                <a href="/"
                                    class="transition-colors duration-300 text-gray-200 hover:text-blue-900">Landing1</a>
                            </li>
                            <li>
                                <a href="/"
                                    class="transition-colors duration-300 text-gray-200 hover:text-blue-900">Landing2</a>
                            </li>
                            <li>
                                <a href="/"
                                    class="transition-colors duration-300 text-gray-200 hover:text-blue-900">Landing3</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="flex flex-col justify-between pt-5 pb-10 border-t border-deep-purple-accent-200 sm:flex-row">
                <p class="text-sm text-gray-100">
                    © Copyright 2020 Lorem Inc. All rights reserved.
                </p>
                <div class="flex items-center mt-4 space-x-4 sm:mt-0">
                    <a href="/" class="transition-colors duration-300 text-white hover:text-blue-400">
                        <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                            <path
                                d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z">
                            </path>
                        </svg>
                    </a>
                    <a href="/" class="transition-colors duration-300 text-white hover:text-blue-400">
                        <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
                            <circle cx="15" cy="15" r="4"></circle>
                            <path
                                d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z">
                            </path>
                        </svg>
                    </a>
                    <a href="/" class="transition-colors duration-300 text-white hover:text-blue-400">
                        <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                            <path
                                d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

 <div class="min-h-screen min-w-full bg-gray-100 flex flex-col justify-center p-10">
    <div class="relative w-full max-w-full lg:max-w-6xl xl:max-w-screen-2xl mx-auto">
      <div class="absolute inset-0 -mr-3.5 bg-gradient-to-r from-red-100 to-purple-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:rotate-3 sm:rounded-3xl"></div>
      <div class="relative bg-white shadow-lg sm:rounded-3xl">

        <div class="flex items-center justify-start pt-6 pl-6">
          <span class="w-3 h-3 bg-red-400 rounded-full mr-2"></span>
          <span class="w-3 h-3 bg-yellow-400 rounded-full mr-2"></span>
          <span class="w-3 h-3 bg-green-400 rounded-full mr-2"></span>
        </div>

        <div class="px-20 py-6">

          <!-- nav -->
          <div class="flex items-center justify-between">
            <div class="flex items-center justify-center">
              <div class="flex items-center justify-center text-3xl font-bold text-true-gray-800">
                <svg class="w-10 h-10 mr-1 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"></path>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z"></path>
                </svg>
                AR
              </div>
              <div class="hidden lg:flex items-center justify-center antialiased lg:ml-20 pt-1">
                <a href="#" class="flex items-center justify-center mr-10 text-base text-gray-700 text-opacity-90 font-medium tracking-tight hover:text-cool-gray-600 transition duration-150 ease-in-out">
                  Product
                  <svg class="w-3.5 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"></path>
                  </svg>
                </a>
                <a href="#" class="flex items-center justify-center mr-10 text-base text-gray-700 text-opacity-90 font-medium tracking-tight hover:text-cool-gray-600 transition duration-150 ease-in-out">
                  Community
                  <svg class="w-3.5 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"></path>
                  </svg>
                </a>
                <a href="#" class="flex items-center justify-center mr-10 text-base text-gray-700 text-opacity-90 font-medium tracking-tight hover:text-cool-gray-600 transition duration-150 ease-in-out">
                  Plans
                </a>
              </div>
            </div>
            <div class="hidden md:flex items-center justify-center">
              <a href="#" class="mr-5 text-lg font-medium text-true-gray-800 hover:text-cool-gray-700 transition duration-150 ease-in-out">Login</a>
              <button class="px-6 py-3 rounded-3xl font-medium bg-gradient-to-b from-gray-900 to-black text-white outline-none focus:outline-none hover:shadow-md hover:from-true-gray-900 transition duration-200 ease-in-out">Sign Up</button>
            </div>
          </div>
          <!-- /nav -->

          <!-- hero section -->
          <div class="lg:2/6 xl:w-2/4 mt-20 lg:mt-40 lg:ml-16 text-left">
            <div class="text-6xl font-semibold text-gray-900 leading-none">Bring all your work together</div>
            <div class="mt-6 text-xl font-light text-true-gray-500 antialiased">A better experience for yout attendees and less stress yout team.</div>
            <button class="mt-6 px-8 py-4 rounded-full font-normal tracking-wide bg-gradient-to-b from-blue-600 to-blue-700 text-white outline-none focus:outline-none hover:shadow-lg hover:from-blue-700 transition duration-200 ease-in-out">
              Download for Free
            </button>
          </div>
          <div class="mt-12 lg:mt-32 lg:ml-20 text-left">
            <bottom type="button" class="flex items-center justify-center w-12 h-12 rounded-full bg-cool-gray-100 text-gray-800 animate-bounce hover:text-gray-900 hover:bg-cool-gray-50 transition duration-300 ease-in-out cursor-pointer">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </bottom>
          </div>

          <!-- /hero section -->

        </div>
      </div>
    </div>
  </div>
</x-app-nonav-layout>
