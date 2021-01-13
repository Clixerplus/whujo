
<x-app-nonav-layout>

    <x-gallery-banner />

    {{-- body --}}
    <div class="flex flex-col lg:flex-row bg-white border-b pb-8">

        {{--Panel Izquierdo--}}
        <div class="w-full lg:w-3/5 min-h-screen p-4 md:p-12">
            <div class="w-full h-full bg-white">

                {{--Contenedor Titulo, Ubicacion y Verificacion--}}
                <div class="mb-4">

                    {{-- Titulo --}}
                    <h1 class="leading-7 pr-6 font-bold text-2xl mb-2">
                        {{ $product->name }}
                    </h1>

                    {{-- Ubicacion --}}
                    <h2 class="flex leading-2 text-sm pr-6 text-gray-400 mb-8">
                        <x-icon-location class="w-4 h-auto text-gray-400" />
                        Ubicacion ({{ $product->state->name }})
                    </h2>

                    {{-- Verificacion de Usuario
                        <div class="flex flex-col items-center justify-start">
                            <x-icon-shield-checkmark class="w-12 h-auto text-success" />
                            <span class="font-bold text-sm">Verificado</span>
                        </div>
                        --}}
                </div>

                {{-- Reseñas --}}
                <div class="flex justify-between lg:justify-start items-center mb-2">
                    <span class="flex items-center font-bold leading-6 text-xl mr-6">
                        <x-icon-star class="text-yellow-400 fill-current h-auto w-6 mr-2" />
                        {{ rand(1,4)}}.{{ rand(0,9)}}
                    </span>
                    <span class="text-gray-600">({{ rand(0,250) }} reviews)</span>
                </div>

                {{-- NavBar --}}
                <nav class="bg-primary-light lg:rounded  sticky top-0 left-0  w-full">
                    <ul class="flex justify-around text-sm py-4 font-semibold text-white">
                        <li><a href="#description">Descripción</a></li>
                        <li><a href="#features">Características</a></li>
                        <li><a href="#additionals">Adicionles</a></li>
                        <li><a href="#reviews">Reseñas</a></li>
                    </ul>
                </nav>

                {{-- Descripcion --}}
                <section class="mt-12">
                    <h1 class="font-semibold text-xl mb-8">Descripcion del Producto</h1>
                    <p>
                        {{ $product->description }}
                    </p>
                </section>

                {{-- Microservicios --}}
                <section id="additionals" title="Servicios adicionales" class="my-8">
                    <h3 class="mx-4 pb-4 text-xl font-semibold border-b border-gray-400">Servicios Adicionales</h3>
                    <ul class="flex flex-col">
                        @foreach ($product->microservices as $microservice)
                        <li class="flex py-4 px-8">
                            <div class="w-3/4 ">
                                <h4 class="font-semibold">{{ $microservice->name }}</h4>
                                <p class="text-gray-600 text-sm pr-8">{{ $microservice->description }}</p>
                            </div>
                            <div class="w-1/4 self-start text-right text-gray-800 font-medium ">
                                <span>$ {{ number_format($microservice->price,2,',','.') }}</span>
                            </div>
                        </li>
                        @endforeach

                    </ul>
                    <button class="block bg-gray-200 font-semibold px-6 py-1 rounded-full mx-auto text-sm mt-8">
                        Mostrar todos
                        <span class="text-primary text-lg ml-2">></span>
                    </button>
                </section>

                {{--Reseñas--}}
                <section class="mt-12 pt-12 border-t">
                    <h1 class="font-semibold text-xl mb-8 w-2/5">
                        Reseñas
                    </h1>

                    <div class="px-12">
                        <div class="mb-4">
                            <div class="flex justify-between items-center border-b">
                                <div class="flex items-center">
                                    <div class="flex-none w-full md:w-28 p-4">
                                        <img class="w-32 h-32 md:w-16 md:h-16 object-cover rounded-full mx-auto"
                                            src="//images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80" />
                                    </div>
                                    <div>
                                        <div class="font-semibold text-lg">Nombre de Usuario</div>
                                        <div class="text-sm">Fecha: 17/12/2020</div>

                                    </div>
                                </div>
                                <div class="flex items-center font-bold leading-6 text-3xl pr-8 space-x-2">
                                    <x-icon-star class="text-yellow-400 fill-current h-auto w-8" />
                                    <span>{{ rand(1,4)}}.{{ rand(0,9)}}</span>
                                </div>

                            </div>
                            <div class="py-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. In eaque, quae libero
                                aspernatur
                                officia
                                sint. A saepe quasi magni laborum accusamus. Commodi minima at quis ullam, autem
                                voluptates
                                perferendis? Ipsam blanditiis quisquam deserunt natus necessitatibus deleniti, esse
                                aliquid,
                                harum
                                autem sunt dicta nemo culpa facere earum unde quaerat animi molestiae?
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="flex justify-between items-center border-b">
                                <div class="flex items-center">
                                    <div class="flex-none w-full md:w-28 p-4">
                                        <img class="w-32 h-32 md:w-16 md:h-16 object-cover rounded-full mx-auto"
                                            src="//images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80" />
                                    </div>
                                    <div>
                                        <div class="font-semibold text-lg">Nombre de Usuario</div>
                                        <div class="text-sm">Fecha: 17/12/2020</div>

                                    </div>
                                </div>
                                <div class="flex items-center font-bold leading-6 text-3xl pr-8 space-x-2">
                                    <x-icon-star class="text-yellow-400 fill-current h-auto w-8" />
                                    <span>{{ rand(1,4)}}.{{ rand(0,9)}}</span>
                                </div>

                            </div>
                            <div class="py-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. In eaque, quae libero
                                aspernatur
                                officia
                                sint. A saepe quasi magni laborum accusamus. Commodi minima at quis ullam, autem
                                voluptates
                                perferendis? Ipsam blanditiis quisquam deserunt natus necessitatibus deleniti, esse
                                aliquid,
                                harum
                                autem sunt dicta nemo culpa facere earum unde quaerat animi molestiae?
                            </div>
                        </div>

                    </div>

                    <div class="text-center">
                        <x-button
                            class="text-center mx-auto  text-primary active:outline-none cursor-pointer rounded-full px-8 py-1 border border-transparent hover:border-primary transition-500"
                            onclick="document.getElementById('modal').classList.remove('hidden','opacity-0')">Ver Todas
                        </x-button>
                    </div>

                    {{-- Modal de Comentarios --}}
                    <x-modal button="Cerrar" class="w-full">
                        <x-slot name="title">Reseñas</x-slot>
                        <ul class="px-4 md:px-12 text-sm">
                            <li class="flex flex-col md:flex-row py-4 my-4 shadow-w1 p-4 ">
                                <div class="flex-none w-full md:w-28 p-4">
                                    <img class="w-20 h-20 object-cover rounded-full mx-auto"
                                        src="//images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80" />
                                </div>
                                <div class="w-full md:flex-grow">
                                    <div class="flex pb-2 justify-between border-b">
                                        <div class="">
                                            <div class="font-semibold text-lg">Nombre de Usuario</div>
                                            <div class="text-sm">Fecha: 17/12/2020</div>
                                        </div>
                                        <div
                                            class="flex flex-col lg:flex-row items-center justify-start mt-1 lg:mt-0 font-bold leading-6 text-xl mr-6">
                                            <x-icon-star class="text-yellow-400 fill-current h-auto w-6 md:mr-2" />
                                            {{ rand(1,4)}}.{{ rand(0,9)}}
                                        </div>
                                    </div>
                                    <div class="py-2">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. In eaque, quae libero
                                        aspernatur
                                        officia
                                        sint. A saepe quasi magni laborum accusamus. Commodi minima at quis ullam, autem
                                        voluptates
                                        perferendis? Ipsam blanditiis quisquam deserunt natus necessitatibus deleniti,
                                        esse
                                        aliquid,
                                        harum
                                        autem sunt dicta nemo culpa facere earum unde quaerat animi molestiae?
                                    </div>
                                </div>
                            </li>
                            <li class="flex flex-col md:flex-row py-4 my-4 shadow-w1 p-4 ">
                                <div class="flex-none w-full md:w-28 p-4">
                                    <img class="w-20 h-20 object-cover rounded-full mx-auto"
                                        src="//images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80" />
                                </div>
                                <div class="w-full md:flex-grow">
                                    <div class="flex pb-2 justify-between border-b">
                                        <div class="">
                                            <div class="font-semibold text-lg">Nombre de Usuario</div>
                                            <div class="text-sm">Fecha: 17/12/2020</div>
                                        </div>
                                        <div
                                            class="flex flex-col lg:flex-row items-center justify-start mt-1 lg:mt-0 font-bold leading-6 text-xl mr-6">
                                            <x-icon-star class="text-yellow-400 fill-current h-auto w-6 md:mr-2" />
                                            {{ rand(1,4)}}.{{ rand(0,9)}}
                                        </div>
                                    </div>
                                    <div class="py-2">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. In eaque, quae libero
                                        aspernatur
                                        officia
                                        sint. A saepe quasi magni laborum accusamus. Commodi minima at quis ullam, autem
                                        voluptates
                                        perferendis? Ipsam blanditiis quisquam deserunt natus necessitatibus deleniti,
                                        esse
                                        aliquid,
                                        harum
                                        autem sunt dicta nemo culpa facere earum unde quaerat animi molestiae?
                                    </div>
                                </div>
                            </li>
                            <li class="flex flex-col md:flex-row py-4 my-4 shadow-w1 p-4 ">
                                <div class="flex-none w-full md:w-28 p-4">
                                    <img class="w-20 h-20 object-cover rounded-full mx-auto"
                                        src="//images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80" />
                                </div>
                                <div class="w-full md:flex-grow">
                                    <div class="flex pb-2 justify-between border-b">
                                        <div class="">
                                            <div class="font-semibold text-lg">Nombre de Usuario</div>
                                            <div class="text-sm">Fecha: 17/12/2020</div>
                                        </div>
                                        <div
                                            class="flex flex-col lg:flex-row items-center justify-start mt-1 lg:mt-0 font-bold leading-6 text-xl mr-6">
                                            <x-icon-star class="text-yellow-400 fill-current h-auto w-6 md:mr-2" />
                                            {{ rand(1,4)}}.{{ rand(0,9)}}
                                        </div>
                                    </div>
                                    <div class="py-2">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. In eaque, quae libero
                                        aspernatur
                                        officia
                                        sint. A saepe quasi magni laborum accusamus. Commodi minima at quis ullam, autem
                                        voluptates
                                        perferendis? Ipsam blanditiis quisquam deserunt natus necessitatibus deleniti,
                                        esse
                                        aliquid,
                                        harum
                                        autem sunt dicta nemo culpa facere earum unde quaerat animi molestiae?
                                    </div>
                                </div>
                            </li>
                            <li class="flex flex-col md:flex-row py-4 my-4 shadow-w1 p-4 ">
                                <div class="flex-none w-full md:w-28 p-4">
                                    <img class="w-20 h-20 object-cover rounded-full mx-auto"
                                        src="//images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80" />
                                </div>
                                <div class="w-full md:flex-grow">
                                    <div class="flex pb-2 justify-between border-b">
                                        <div class="">
                                            <div class="font-semibold text-lg">Nombre de Usuario</div>
                                            <div class="text-sm">Fecha: 17/12/2020</div>
                                        </div>
                                        <div
                                            class="flex flex-col lg:flex-row items-center justify-start mt-1 lg:mt-0 font-bold leading-6 text-xl mr-6">
                                            <x-icon-star class="text-yellow-400 fill-current h-auto w-6 md:mr-2" />
                                            {{ rand(1,4)}}.{{ rand(0,9)}}
                                        </div>
                                    </div>
                                    <div class="py-2">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. In eaque, quae libero
                                        aspernatur
                                        officia
                                        sint. A saepe quasi magni laborum accusamus. Commodi minima at quis ullam, autem
                                        voluptates
                                        perferendis? Ipsam blanditiis quisquam deserunt natus necessitatibus deleniti,
                                        esse
                                        aliquid,
                                        harum
                                        autem sunt dicta nemo culpa facere earum unde quaerat animi molestiae?
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </x-modal>

                </section>

                {{-- Legal --}}
                <section class="mt-12 pt-12 border-t">
                    <h1 class="font-semibold text-xl mb-8">Aspectos legales</h1>

                    <div class="flex">
                        <div class="w-1/2">
                            <h2 class="font-semibold mb-2">Políticas de Devolución</h2>
                            <p class="text-sm text-gray-700 font-light pr-4 h-28">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias unde expedita deleniti
                                porro mollitia labore libero harum, perspiciatis sequi optio quibusdam dolor delectus
                                distinctio ad. Obcaecati ex atque autem doloremque?
                            </p>
                            <a href="" class="flex items-center leading-1 text-blue-600 text-sm">
                                <span>Saber más</span>
                                <x-icon-chevron-forward class="w-4 h-auto mt-1" />
                            </a>
                        </div>
                        <div class="w-1/2">
                            <h2 class="font-semibold mb-2">Políticas de Devolución</h2>
                            <p class="text-sm text-gray-700 font-light pr-4 h-28">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias unde expedita deleniti
                                porro mollitia labore libero harum, distinctio ad. Obcaecati ex atque autem doloremque?
                            </p>
                            <a href="" class="flex items-center leading-1 text-blue-600 text-sm">
                                <span>Saber más</span>
                                <x-icon-chevron-forward class="w-4 h-auto mt-1" />
                            </a>
                        </div>

                    </div>
                </section>

            </div>
        </div>

        {{--Panel Derecho--}}
        <div class="w-full lg:w-2/5 min-h-screen md:px-12 pt-8">
            <div class="w-full h-full space-y-4">

                {{-- Seleccion de Microservicios --}}
                <section class="bg-gray-200 rounded-md w-full py-4 px-8">
                    <h3 class="pb-4 text-xl font-semibold border-b border-gray-400">Servicios Adicionales</h3>
                    <hr>
                    {{-- Lista de Microservicios --}}
                    <livewire:microservices />

                    {{-- Boton de COntratar --}}
                    <x-button class="bg-primary w-full py-4 rounded-md hover:bg-primary-light hover:shadow-w3 transition-300">Solicitar Servicio</x-button>
                </section>

                {{-- Horario --}}
                <section class="bg-gray-200 rounded-md py-4 px-8">
                    <h3 class="pb-4 text-xl font-semibold border-b border-gray-400">Horarios de atención</h3>
                    <hr>
                    <ul class="flex flex-col gap-4 my-4">
                        <li class="flex justify-between">
                            <span>Lunes</span>
                            <span>8:00 a.m. - 5:00 p.m.</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Lunes</span>
                            <span>8:00 a.m. - 5:00 p.m.</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Lunes</span>
                            <span>8:00 a.m. - 5:00 p.m.</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Lunes</span>
                            <span>8:00 a.m. - 5:00 p.m.</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Lunes</span>
                            <span>8:00 a.m. - 5:00 p.m.</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Lunes</span>
                            <span>8:00 a.m. - 5:00 p.m.</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Lunes</span>
                            <span>8:00 a.m. - 5:00 p.m.</span>
                        </li>
                    </ul>
                </section>

                {{-- Contacto Afitrion --}}
                <section class="bg-gray-200 rounded-md py-4 px-8">
                    <div class="flex justify-between pb-4">
                        <div class="h-16 flex flex-col justify-end">
                            <span class="text-gray-600 ">Anfitrion</span>
                            <h3 class="font-semibold text-xl">User Fullname</h3>
                        </div>
                        <div class="h-16 w-16 rounded-full border-4 border-gray-500 bg-gray-400"></div>
                    </div>
                    <hr>
                    <div class="my-4">
                        <span class="text-gray-600 text-md">¿Tienes dudas?</span>
                        <h4 class="text-md">Contacta con el anfitrión</h4>
                        <form action="" class="flex flex-col gap-4 my-4 ">
                            <input type="text" class="rounded py-4">
                            <textarea class="border border-gray-300 rounded min-w-full p-4 text-gray-600" name="" id="" cols="30"
                                rows="10"></textarea>
                            <button class="block bg-primary font-semibold px-6 py-3 mt-4 rounded text-white mx-auto text-sm">
                                Enviar
                            </button>
                        </form>
                    </div>
                </section>

                {{-- Redes Socailes y Meg Gusta --}}
                <div class="bg-transparent rounded-md py-8 px-4 mt-8">
                    <x-button-icon icon="heart"
                        class="w-full rounded-full py-4 text-danger hover:text-white hover:bg-danger border-danger justify-center">
                        Agregar a Favoritos
                    </x-button-icon>
                    <div class="text-center my-4">O comparte en redes sociales</div>
                    <div class="flex justify-center">
                        <x-button-icon icon="logo-facebook"
                            class="px-4  text-sm leading-5 rounded-full justify-center border bg-facebook">Share
                        </x-button-icon>
                        <x-button-icon icon="logo-instagram"
                            class="px-4 mx-2  text-sm leading-5 rounded-full justify-center border bg-instagram">Share
                        </x-button-icon>
                        <x-button-icon icon="logo-twitter"
                            class="px-4  text-sm leading-5 rounded-full justify-center border bg-twitter">Share
                        </x-button-icon>
                    </div>

                </div>

            </div>
        </div>

    </div>

    {{--Sugerencias--}}
    <div class="w-full my-8 px-8">

        @php
        $suggestion = App\Models\Service::all();
        @endphp

        <x-embla-carousel id="servCarousel" :items="$suggestion" :type="TYPE_SERVICE" :cardType="'V02'" />

    </div>
</x-app-nonav-layout>

{{--
<main class="flex-1">
    <div class="p-4">
        <div class="flex">
            <h1 class="text-2xl font-semibold mr-4 ">Service Name</h1>
            <span class="text-md text-primary border-primary border border-solid px-4 py-1 rounded-full">Services</span>
        </div>
        <h2 class="text-gray-400 my-2">Location's Service, Experience</h2>
        <div class="flex align-center">
            <x-star-rating class="text-xl my-auto text-yellow-300" :rating="'4.5'" />
            <span class="text-gray-400 ml-4">(1 reseña)</span>
        </div>
    </div>

    <nav class="bg-primary">
        <ul class="flex justify-around text-sm py-4 font-semibold text-white">
            <li><a href="#description">Descripción</a></li>
            <li><a href="#features">Características</a></li>
            <li><a href="">Adicionles</a></li>
            <li><a href="">Reseñas</a></li>
        </ul>
    </nav>

    <section id="description" title="Descripción del servicio" class="my-4 leading-relaxed">
        <p class="px-4 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Ipsam, earum doloribus! Temporibus, quisquam dolorum.
            Voluptatum cum fuga atque excepturi, nulla tenetur maiores
            omnis nemo facilis voluptates delectus impedit reiciendis! Ipsum.
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure,
            illo laboriosam molestiae commodi maxime blanditiis facere magnam
            repellendus placeat earum eveniet culpa molestias sapiente
            possimus consectetur architecto, quisquam tempore quo!</p>
    </section>

    <section id="features" title="Características que el servicio incluye" class="my-4">
        <h3 class="pb-4 text-xl font-semibold border-b border-gray-400">Características</h3>
        <ul class="flex flex-col gap-4 py-4">
            <li class="flex justify-start   ">
                <div class="flex">
                    <span class="inline-block bg-primary w-4 h-4 rounded mr-4 my-auto">&nbsp</span>
                    Descripción
                </div>
                <div class="flex ml-8">
                    <span class="inline-block bg-primary w-4 h-4 rounded mr-4 my-auto">&nbsp</span>
                    Descripción
                </div>
            </li>
            <li class="flex">
                <span class="inline-block bg-primary w-4 h-4 rounded mr-4 my-auto">&nbsp</span> Descripción
            </li>
            <li class="flex">
                <span class="inline-block bg-primary w-4 h-4 rounded mr-4 my-auto">&nbsp</span> Descripción
            </li>
            <li class="flex">
                <span class="inline-block bg-primary w-4 h-4 rounded mr-4 my-auto">&nbsp</span> Descripción
            </li>
        </ul>
    </section>

    <section id="#additionals" title="Servicios adicionales" class="my-8">
        <h3 class="mx-4 pb-4 text-xl font-semibold border-b border-gray-400">Servicios Adicionales</h3>

        <ul class="flex flex-col">
            <li class="flex p-4">
                <div class="w-2/3">
                    <h4 class="font-semibold">Microservices Name 1</h4>
                    <p class="text-gray-600 text-sm">Lorem ipsum dolor sit, amet consectetur adipisicing
                        elit.
                        Iste impedit at similique in vel harum.</p>
                </div>
                <div class="w-1/3 self-center text-gray-600">
                    <span>$ 15.000,00</span>
                </div>
            </li>
            <li class="flex bg-red-100 p-4">
                <div class="w-2/3">
                    <h4 class="font-semibold">Microservices Name 1</h4>
                    <p class="text-gray-600 text-sm">Lorem ipsum dolor sit, amet consectetur adipisicing
                        elit.
                        Iste impedit at similique in vel harum.</p>
                </div>
                <div class="w-1/3 self-center text-gray-600">
                    <span>$ 15.000,00</span>
                </div>
            </li>
            <li class="flex p-4">
                <div class="w-2/3">
                    <h4 class="font-semibold">Microservices Name 1</h4>
                    <p class="text-gray-600 text-sm">Lorem ipsum dolor sit, amet consectetur adipisicing
                        elit.
                        Iste impedit at similique in vel harum.</p>
                </div>
                <div class="w-1/3 self-center text-gray-600">
                    <span>$ 15.000,00</span>
                </div>
            </li>
        </ul>
        <button class="block bg-gray-200 font-semibold px-6 py-1 rounded-full mx-auto text-sm">
            Mostrar todos
            <span class="text-primary text-lg ml-2">></span>
        </button>
    </section>

    <section id="#additionals" title="Servicios adicionales" class="my-8">
        <h3 class="mx-4 pb-4 text-xl font-semibold border-b border-gray-400">Reviews<span>(2)</span></h3>

        <div class="border rounded border-gray-400 m-4 text-center py-8">
            <p class="text-gray-600">Rating:</p>
            <h4 class="font-bold text-3xl text-gray-700">4.5 <span class="text-lg font-normal">de 5</span>
            </h4>
            <x-star-rating class="w-36 justify-center mx-auto text-xl text-yellow-300" :rating="'4.5'" />

        </div>
        <ul>
            <li class="px-4 mb-8">
                <h5 class="font-semibold">User Name</h5>
                <span class="block text-gray-500 text-sm mb-2">Octubre 29, 2020 - 12:28 pm</span>
                <x-star-rating class="text-yellow-300" :rating="'4.5'" />
                <p class="text-sm text-gray-500 mt-3">Lorem ipsum dolor sit amet consectetur adipisicing
                    elit.
                    Ipsa
                    fugit iure iusto natus nostrum
                    accusamus vitae alias. Soluta tempore consequatur dolorem laborum at cum veniam
                    necessitatibus,
                    amet natus. Sequi, dolores.</p>
            </li>
            <li class="px-4">
                <h5 class="font-semibold">User Name</h5>
                <span class="block text-gray-500 text-sm mb-2">Octubre 29, 2020 - 12:28 pm</span>
                <x-star-rating class="text-yellow-300" :rating="'4.5'" />
                <p class="text-sm text-gray-500 mt-3">Lorem ipsum dolor sit amet consectetur adipisicing
                    elit.
                    Ipsa
                    fugit iure iusto
                    natus nostrum
                    accusamus vitae alias. Soluta tempore consequatur dolorem laborum at cum veniam
                    necessitatibus,
                    amet natus. Sequi, dolores.</p>
            </li>
        </ul>
        <button class="block bg-gray-200 font-semibold px-6 py-1 mt-4 rounded-full mx-auto text-sm">
            Mostrar todos
            <span class="text-primary text-lg ml-2">></span>
        </button>
    </section>

    <section id="#additionals" title="Servicios adicionales" class="my-8">
        <h3 class="mx-4 pb-4 text-xl font-semibold border-b border-gray-400">
            Agrega una reseña
        </h3>
        <p class="p-4 text-sm text-gray-500 font-normal">Lorem, ipsum dolor sit adipisicing elit. Eos, in
            ab!
            Quaerat mollitia minima reprehenderit?</p>
        <form action="" class="p-4">
            <textarea class="border border-gray-300 rounded min-w-full p-4 text-gray-600" name="" id="" cols="30"
                rows="10"></textarea>
            <button class="block bg-primary font-semibold px-6 py-3 mt-4 rounded text-white mx-auto text-sm">
                Enviar Reseña
            </button>
        </form>
    </section>

</main>

<aside>
    <div class="mx-4 rounded bg-green-600 text-white py-4 text-center font-bold">Usuario Verificado</div>

    <section class="bg-gray-200 rounded m-4 p-4">
        <h3 class="pb-4 text-xl font-semibold border-b border-gray-400">Contratar/Reservar</h3>
        <hr>
        <form action="" class="flex flex-col gap-4 my-4 ">
            <input type="text" class="rounded py-4">
            <select class="rounded py-4" name="" id="">
                <option value="">Choose Option </option>
                <option value="">Option 1 </option>
                <option value="">Option 3 </option>
            </select>
            <input class="rounded py-4" type="date">
            <button class="rounded py-4 bg-primary text-white font-semibold">Contratar</button>
        </form>
    </section>

    <section class="bg-gray-200 rounded m-4 p-4">
        <h3 class="pb-4 text-xl font-semibold border-b border-gray-400">Horarios de atención</h3>
        <hr>
        <ul class="flex flex-col gap-4 my-4">
            <li class="flex justify-between">
                <span>Lunes</span>
                <span>8:00 a.m. - 5:00 p.m.</span>
            </li>
            <li class="flex justify-between">
                <span>Lunes</span>
                <span>8:00 a.m. - 5:00 p.m.</span>
            </li>
            <li class="flex justify-between">
                <span>Lunes</span>
                <span>8:00 a.m. - 5:00 p.m.</span>
            </li>
            <li class="flex justify-between">
                <span>Lunes</span>
                <span>8:00 a.m. - 5:00 p.m.</span>
            </li>
            <li class="flex justify-between">
                <span>Lunes</span>
                <span>8:00 a.m. - 5:00 p.m.</span>
            </li>
            <li class="flex justify-between">
                <span>Lunes</span>
                <span>8:00 a.m. - 5:00 p.m.</span>
            </li>
            <li class="flex justify-between">
                <span>Lunes</span>
                <span>8:00 a.m. - 5:00 p.m.</span>
            </li>
        </ul>
    </section>

    <section class="bg-gray-200 rounded m-4 p-4">
        <div class="flex justify-between pb-4">
            <div class="h-16 flex flex-col justify-end">
                <span class="text-gray-600 ">Anfitrion</span>
                <h3 class="font-semibold text-xl">User Fullname</h3>
            </div>
            <div class="h-16 w-16 rounded-full border-4 border-gray-500 bg-gray-400"></div>
        </div>
        <hr>
        <div class="my-4">
            <span class="text-gray-600 text-md">¿Tienes dudas?</span>
            <h4 class="text-md">Contacta con el anfitrión</h4>
            <form action="" class="flex flex-col gap-4 my-4 ">
                <input type="text" class="rounded py-4">
                <textarea class="border border-gray-300 rounded min-w-full p-4 text-gray-600" name="" id="" cols="30"
                    rows="10"></textarea>
                <button class="block bg-primary font-semibold px-6 py-3 mt-4 rounded text-white mx-auto text-sm">
                    Enviar
                </button>
            </form>
        </div>
    </section>

    <button class="block px-8 py-2 mt-8 mx-auto rounded-full border border-primary text-primary">AGREGAR A
        FAVORITOS</button>
    <p class="text-center text-gray-600 my-2">o comparte en redes sociales</p>
    <ul class="flex justify-center mt-4">
        <li><a href="" class="block px-4 py-1 mx-2 rounded-full border border-blue-600 text-blue-600 text-sm">Red
                social</a></li>
        <li><a href="" class="block px-4 py-1 mx-2 rounded-full border border-red-600 text-red-600 text-sm">Red
                social</a></li>
        <li><a href="" class="block px-4 py-1 mx-2 rounded-full border border-teal-800 text-teal-800 text-sm">Red
                social</a></li>
    </ul>
</aside>
    --}}
