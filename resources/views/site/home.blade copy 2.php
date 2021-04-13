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
                                <label for="">
                                    <a href="#"
                                        class="flex items-center h-10 px-4 space-x-2 text-sm font-light rounded-full text-white bg-amazon   ">
                                        <x-icon-search class="w-4 h-auto fill-current" />
                                        <span>Share a coffe</span>

                                    </a>
                                </label>
                            </div>
                            <div class="m-2 relative">
                                <label for="service">
                                    <input type="checkbox" class="appearance-none absolute ch-a">
                                    <a href="#"
                                        class="flex items-center h-10 px-4 space-x-2 text-sm font-light rounded-full bg-amazon text-disabled-light bg-opacity-50 hover:bg-opacity-75 hover:text-white transition-colors duration-300 ease-linear">
                                        <x-icon-search class="w-4 h-auto fill-current" />
                                        <span>Servicios</span>
                                    </a>
                                </label>
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
    <section class="min-h-screen">

        <div class="h-screen max-w-6xl mx-auto flex flex-col lg:flex-row items-center ">

            <div class="w-full lg:w-2/5 border-l-8 border-primary pl-4 space-y-2">
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
                                <div
                                    class="absolute inset-0 rounded-md
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
                                <div
                                    class="absolute inset-0 rounded-md
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
                                <div
                                    class="absolute inset-0 rounded-md
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
                                <div
                                    class="absolute inset-0 rounded-md
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
                                <div
                                    class="absolute inset-0 rounded-md
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
                                <div
                                    class="absolute inset-0 rounded-md
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
                                <div
                                    class="absolute inset-0 rounded-md
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
                                <div
                                    class="absolute inset-0 rounded-md
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

    {{-- Seccion Share a coffee --}}
    <section class="relative" style="background-image: url(https://images.pexels.com/photos/745045/pexels-photo-745045.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
                    background-size: cover;
                    background-attachment: fixed;">


        <div class="">
            <div class="h-80 bg-amazon bg-opacity-90 flex items-center">
                <div class="max-w-5xl mx-auto border-l-8 border-secondary pl-4 space-y-4">
                    <h1 class="text-3xl font-bold sm:text-5xl   text-black">
                        <span id="share">SHARE A COFFE</span>
                        <span class="text-white font-light">compartiendo experiencias de forma </span>
                        intima y cercana.
                    </h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus repudiandae eius
                        molestiae beatae hic! Minus ab tenetur, repudiandae pariatur quo ducimus
                        accusantium magnam eum natus velit rem totam, illo cumque.
                    </p>
                </div>
            </div>
            <div class="bg-gray-900 bg-opacity-75 space-y-16 py-24">
                <div class="flex items-center flex-col lg:flex-row h-full max-w-6xl mx-auto ">
                    <div
                        class="flex flex-col lg:flex-row lg:space-y-0 lg:space-x-4 items-center justify-center w-full h-full">
                        <div class="w-1/3 h-auto">
                            <h3 class="text-white text-xl mb-4 border-b-2 border-white mr-8">Profesionales</h3>
                            <div class="relative h-72">
                                <a href="#" class="h-full w-full">
                                    <img src="https://images.pexels.com/photos/3771074/pexels-photo-3771074.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                        class="rounded-md object-cover h-full w-full" alt="" />
                                    <div
                                        class="absolute inset-0 rounded-md bg-gray-900 bg-opacity-0 hover:bg-opacity-90 h-full w-full transition-500 flex items-center justify-center text-transparent hover:text-white p-16">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum facere sequi
                                        quos
                                        eaque
                                        magnam. Laboriosam.
                                    </div>

                                </a>
                            </div>
                        </div>
                        <div class="w-1/3 h-auto">
                            <h3 class="text-white text-xl mb-4 border-b-2 border-white mr-8">Easy life</h3>
                            <div class="relative h-72">
                                <a href="#" class="h-full w-full">
                                    <img src="https://images.pexels.com/photos/1257110/pexels-photo-1257110.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                        class="rounded-md object-cover h-full w-full" alt="" />
                                    <div
                                        class="absolute inset-0 rounded-md bg-gray-900 bg-opacity-0 hover:bg-opacity-90 h-full w-full transition-500 flex items-center justify-center text-transparent hover:text-white p-16">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum facere sequi
                                        quos
                                        eaque
                                        magnam. Laboriosam.
                                    </div>

                                </a>
                            </div>
                        </div>
                        <div class="w-1/3 h-auto">
                            <h3 class="text-white text-xl mb-4 border-b-2 border-white mr-8">Aprende</h3>
                            <div class="relative h-72">
                                <a href="#" class="h-full w-full">
                                    <img src="https://images.pexels.com/photos/4778401/pexels-photo-4778401.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                        class="rounded-md object-cover h-full w-full" alt="" />
                                    <div
                                        class="absolute inset-0 rounded-md bg-gray-900 bg-opacity-0 hover:bg-opacity-90 h-full w-full transition-500 flex items-center justify-center text-transparent hover:text-white p-16">
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
                    <div class="text-center space-y-4">
                        <h1 class="text-3xl font-bold sm:text-5xl text-white">
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
                                class="rounded-md py-3 px-6  text-xl text-white bg-third-orange">{{ __('Let\'s go') }}</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
    {{-- Seccion Share a coffee --}}

    {{-- Seccion Experiencias --}}
    <section class="min-h-screen">

        <div class="relative h-auto flex items-center py-24">
            <div class="max-w-5xl mx-auto space-y-4">

                <div class="w-1/2 border-l-8 border-primary pl-4 space-y-2 z-10">
                    <h1 class="text-3xl font-bold sm:text-5xl">
                        Experiencias
                    </h1>
                    <p class="font-light">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores voluptatum aperiam
                        accusamus modi et quisquam.
                    </p>
                </div>

                <div class="flex space-x-12 justify-center py-8 z-10">
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

                <div class=" text-center font-light max-w-3xl mx-auto">
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
                class="absolute inset-0   flex flex-col lg:flex-row items-center bg-gradient-to-r from-gray-900 to-transparent">
                <div class="max-w-6xl mx-auto">
                    <div class="w-1/2 space-y-4">
                        <h1 class="text-3xl font-bold sm:text-5xl text-white">
                            Brinda las mejores experiencias y abre un mundo de posibilidades
                        </h1>
                        <p class="font-light text-gray-100">
                            En <span class="font-whujo text-primary text-xl font-bold">whujo</span> lorem ipsum dolor
                            sit amet consectetur adipisicing elit. Inventore alias at ab, voluptates corrupti, magni
                            nobis expedita dolorem vero numquam ut veniam ea magnam modi officia labore architecto quo
                            nesciunt?
                        </p>
                        <div class="py-4">
                            <button class="rounded-md py-3 px-6 text-white bg-twitter">{{ __('Let\'s go') }}</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </section>
    {{-- Seccion Experiencias --}}


    <div id="choice" class="fixed inset-0 w-full h-screen flex flex-col items-center justify-center space-y-4 bg-black opacity-90 z-50 ">
        <h1 class="text-5xl text-white">Elige tu bebida</h1>
        <div class="flex items-centerjus justify-around space-x-5">
            <button type="button" onclick="chanegShare('TE')"
                class="hover:opacity-100 h-36 w-36 flex flex-col items-center justify-center bg-white opacity-75">
                <span>
                    <x-icon-camera class="w-12 h-12" /></span>
                VINO
            </button>
            <button type="button" onclick="chanegShare('TE')"
                class="hover:opacity-100 h-36 w-36 flex flex-col items-center justify-center bg-white opacity-75">
                <span>
                    <x-icon-camera class="w-12 h-12" /></span>
                MATE
            </button>
            <button type="button" onclick="chanegShare('TE')"
                class="hover:opacity-100 h-36 w-36 flex flex-col items-center justify-center bg-white opacity-75">
                <span>
                    <x-icon-camera class="w-12 h-12" /></span>
                CAFE
            </button>
            <button type="button" onclick="chanegShare('TE')" class="hover:opacity-100 h-36 w-36 flex flex-col items-center justify-center bg-white opacity-75">
                <span><x-icon-camera class="w-12 h-12"/></span>
                <span>TE</span>
            </button>

            <button type="button" onclick="chanegShare('OTRO')"
                class="hover:opacity-100 h-36 w-36 flex items-center justify-center bg-white opacity-75">
                OTRO
            </button>
        </div>

        <div class="rounded-xl h-12 bg-white w-1/2 mx-auto"></div>

    </div>

    <script>
        function chanegShare(name)        {
            let share = document.getElementById('share');
            let choice = document.getElementById('choice');
            share.innerHTML= "COMPARTE UN " + name;

            choice.classList.add('hidden');


        }
    </script>
</x-guest-layout>


@section('CTA01')
<div class="relative h-screen">
    <div class="h-full" style="background-image: url(https://jobify-demos.astoundify.com/classic/wp-content/uploads/sites/2/2016/04/hero-image-text-left-darker.jpg);
                        background-size: cover; background-attachment: fixed; filter: blur(.1rem)">
    </div>
    <div class="absolute inset-0 flex flex-col lg:flex-row items-center
                        bg-gradient-to-r from-gray-900 to-transparent">
        <div class="max-w-6xl mx-auto">
            <div class="w-1/2 space-y-4">
                <h1 class="text-3xl font-bold sm:text-5xl text-white">
                    ¿Tienes habilidades <br>que quieres compartir?
                </h1>
                <p class="font-light text-gray-100">
                    En <span class="font-whujo text-primary text-xl font-bold">whujo</span> te ayudamos para que
                    des lo mejor de ti y saques
                    provecho de todos tus conocimientos. Ya es hora que pongas
                    a producir eso que sabes hacer, no esperes!!!.
                </p>
                <div class="py-4">
                    <button class="rounded-md py-3 px-6 text-white bg-primary">{{ __('Let\'s go') }}</button>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection


@section('CTA02')
<div class="flex flex-col bg-gray-900 bg-opacity-75 lg:flex-row items-center py-24">
    <div class="max-w-2xl mx-auto">
        <div class="text-center space-y-4">
            <h1 class="text-3xl font-bold sm:text-5xl text-white">
                Un titulo de llamado a la accion para SHARE A COFFE
            </h1>
            <p class="font-light text-gray-100">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro temporibus iusto
                accusamus.
                Asperiores iste deserunt non explicabo reprehenderit mollitia. Nemo vitae corrupti
                recusandae, laudantium aperiam deleniti id repellat provident reprehenderit.
            </p>
            <div class="py-4">
                <button class="rounded-md py-3 px-6  text-xl text-white bg-third-orange">{{ __('Let\'s go') }}</button>
            </div>
        </div>
    </div>
</div>
@endsection
