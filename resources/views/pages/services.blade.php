<x-guest-layout>
    @section('navtop')
        <div class="h-20 bg-white"> &nbps </div>

        <x-gallery-banner :photos="$product->photos" />

        {{-- Fixed bottom bar --}}
        <div class="fixed inset-x-0 bottom-0 z-40 px-4 py-2 bg-white border-t border-gray-200 shadow md:hidden">
            <div class="flex items-center justify-between w-full">
                <div>
                    <p class="mb-1 text-sm text-gray-400">Reviews (52)</p>
                    <div class="flex space-x-1">
                        <x-icon-star class="w-4 h-auto text-yellow-400 fill-current" />
                        <x-icon-star class="w-4 h-auto text-yellow-400 fill-current" />
                        <x-icon-star class="w-4 h-auto text-yellow-400 fill-current" />
                        <x-icon-star class="w-4 h-auto text-yellow-400 fill-current" />
                        <x-icon-star class="w-4 h-auto text-gray-200 fill-current" />
                    </div>
                </div>
                <div>
                    <x-ui::button class="text-white bg-primary">Book Now</x-ui::button>
                </div>
            </div>
        </div>

        <div class="flex flex-col py-6 bg-white border-b lg:flex-row">
            <div class="w-full min-h-screen p-6 lg:w-4/6 md:p-12">
                <div class="w-full h-full bg-white">

                    {{-- Badges --}}
                    <div class="mb-4">
                        <div class="flex gap-2 mb-4">
                            <span
                                class="inline-flex justify-center w-32 px-6 py-1 text-sm font-light text-red-500 bg-red-100 rounded-full">
                                {{ __('Services') }}
                            </span>
                            <span
                                class="inline-flex items-center justify-start w-32 gap-2 p-1 text-sm font-light text-green-500 bg-green-100 rounded-full">
                                <span class="w-5 h-5 p-1 bg-green-500 rounded-full">
                                    <x-icon-money-bag class="w-full h-full text-white" />
                                </span>
                                <span> ${{ number_format($product->price, 2, ',', '.') }}</span>
                            </span>
                        </div>

                        <h1 class="pr-6 mt-6 mb-2 text-2xl font-semibold">
                            {{ $product->name }}
                        </h1>

                        {{-- Ubicacion --}}
                        <div class="flex mb-4 text-[#8e8e8e] items-end space-x-1">
                            <x-icon-location class="w-5 h-auto" />
                            <p class="font-extralight">
                                {{ "{$product->city->name}, {$product->state->name}" }}
                            </p>
                        </div>

                        {{-- Verificacion de Usuario --}}
                        {{-- <div class="flex flex-col items-center justify-start">
                            <x-icon-shield-checkmark class="w-12 h-auto text-success" />
                            <span class="text-sm font-bold">Verificado</span>
                        </div> --}}
                    </div>

                    {{-- Reseñas --}}
                    <div class="flex flex-initial px-4 py-1 mb-8 space-x-4 bg-gray-100 rounded-full lg:justify-start">
                        <div class="flex items-center">
                            <x-icon-star class="w-4 h-auto text-yellow-400 fill-current" />
                            <x-icon-star class="w-4 h-auto text-yellow-400 fill-current" />
                            <x-icon-star class="w-4 h-auto text-yellow-400 fill-current" />
                            <x-icon-star class="w-4 h-auto text-yellow-400 fill-current" />
                            <x-icon-star class="w-4 h-auto text-gray-400 fill-current" />
                        </div>
                        <div class="text-sm">
                            <span class="font-bold">{{ rand(1, 4) }}.{{ rand(0, 9) }}</span>
                            <span class="text-gray-400 ">({{ rand(0, 250) }} reviews)</span>
                        </div>
                    </div>

                    {{-- NavBar --}}
                    <nav class="sticky top-0 left-0 w-full mb-8 bg-gray-100 lg:rounded">
                        <ul class="flex justify-around py-4 text-sm font-semibold text-gray-400">
                            <li><a href="#description" class="hover:text-primary-light">Descripción</a></li>
                            <li><a href="#features" class="hover:text-primary-light">Características</a></li>
                            <li><a href="#additionals" class="hover:text-primary-light">Adicionles</a></li>
                            <li><a href="#reviews" class="hover:text-primary-light">Reseñas</a></li>
                        </ul>
                    </nav>

                    {{-- Descripcion --}}
                    <section class="mb-12">
                        <p class="leading-relaxed text-gray-400 font-extralight ">
                            {{ $product->description }}
                        </p>
                    </section>

                    {{-- Microservicios --}}
                    <section id="additionals" title="Servicios adicionales" class="mb-12">
                        <h3 class="pb-4 text-xl font-semibold border-b border-gray-400">Servicios Adicionales</h3>
                        <ul class="flex flex-col">
                            @foreach ($product->microservices as $microservice)

                                <li class="flex px-8 py-4">
                                    <div class="w-3/4 ">
                                        <h4 class="font-semibold">{{ $microservice->name }}</h4>
                                        <p class="pr-8 text-sm text-gray-600">{{ $microservice->description }}</p>
                                    </div>
                                    <div class="self-start w-1/4 font-medium text-right text-gray-800 ">
                                        <span>$ {{ number_format($microservice->price, 2, ',', '.') }}</span>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                        <button
                            class="flex items-center justify-between px-6 py-2 mx-auto mt-8 text-sm font-semibold bg-gray-200 rounded-full">
                            <span>Mostrar todos</span>
                            <x-icon-chevron-forward class="w-auto h-full text-primary max-h-5" />
                        </button>
                    </section>

                    {{-- Reseñas --}}
                    <section class="mb-8">
                        <h3 class="pb-4 text-xl font-semibold border-b border-gray-400">Reseñas</h3>

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
                                        <span>{{ rand(1, 4) }}.{{ rand(0, 9) }}</span>
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
                                        <span>{{ rand(1, 4) }}.{{ rand(0, 9) }}</span>
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
                            <x-ui::button
                                class="px-8 py-1 mx-auto text-center border border-transparent rounded-full cursor-pointer text-primary active:outline-none hover:border-primary transition-500"
                                onclick="document.getElementById('modal').classList.remove('hidden','opacity-0')">Ver Todas
                                </x-ui::-button>
                        </div>

                        {{-- Modal de Comentarios --}}
                        <x-ui::modal button="Cerrar" class="w-full">
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
                                                {{ rand(1, 4) }}.{{ rand(0, 9) }}
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
                                                {{ rand(1, 4) }}.{{ rand(0, 9) }}
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
                                                {{ rand(1, 4) }}.{{ rand(0, 9) }}
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
                                                {{ rand(1, 4) }}.{{ rand(0, 9) }}
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
                        </x-ui::modal>

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

            {{-- Panel Derecho --}}
            <div class="w-full min-h-screen pt-8 lg:w-2/6 md:px-12">
                <div class="w-full h-full space-y-4">

                    {{-- Seleccion de Microservicios --}}
                    <livewire:microservices :service="$product" />

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
                                <textarea class="min-w-full p-4 text-gray-600 border border-gray-300 rounded" name="" id=""
                                    cols="30" rows="10"></textarea>
                                <button
                                    class="block px-6 py-3 mx-auto mt-4 text-sm font-semibold text-white rounded bg-primary">
                                    Enviar
                                </button>
                            </form>
                        </div>
                    </section>

                    {{-- Redes Socailes y Meg Gusta --}}
                    <div class="px-4 py-8 mt-8 bg-transparent rounded-md">
                        <x-ui::button-icon icon="heart"
                            class="justify-center w-full py-4 rounded-full text-danger hover:text-white hover:bg-danger border-danger">
                            Agregar a Favoritos
                            </x-ui::-button-icon>
                            <div class="my-4 text-center">O comparte en redes sociales</div>
                            <div class="flex justify-center">
                                <x-ui::button-icon icon="logo-facebook"
                                    class="justify-center px-4 text-sm leading-5 border rounded-full bg-facebook">Share
                                    </x-ui::-button-icon>
                                    <x-ui::button-icon icon="logo-instagram"
                                        class="justify-center px-4 mx-2 text-sm leading-5 border rounded-full bg-instagram">
                                        Share
                                        </x-ui::-button-icon>
                                        <x-ui::button-icon icon="logo-twitter"
                                            class="justify-center px-4 text-sm leading-5 border rounded-full bg-twitter">
                                            Share
                                            </x-ui::-button-icon>
                            </div>

                    </div>

                </div>
            </div>

        </div>
    </x-guest-layout>
