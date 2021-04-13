
<x-app-nonav-layout>

    <x-gallery-banner />

    {{-- body --}}
    <div class="flex flex-col pb-8 bg-white border-b lg:flex-row">

        {{--Panel Izquierdo--}}
        <div class="w-full min-h-screen p-4 lg:w-4/6 md:p-12">
            <div class="w-full h-full bg-white">

                {{--Contenedor Titulo, Ubicacion y Verificacion--}}
                <div class="mb-4">

                    {{-- Titulo --}}
                    <h1 class="pr-6 mb-2 text-2xl font-bold leading-7">
                        {{ $product->name }}
                    </h1>

                    {{-- Ubicacion --}}
                    <h2 class="flex pr-6 mb-8 text-sm text-gray-400 leading-2">
                        <x-icon-location class="w-4 h-auto text-gray-400" />
                        Ubicacion ({{ $product->state->name }})
                    </h2>

                    {{-- Verificacion de Usuario
                        <div class="flex flex-col items-center justify-start">
                            <x-icon-shield-checkmark class="w-12 h-auto text-success" />
                            <span class="text-sm font-bold">Verificado</span>
                        </div>
                        --}}
                </div>

                {{-- Reseñas --}}
                <div class="flex items-center justify-between mb-2 lg:justify-start">
                    <span class="flex items-center mr-6 text-xl font-bold leading-6">
                        <x-icon-star class="w-6 h-auto mr-2 text-yellow-400 fill-current" />
                        {{ rand(1,4)}}.{{ rand(0,9)}}
                    </span>
                    <span class="text-gray-600">({{ rand(0,250) }} reviews)</span>
                </div>

                {{-- NavBar --}}
                <nav class="sticky top-0 left-0 w-full bg-primary-light lg:rounded">
                    <ul class="flex justify-around py-4 text-sm font-semibold text-white">
                        <li><a href="#description">Descripción</a></li>
                        <li><a href="#features">Características</a></li>
                        <li><a href="#additionals">Adicionles</a></li>
                        <li><a href="#reviews">Reseñas</a></li>
                    </ul>
                </nav>

                {{-- Descripcion --}}
                <section class="mt-12">
                    <h1 class="mb-8 text-xl font-semibold">Descripcion del Producto</h1>
                    <p>
                        {{ $product->description }}
                    </p>
                </section>

                {{-- Microservicios --}}
                <section id="additionals" title="Servicios adicionales" class="my-8">
                    <h3 class="pb-4 mx-4 text-xl font-semibold border-b border-gray-400">Servicios Adicionales</h3>
                    <ul class="flex flex-col">
                        @foreach ($product->microservices as $microservice)
                        <li class="flex px-8 py-4">
                            <div class="w-3/4 ">
                                <h4 class="font-semibold">{{ $microservice->name }}</h4>
                                <p class="pr-8 text-sm text-gray-600">{{ $microservice->description }}</p>
                            </div>
                            <div class="self-start w-1/4 font-medium text-right text-gray-800 ">
                                <span>$ {{ number_format($microservice->price,2,',','.') }}</span>
                            </div>
                        </li>
                        @endforeach

                    </ul>
                    <button class="block px-6 py-1 mx-auto mt-8 text-sm font-semibold bg-gray-200 rounded-full">
                        Mostrar todos
                        <span class="ml-2 text-lg text-primary">></span>
                    </button>
                </section>

                {{--Reseñas--}}
                <section class="pt-12 mt-12 border-t">
                    <h1 class="w-2/5 mb-8 text-xl font-semibold">
                        Reseñas
                    </h1>

                    <div class="px-12">
                        <div class="mb-4">
                            <div class="flex items-center justify-between border-b">
                                <div class="flex items-center">
                                    <div class="flex-none w-full p-4 md:w-28">
                                        <img class="object-cover w-32 h-32 mx-auto rounded-full md:w-16 md:h-16"
                                            src="//images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80" />
                                    </div>
                                    <div>
                                        <div class="text-lg font-semibold">Nombre de Usuario</div>
                                        <div class="text-sm">Fecha: 17/12/2020</div>

                                    </div>
                                </div>
                                <div class="flex items-center pr-8 space-x-2 text-3xl font-bold leading-6">
                                    <x-icon-star class="w-8 h-auto text-yellow-400 fill-current" />
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
                            <div class="flex items-center justify-between border-b">
                                <div class="flex items-center">
                                    <div class="flex-none w-full p-4 md:w-28">
                                        <img class="object-cover w-32 h-32 mx-auto rounded-full md:w-16 md:h-16"
                                            src="//images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80" />
                                    </div>
                                    <div>
                                        <div class="text-lg font-semibold">Nombre de Usuario</div>
                                        <div class="text-sm">Fecha: 17/12/2020</div>

                                    </div>
                                </div>
                                <div class="flex items-center pr-8 space-x-2 text-3xl font-bold leading-6">
                                    <x-icon-star class="w-8 h-auto text-yellow-400 fill-current" />
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
                            class="px-8 py-1 mx-auto text-center border border-transparent rounded-full cursor-pointer text-primary active:outline-none hover:border-primary transition-500"
                            onclick="document.getElementById('modal').classList.remove('hidden','opacity-0')">Ver Todas
                        </x-button>
                    </div>

                    {{-- Modal de Comentarios --}}
                    <x-modal button="Cerrar" class="w-full">
                        <x-slot name="title">Reseñas</x-slot>
                        <ul class="px-4 text-sm md:px-12">
                            <li class="flex flex-col p-4 py-4 my-4 md:flex-row shadow-w1 ">
                                <div class="flex-none w-full p-4 md:w-28">
                                    <img class="object-cover w-20 h-20 mx-auto rounded-full"
                                        src="//images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80" />
                                </div>
                                <div class="w-full md:flex-grow">
                                    <div class="flex justify-between pb-2 border-b">
                                        <div class="">
                                            <div class="text-lg font-semibold">Nombre de Usuario</div>
                                            <div class="text-sm">Fecha: 17/12/2020</div>
                                        </div>
                                        <div
                                            class="flex flex-col items-center justify-start mt-1 mr-6 text-xl font-bold leading-6 lg:flex-row lg:mt-0">
                                            <x-icon-star class="w-6 h-auto text-yellow-400 fill-current md:mr-2" />
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
                            <li class="flex flex-col p-4 py-4 my-4 md:flex-row shadow-w1 ">
                                <div class="flex-none w-full p-4 md:w-28">
                                    <img class="object-cover w-20 h-20 mx-auto rounded-full"
                                        src="//images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80" />
                                </div>
                                <div class="w-full md:flex-grow">
                                    <div class="flex justify-between pb-2 border-b">
                                        <div class="">
                                            <div class="text-lg font-semibold">Nombre de Usuario</div>
                                            <div class="text-sm">Fecha: 17/12/2020</div>
                                        </div>
                                        <div
                                            class="flex flex-col items-center justify-start mt-1 mr-6 text-xl font-bold leading-6 lg:flex-row lg:mt-0">
                                            <x-icon-star class="w-6 h-auto text-yellow-400 fill-current md:mr-2" />
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
                            <li class="flex flex-col p-4 py-4 my-4 md:flex-row shadow-w1 ">
                                <div class="flex-none w-full p-4 md:w-28">
                                    <img class="object-cover w-20 h-20 mx-auto rounded-full"
                                        src="//images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80" />
                                </div>
                                <div class="w-full md:flex-grow">
                                    <div class="flex justify-between pb-2 border-b">
                                        <div class="">
                                            <div class="text-lg font-semibold">Nombre de Usuario</div>
                                            <div class="text-sm">Fecha: 17/12/2020</div>
                                        </div>
                                        <div
                                            class="flex flex-col items-center justify-start mt-1 mr-6 text-xl font-bold leading-6 lg:flex-row lg:mt-0">
                                            <x-icon-star class="w-6 h-auto text-yellow-400 fill-current md:mr-2" />
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
                            <li class="flex flex-col p-4 py-4 my-4 md:flex-row shadow-w1 ">
                                <div class="flex-none w-full p-4 md:w-28">
                                    <img class="object-cover w-20 h-20 mx-auto rounded-full"
                                        src="//images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80" />
                                </div>
                                <div class="w-full md:flex-grow">
                                    <div class="flex justify-between pb-2 border-b">
                                        <div class="">
                                            <div class="text-lg font-semibold">Nombre de Usuario</div>
                                            <div class="text-sm">Fecha: 17/12/2020</div>
                                        </div>
                                        <div
                                            class="flex flex-col items-center justify-start mt-1 mr-6 text-xl font-bold leading-6 lg:flex-row lg:mt-0">
                                            <x-icon-star class="w-6 h-auto text-yellow-400 fill-current md:mr-2" />
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
                <section class="pt-12 mt-12 border-t">
                    <h1 class="mb-8 text-xl font-semibold">Aspectos legales</h1>

                    <div class="flex">
                        <div class="w-1/2">
                            <h2 class="mb-2 font-semibold">Políticas de Devolución</h2>
                            <p class="pr-4 text-sm font-light text-gray-700 h-28">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias unde expedita deleniti
                                porro mollitia labore libero harum, perspiciatis sequi optio quibusdam dolor delectus
                                distinctio ad. Obcaecati ex atque autem doloremque?
                            </p>
                            <a href="" class="flex items-center text-sm text-blue-600 leading-1">
                                <span>Saber más</span>
                                <x-icon-chevron-forward class="w-4 h-auto mt-1" />
                            </a>
                        </div>
                        <div class="w-1/2">
                            <h2 class="mb-2 font-semibold">Políticas de Devolución</h2>
                            <p class="pr-4 text-sm font-light text-gray-700 h-28">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias unde expedita deleniti
                                porro mollitia labore libero harum, distinctio ad. Obcaecati ex atque autem doloremque?
                            </p>
                            <a href="" class="flex items-center text-sm text-blue-600 leading-1">
                                <span>Saber más</span>
                                <x-icon-chevron-forward class="w-4 h-auto mt-1" />
                            </a>
                        </div>

                    </div>
                </section>

            </div>
        </div>

        {{--Panel Derecho--}}
        <div class="w-full min-h-screen pt-8 lg:w-2/6 md:px-12">
            <div class="w-full h-full space-y-4">

                {{-- Seleccion de Microservicios --}}
                <livewire:microservices />

                {{-- Horario --}}
                <section class="px-8 py-4 bg-gray-200 rounded-md">
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
                <section class="px-8 py-4 bg-gray-200 rounded-md">
                    <div class="flex justify-between pb-4">
                        <div class="flex flex-col justify-end h-16">
                            <span class="text-gray-600 ">Anfitrion</span>
                            <h3 class="text-xl font-semibold">User Fullname</h3>
                        </div>
                        <div class="w-16 h-16 bg-gray-400 border-4 border-gray-500 rounded-full"></div>
                    </div>
                    <hr>
                    <div class="my-4">
                        <span class="text-gray-600 text-md">¿Tienes dudas?</span>
                        <h4 class="text-md">Contacta con el anfitrión</h4>
                        <form action="" class="flex flex-col gap-4 my-4 ">
                            <input type="text" class="py-4 rounded">
                            <textarea class="min-w-full p-4 text-gray-600 border border-gray-300 rounded" name="" id="" cols="30"
                                rows="10"></textarea>
                            <button class="block px-6 py-3 mx-auto mt-4 text-sm font-semibold text-white rounded bg-primary">
                                Enviar
                            </button>
                        </form>
                    </div>
                </section>

                {{-- Redes Socailes y Meg Gusta --}}
                <div class="px-4 py-8 mt-8 bg-transparent rounded-md">
                    <x-button-icon icon="heart"
                        class="justify-center w-full py-4 rounded-full text-danger hover:text-white hover:bg-danger border-danger">
                        Agregar a Favoritos
                    </x-button-icon>
                    <div class="my-4 text-center">O comparte en redes sociales</div>
                    <div class="flex justify-center">
                        <x-button-icon icon="logo-facebook"
                            class="justify-center px-4 text-sm leading-5 border rounded-full bg-facebook">Share
                        </x-button-icon>
                        <x-button-icon icon="logo-instagram"
                            class="justify-center px-4 mx-2 text-sm leading-5 border rounded-full bg-instagram">Share
                        </x-button-icon>
                        <x-button-icon icon="logo-twitter"
                            class="justify-center px-4 text-sm leading-5 border rounded-full bg-twitter">Share
                        </x-button-icon>
                    </div>

                </div>

            </div>
        </div>

    </div>

    {{--Sugerencias--}}
    <div class="w-full px-8 my-8">

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
            <h1 class="mr-4 text-2xl font-semibold ">Service Name</h1>
            <span class="px-4 py-1 border border-solid rounded-full text-md text-primary border-primary">Services</span>
        </div>
        <h2 class="my-2 text-gray-400">Location's Service, Experience</h2>
        <div class="flex align-center">
            <x-star-rating class="my-auto text-xl text-yellow-300" :rating="'4.5'" />
            <span class="ml-4 text-gray-400">(1 reseña)</span>
        </div>
    </div>

    <nav class="bg-primary">
        <ul class="flex justify-around py-4 text-sm font-semibold text-white">
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
            <li class="flex justify-start ">
                <div class="flex">
                    <span class="inline-block w-4 h-4 my-auto mr-4 rounded bg-primary">&nbsp</span>
                    Descripción
                </div>
                <div class="flex ml-8">
                    <span class="inline-block w-4 h-4 my-auto mr-4 rounded bg-primary">&nbsp</span>
                    Descripción
                </div>
            </li>
            <li class="flex">
                <span class="inline-block w-4 h-4 my-auto mr-4 rounded bg-primary">&nbsp</span> Descripción
            </li>
            <li class="flex">
                <span class="inline-block w-4 h-4 my-auto mr-4 rounded bg-primary">&nbsp</span> Descripción
            </li>
            <li class="flex">
                <span class="inline-block w-4 h-4 my-auto mr-4 rounded bg-primary">&nbsp</span> Descripción
            </li>
        </ul>
    </section>

    <section id="#additionals" title="Servicios adicionales" class="my-8">
        <h3 class="pb-4 mx-4 text-xl font-semibold border-b border-gray-400">Servicios Adicionales</h3>

        <ul class="flex flex-col">
            <li class="flex p-4">
                <div class="w-2/3">
                    <h4 class="font-semibold">Microservices Name 1</h4>
                    <p class="text-sm text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing
                        elit.
                        Iste impedit at similique in vel harum.</p>
                </div>
                <div class="self-center w-1/3 text-gray-600">
                    <span>$ 15.000,00</span>
                </div>
            </li>
            <li class="flex p-4 bg-red-100">
                <div class="w-2/3">
                    <h4 class="font-semibold">Microservices Name 1</h4>
                    <p class="text-sm text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing
                        elit.
                        Iste impedit at similique in vel harum.</p>
                </div>
                <div class="self-center w-1/3 text-gray-600">
                    <span>$ 15.000,00</span>
                </div>
            </li>
            <li class="flex p-4">
                <div class="w-2/3">
                    <h4 class="font-semibold">Microservices Name 1</h4>
                    <p class="text-sm text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing
                        elit.
                        Iste impedit at similique in vel harum.</p>
                </div>
                <div class="self-center w-1/3 text-gray-600">
                    <span>$ 15.000,00</span>
                </div>
            </li>
        </ul>
        <button class="block px-6 py-1 mx-auto text-sm font-semibold bg-gray-200 rounded-full">
            Mostrar todos
            <span class="ml-2 text-lg text-primary">></span>
        </button>
    </section>

    <section id="#additionals" title="Servicios adicionales" class="my-8">
        <h3 class="pb-4 mx-4 text-xl font-semibold border-b border-gray-400">Reviews<span>(2)</span></h3>

        <div class="py-8 m-4 text-center border border-gray-400 rounded">
            <p class="text-gray-600">Rating:</p>
            <h4 class="text-3xl font-bold text-gray-700">4.5 <span class="text-lg font-normal">de 5</span>
            </h4>
            <x-star-rating class="justify-center mx-auto text-xl text-yellow-300 w-36" :rating="'4.5'" />

        </div>
        <ul>
            <li class="px-4 mb-8">
                <h5 class="font-semibold">User Name</h5>
                <span class="block mb-2 text-sm text-gray-500">Octubre 29, 2020 - 12:28 pm</span>
                <x-star-rating class="text-yellow-300" :rating="'4.5'" />
                <p class="mt-3 text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing
                    elit.
                    Ipsa
                    fugit iure iusto natus nostrum
                    accusamus vitae alias. Soluta tempore consequatur dolorem laborum at cum veniam
                    necessitatibus,
                    amet natus. Sequi, dolores.</p>
            </li>
            <li class="px-4">
                <h5 class="font-semibold">User Name</h5>
                <span class="block mb-2 text-sm text-gray-500">Octubre 29, 2020 - 12:28 pm</span>
                <x-star-rating class="text-yellow-300" :rating="'4.5'" />
                <p class="mt-3 text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing
                    elit.
                    Ipsa
                    fugit iure iusto
                    natus nostrum
                    accusamus vitae alias. Soluta tempore consequatur dolorem laborum at cum veniam
                    necessitatibus,
                    amet natus. Sequi, dolores.</p>
            </li>
        </ul>
        <button class="block px-6 py-1 mx-auto mt-4 text-sm font-semibold bg-gray-200 rounded-full">
            Mostrar todos
            <span class="ml-2 text-lg text-primary">></span>
        </button>
    </section>

    <section id="#additionals" title="Servicios adicionales" class="my-8">
        <h3 class="pb-4 mx-4 text-xl font-semibold border-b border-gray-400">
            Agrega una reseña
        </h3>
        <p class="p-4 text-sm font-normal text-gray-500">Lorem, ipsum dolor sit adipisicing elit. Eos, in
            ab!
            Quaerat mollitia minima reprehenderit?</p>
        <form action="" class="p-4">
            <textarea class="min-w-full p-4 text-gray-600 border border-gray-300 rounded" name="" id="" cols="30"
                rows="10"></textarea>
            <button class="block px-6 py-3 mx-auto mt-4 text-sm font-semibold text-white rounded bg-primary">
                Enviar Reseña
            </button>
        </form>
    </section>

</main>

<aside>
    <div class="py-4 mx-4 font-bold text-center text-white bg-green-600 rounded">Usuario Verificado</div>

    <section class="p-4 m-4 bg-gray-200 rounded">
        <h3 class="pb-4 text-xl font-semibold border-b border-gray-400">Contratar/Reservar</h3>
        <hr>
        <form action="" class="flex flex-col gap-4 my-4 ">
            <input type="text" class="py-4 rounded">
            <select class="py-4 rounded" name="" id="">
                <option value="">Choose Option </option>
                <option value="">Option 1 </option>
                <option value="">Option 3 </option>
            </select>
            <input class="py-4 rounded" type="date">
            <button class="py-4 font-semibold text-white rounded bg-primary">Contratar</button>
        </form>
    </section>

    <section class="p-4 m-4 bg-gray-200 rounded">
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

    <section class="p-4 m-4 bg-gray-200 rounded">
        <div class="flex justify-between pb-4">
            <div class="flex flex-col justify-end h-16">
                <span class="text-gray-600 ">Anfitrion</span>
                <h3 class="text-xl font-semibold">User Fullname</h3>
            </div>
            <div class="w-16 h-16 bg-gray-400 border-4 border-gray-500 rounded-full"></div>
        </div>
        <hr>
        <div class="my-4">
            <span class="text-gray-600 text-md">¿Tienes dudas?</span>
            <h4 class="text-md">Contacta con el anfitrión</h4>
            <form action="" class="flex flex-col gap-4 my-4 ">
                <input type="text" class="py-4 rounded">
                <textarea class="min-w-full p-4 text-gray-600 border border-gray-300 rounded" name="" id="" cols="30"
                    rows="10"></textarea>
                <button class="block px-6 py-3 mx-auto mt-4 text-sm font-semibold text-white rounded bg-primary">
                    Enviar
                </button>
            </form>
        </div>
    </section>

    <button class="block px-8 py-2 mx-auto mt-8 border rounded-full border-primary text-primary">AGREGAR A
        FAVORITOS</button>
    <p class="my-2 text-center text-gray-600">o comparte en redes sociales</p>
    <ul class="flex justify-center mt-4">
        <li><a href="" class="block px-4 py-1 mx-2 text-sm text-blue-600 border border-blue-600 rounded-full">Red
                social</a></li>
        <li><a href="" class="block px-4 py-1 mx-2 text-sm text-red-600 border border-red-600 rounded-full">Red
                social</a></li>
        <li><a href="" class="block px-4 py-1 mx-2 text-sm text-teal-800 border border-teal-800 rounded-full">Red
                social</a></li>
    </ul>
</aside>
    --}}
