<x-guest-layout>

    {{-- Hero Banner --}}
    <header class="relative h-auto max-w-screen ">

        {{-- Image Mask --}}
        <img src="https://images.pexels.com/photos/3816395/pexels-photo-3816395.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260"
            class="absolute inset-0 object-cover w-full h-full" alt="" />

        <div class="relative flex items-center w-full h-full overflow-x-hidden bg-gray-900 bg-opacity-75">
            <div class="px-4 py-24 mx-auto sm:max-w-xl md:max-w-screen-xl md:px-12 lg:px-8 md:pt-44">
                <div class="max-w-2xl mx-auto sm:max-w-xl md:max-w-4xl">
                    <div class="pt-4 text-center">

                        <div id="banner"
                            class="max-w-xl mb-10 text-left md:mx-auto md:text-center lg:max-w-2xl md:mb-12">
                            <h2 class="max-w-full mb-6 font-sans text-4xl font-bold text-white sm:text-5xl md:mx-auto">
                                <span class="relative inline-block ">
                                    <svg viewBox="0 0 52 24" fill="currentColor"
                                        class="absolute top-0 left-0 hidden w-32 -mt-8 -ml-20 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block ">
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
                                <span class="block w-full transform bg-opacity-75 bg-clip-text lg:inline text-primary">
                                    Seguro y Rápido</span>
                                de encontrar soluciones.
                            </h2>

                            <p class="text-base text-white md:text-lg">
                                Servicios, experiencias y actividades, hechas por gente como tú!!
                            </p>
                        </div>

                        {{-- Formulario de busquedad --}}
                        @livewire('search-product-form')

                    </div>
                </div>
            </div>
        </div>

    </header>
    {{-- Hero Banner --}}

    {{-- Seccion Servicios --}}
    <section class="min-h-screen">

        <div class="flex flex-col items-center h-screen max-w-6xl mx-auto lg:flex-row ">

            <div class="w-full pl-4 space-y-2 border-l-8 lg:w-2/5 border-primary">
                <h1 class="text-3xl font-bold sm:text-5xl">
                    Variedad
                    <span class="text-primary">de Servicios</span>
                    <span class="font-light">para lo que necesites</span>

                </h1>
                <p class="font-light">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Error enim ab eos delectus asperiores sit quas porro.
                    Tempore, distinctio est.
                </p>
            </div>

            <div class="w-full lg:w-3/5 ">
                <div class="flex lg:p-8">

                    <div class="w-1/5 p-2 space-y-4 lg:pt-24">
                        <div class="w-full transform rounded-md shadow-xl h-44 hover:-translate-y-2 transition-500">
                            <a href="#" class="relative block h-full">
                                <img src="https://images.pexels.com/photos/2773494/pexels-photo-2773494.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                    class="object-cover w-full h-full rounded-md" alt="" />
                                <div
                                    class="absolute inset-0 flex items-center justify-center w-full h-full text-transparent bg-opacity-0 rounded-md bg-third-cardinal hover:bg-opacity-75 transition-300 hover:text-white">
                                    Categoria
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="w-1/5 p-2 space-y-4 lg:pt-8">
                        <div class="w-full transform rounded-md shadow-xl h-44 hover:-translate-y-2 transition-500">
                            <a href="#" class="relative block h-full">
                                <img src="https://images.pexels.com/photos/936048/pexels-photo-936048.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                    class="object-cover w-full h-full rounded-md" alt="" />
                                <div
                                    class="absolute inset-0 flex items-center justify-center w-full h-full text-transparent bg-opacity-0 rounded-md bg-third-cardinal hover:bg-opacity-75 transition-300 hover:text-white">
                                    Categoria 2
                                </div>
                            </a>
                        </div>
                        <div class="w-full transform rounded-md shadow-xl h-44 hover:-translate-y-2 transition-500">
                            <a href="#" class="relative block h-full">
                                <img src="https://images.pexels.com/photos/3861447/pexels-photo-3861447.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                    class="object-cover w-full h-full rounded-md" alt="" />
                                <div
                                    class="absolute inset-0 flex items-center justify-center w-full h-full text-transparent bg-opacity-0 rounded-md bg-third-cardinal hover:bg-opacity-75 transition-300 hover:text-white">
                                    Categoria
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="w-1/5 p-2 space-y-4 lg:pt-28">
                        <div class="w-full transform rounded-md shadow-xl h-44 hover:-translate-y-2 transition-500">
                            <a href="#" class="relative block h-full">
                                <img src="https://images.pexels.com/photos/1261373/pexels-photo-1261373.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                    class="object-cover w-full h-full rounded-md" alt="" />
                                <div
                                    class="absolute inset-0 flex items-center justify-center w-full h-full text-transparent bg-opacity-0 rounded-md bg-third-cardinal hover:bg-opacity-75 transition-300 hover:text-white">
                                    Categoria
                                </div>
                            </a>
                        </div>
                        <div class="w-full transform rounded-md shadow-xl h-44 hover:-translate-y-2 transition-500">
                            <a href="#" class="relative block h-full">
                                <img src="https://images.pexels.com/photos/1312067/pexels-photo-1312067.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                    class="object-cover w-full h-full rounded-md" alt="" />
                                <div
                                    class="absolute inset-0 flex items-center justify-center w-full h-full text-transparent bg-opacity-0 rounded-md bg-third-cardinal hover:bg-opacity-75 transition-300 hover:text-white">
                                    Categoria
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="w-1/5 p-2 space-y-4 lg:pt-4">
                        <div class="w-full transform rounded-md shadow-xl h-44 hover:-translate-y-2 transition-500">
                            <a href="#" class="relative block h-full">
                                <img src="https://images.pexels.com/photos/1185244/pexels-photo-1185244.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                    class="object-cover w-full h-full rounded-md" alt="" />
                                <div
                                    class="absolute inset-0 flex items-center justify-center w-full h-full text-transparent bg-opacity-0 rounded-md bg-third-cardinal hover:bg-opacity-75 transition-300 hover:text-white">
                                    Categoria
                                </div>
                            </a>
                        </div>
                        <div class="w-full transform rounded-md shadow-xl h-44 hover:-translate-y-2 transition-500">
                            <a href="#" class="relative block h-full">
                                <img src="https://images.pexels.com/photos/1453479/pexels-photo-1453479.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                    class="object-cover w-full h-full rounded-md" alt="" />
                                <div
                                    class="absolute inset-0 flex items-center justify-center w-full h-full text-transparent bg-opacity-0 rounded-md bg-third-cardinal hover:bg-opacity-75 transition-300 hover:text-white">
                                    Categoria
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="w-1/5 p-2 space-y-4 lg:pt-12">
                        <div class="w-full transform rounded-md shadow-xl h-44 hover:-translate-y-2 transition-500">
                            <a href="#" class="relative block h-full">
                                <img src="https://images.pexels.com/photos/260759/pexels-photo-260759.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                    class="object-cover w-full h-full rounded-md" alt="" />
                                <div
                                    class="absolute inset-0 flex items-center justify-center w-full h-full text-transparent bg-opacity-0 rounded-md bg-third-cardinal hover:bg-opacity-75 transition-300 hover:text-white">
                                    Categoria
                                </div>
                            </a>
                        </div>
                        <div class="w-full transform rounded-md shadow-xl h-44 hover:-translate-y-2 transition-500">
                            <a href="#" class="relative block h-full">
                                <img src="https://images.pexels.com/photos/860227/pexels-photo-860227.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                    class="object-cover w-full h-full rounded-md" alt="" />
                                <div
                                    class="absolute inset-0 flex items-center justify-center w-full h-full text-transparent bg-opacity-0 rounded-md bg-third-cardinal hover:bg-opacity-75 transition-300 hover:text-white">
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

    {{-- Seccion Share a coffee --}}
    <section class="relative" style="background-image: url(https://images.pexels.com/photos/745045/pexels-photo-745045.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
                    background-size: cover;
                    background-attachment: fixed;">

        <div class="">
            <div class="flex items-center h-80 bg-accent-orange bg-opacity-90">
                <div class="max-w-5xl pl-4 mx-auto space-y-4 border-l-8 border-secondary">
                    <h1 class="text-3xl font-bold text-black sm:text-5xl">
                        <span id="share">SHARE A COFFE</span>
                        <span class="font-light text-white">compartiendo experiencias de forma </span>
                        intima y cercana.
                    </h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus repudiandae eius
                        molestiae beatae hic! Minus ab tenetur, repudiandae pariatur quo ducimus
                        accusantium magnam eum natus velit rem totam, illo cumque.
                    </p>
                </div>
            </div>
            <div class="py-24 space-y-16 bg-gray-900 bg-opacity-75">
                <div class="flex flex-col items-center h-full max-w-6xl mx-auto lg:flex-row ">
                    <div
                        class="flex flex-col items-center justify-center w-full h-full lg:flex-row lg:space-y-0 lg:space-x-4">
                        <div class="w-1/3 h-auto">
                            <h3 class="mb-4 mr-8 text-xl text-white border-b-2 border-white">Profesionales</h3>
                            <div class="relative h-72">
                                <a href="#" class="w-full h-full">
                                    <img src="https://images.pexels.com/photos/3771074/pexels-photo-3771074.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                        class="object-cover w-full h-full rounded-md" alt="" />
                                    <div
                                        class="absolute inset-0 flex items-center justify-center w-full h-full p-16 text-transparent bg-gray-900 bg-opacity-0 rounded-md hover:bg-opacity-90 transition-500 hover:text-white">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum facere sequi
                                        quos
                                        eaque
                                        magnam. Laboriosam.
                                    </div>

                                </a>
                            </div>
                        </div>
                        <div class="w-1/3 h-auto">
                            <h3 class="mb-4 mr-8 text-xl text-white border-b-2 border-white">Easy life</h3>
                            <div class="relative h-72">
                                <a href="#" class="w-full h-full">
                                    <img src="https://images.pexels.com/photos/1257110/pexels-photo-1257110.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                        class="object-cover w-full h-full rounded-md" alt="" />
                                    <div
                                        class="absolute inset-0 flex items-center justify-center w-full h-full p-16 text-transparent bg-gray-900 bg-opacity-0 rounded-md hover:bg-opacity-90 transition-500 hover:text-white">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum facere sequi
                                        quos
                                        eaque
                                        magnam. Laboriosam.
                                    </div>

                                </a>
                            </div>
                        </div>
                        <div class="w-1/3 h-auto">
                            <h3 class="mb-4 mr-8 text-xl text-white border-b-2 border-white">Aprende</h3>
                            <div class="relative h-72">
                                <a href="#" class="w-full h-full">
                                    <img src="https://images.pexels.com/photos/4778401/pexels-photo-4778401.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                        class="object-cover w-full h-full rounded-md" alt="" />
                                    <div
                                        class="absolute inset-0 flex items-center justify-center w-full h-full p-16 text-transparent bg-gray-900 bg-opacity-0 rounded-md hover:bg-opacity-90 transition-500 hover:text-white">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum facere sequi
                                        quos
                                        eaque
                                        magnam. Laboriosam.
                                    </div>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="max-w-3xl mx-auto">
                    <div class="space-y-4 text-center">
                        <h1 class="text-3xl font-bold text-white sm:text-5xl">
                            Un titulo de llamado a la accion para SHARE A COFFE
                        </h1>
                        <p class="font-light text-gray-100">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro temporibus iusto
                            accusamus.
                            Asperiores iste deserunt non explicabo reprehenderit mollitia. Nemo vitae corrupti
                            recusandae, laudantium aperiam deleniti id repellat provident reprehenderit.
                        </p>
                        <div class="py-4">
                            <button
                                class="px-6 py-3 text-xl text-white rounded-md bg-third-orange">{{ __('Let\'s go') }}</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
    {{-- Seccion Share a coffee --}}

    {{-- Seccion Experiencias --}}
    <section class="min-h-screen">

        <div class="relative flex items-center h-auto py-24">
            <div class="max-w-5xl mx-auto space-y-4">

                <div class="z-10 w-1/2 pl-4 space-y-2 border-l-8 border-primary">
                    <h1 class="text-3xl font-bold sm:text-5xl">
                        Experiencias
                    </h1>
                    <p class="font-light">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores voluptatum aperiam
                        accusamus modi et quisquam.
                    </p>
                </div>

                <div class="z-10 flex justify-center py-8 space-x-12">
                    <div class="w-1/2 rounded-md">
                        <a href="#"
                            class="relative block h-full transition-opacity ease-in-out hover:shadow-2xl hover:opacity-90">
                            <img src="https://images.pexels.com/photos/3856027/pexels-photo-3856027.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                class="object-cover w-full h-full rounded-xl" alt="" />
                            <div class="absolute inset-0 flex flex-col justify-end p-8 text-white ">
                                <h2 class="text-4xl font-bold">Presencial</h2>
                                <p class="w-3/4">
                                    Vive y aprende compartiendo experiienciasy actividades entre amigos
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="w-1/2 rounded-md">
                        <a href="#"
                            class="relative block h-full transition-opacity ease-in-out hover:shadow-2xl hover:opacity-90">
                            <img src="https://images.pexels.com/photos/853151/pexels-photo-853151.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                class="object-cover w-full h-full rounded-xl" alt="" />
                            <div class="absolute inset-0 flex flex-col justify-end p-8 text-right text-white ">
                                <h2 class="text-4xl font-bold">Online</h2>
                                <p class="w-3/4 ml-auto">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Odio dictaofficiis optio nulla
                                </p>
                            </div>

                        </a>
                    </div>
                </div>

                <div class="max-w-3xl mx-auto font-light text-center ">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus et sed deserunt vero
                    nostrum. Ullam voluptates tenetur voluptatem soluta autem sequi voluptatibus provident, nesciunt
                    quas obcaecati assumenda quibusdam! Blanditiis, mollitia.
                </div>

            </div>
        </div>

        <div class="relative h-screen">
            <div class="h-screen " style="background-image: url(https://images.pexels.com/photos/3856027/pexels-photo-3856027.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940); background-size: cover; background-attachment: fixed;
                    backdrop-filter: blur(.5rem)"></div>
            <div
                class="absolute inset-0 flex flex-col items-center lg:flex-row bg-gradient-to-r from-gray-900 to-transparent">
                <div class="max-w-6xl mx-auto">
                    <div class="w-1/2 space-y-4">
                        <h1 class="text-3xl font-bold text-white sm:text-5xl">
                            Brinda las mejores experiencias y abre un mundo de posibilidades
                        </h1>
                        <p class="font-light text-gray-100">
                            En <span class="text-xl font-bold font-whujo text-primary">whujo</span> lorem ipsum dolor
                            sit amet consectetur adipisicing elit. Inventore alias at ab, voluptates corrupti, magni
                            nobis expedita dolorem vero numquam ut veniam ea magnam modi officia labore architecto quo
                            nesciunt?
                        </p>
                        <div class="py-4">
                            <button
                                class="px-6 py-3 text-white rounded-md bg-accent-aqua">{{ __('Let\'s go') }}</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </section>
    {{-- Seccion Experiencias --}}

</x-guest-layout>
