<x-guest-layout>

    {{-- Imagenes --}}
    <div class="min-w-screen bg-secondary">
        <div class="flex overflow-x-hidden bg-yellow-300 h-96">
            <div class="w-screen lg:-ml-48 lg:w-4/12 ">
                <img src="{{ Storage::url($product->photos[0]) }}" class="object-cover w-full h-full" alt="" />
            </div>
            <div class="hidden lg:inline-flex lg:w-4/12 ">
                <img src="{{ Storage::url($product->photos[1]) }}" class="object-cover w-full h-full" alt="" />
            </div>
            <div class="hidden lg:inline-flex lg:w-4/12 ">
                <img src="{{ Storage::url($product->photos[2]) }}" class="object-cover w-full h-full" alt="" />
            </div>
            <div class="hidden lg:inline-flex lg:-mr-48 lg:w-4/12 ">
                <img src="{{ Storage::url($product->photos[3]) }}" class="object-cover w-full h-full" alt="" />
            </div>
        </div>
    </div>

    {{-- body --}}
    <div class="flex flex-col pb-8 bg-white border-b lg:flex-row">

        {{-- Panel Izquierdo --}}
        <div class="w-full p-4 lg:w-3/5 md:p-12">
            <div class="w-full h-full bg-white">

                {{-- Contenedor Titulo, Ubicacion y Verificacion --}}
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
                    </div> --}}

                </div>


                {{-- Reseñas --}}
                <div class="flex items-center justify-between mb-2 lg:justify-start">
                    <span class="flex items-center mr-6 text-xl font-bold leading-6">
                        <x-icon-star class="w-6 h-auto mr-2 text-yellow-400 fill-current" />
                        {{ rand(1, 4) }}.{{ rand(0, 9) }}
                    </span>
                    <span class="text-gray-600">({{ rand(0, 250) }} reviews)</span>
                </div>

                {{-- Resumen --}}
                <div class="flex flex-wrap">
                    <div class="flex flex-col items-center justify-center w-1/2 p-4 border border-gray-300 md:w-1/4">
                        <x-icon-time class="w-6 h-auto" />
                        <span class="my-2">Duración</span>
                        <span class="font-semibold">{{ $product->durationString ?? '1h 30min' }}</span>
                    </div>
                    <div class="flex flex-col items-center justify-center w-1/2 p-4 border border-gray-300 md:w-1/4">
                        <x-icon-speedometer class="w-6 h-auto" />
                        <span class="my-2">Nivel</span>
                        <span class="font-semibold">{{ $product->activityLevel ?? 'Principiante' }}</span>
                    </div>
                    <div class="flex flex-col items-center justify-center w-1/2 p-4 border border-gray-300 md:w-1/4">
                        <x-icon-pricetag class="w-6 h-auto" />
                        <span class="my-2">Precio</span>
                        <span class="font-semibold">$ {{ $product->price ?? '2.500,00' }}</span>
                    </div>
                    <div class="flex flex-col items-center justify-center w-1/2 p-4 border border-gray-300 md:w-1/4">
                        <x-icon-people-circle class="w-6 h-auto" />
                        <span class="my-2">Grupos</span>
                        <span class="font-semibold">{{ $product->groupSize ?? rand(1, 15) }} personas</span>
                    </div>
                </div>

                {{-- Descripcion --}}
                <section class="mt-12">
                    <h1 class="mb-8 text-xl font-semibold">
                        Acerca de lo que harás
                    </h1>
                    <p>
                        {{ $product->description }}
                    </p>
                </section>

                {{-- Inclusiones --}}
                <section class="flex flex-wrap justify-between pt-12 mt-12 border-t">
                    <h1 class="w-full mb-8 text-xl font-semibold md:w-2/5">Incluido en la actividad</h1>
                    <div class="w-full md:w-3/5">
                        <div class="flex items-start mb-4">
                            <div>
                                <x-icon-checkmark-circle class="w-6 h-6 mr-2 text-primary" />
                            </div>
                            <span>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Est dolor sint voluptates
                                aperiam.
                            </span>
                        </div>
                        <div class="flex items-start mb-4">
                            <div>
                                <x-icon-checkmark-circle class="w-6 h-6 mr-2 text-primary" />
                            </div>
                            <span>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Est dolor sint voluptates
                                aperiam.
                            </span>
                        </div>
                        <div class="flex items-start mb-4">
                            <div>
                                <x-icon-checkmark-circle class="w-6 h-6 mr-2 text-primary" />
                            </div>
                            <span>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Est dolor sint voluptates
                                aperiam.
                            </span>
                        </div>
                        <div class="flex items-start mb-4">
                            <div>
                                <x-icon-checkmark-circle class="w-6 h-6 mr-2 text-primary" />
                            </div>
                            <span>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Est dolor sint voluptates
                                aperiam.
                            </span>
                        </div>
                        <div class="flex items-start mb-4">
                            <div>
                                <x-icon-checkmark-circle class="w-6 h-6 mr-2 text-primary" />
                            </div>
                            <span>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Est dolor sint voluptates
                                aperiam.
                            </span>
                        </div>

                    </div>
                </section>

                {{-- Requerimientos --}}
                <section class="flex flex-wrap justify-between pt-12 mt-12 border-t">
                    <h1 class="mb-8 text-xl font-semibold md:w-2/5">
                        Que necesitas
                    </h1>
                    <div class="md:w-3/5">
                        <div class="flex items-start mb-4">
                            <div>
                                <x-icon-chevron-forward-circle class="w-6 h-6 mr-2 text-primary" />
                            </div>
                            <span>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Est dolor sint voluptates
                                aperiam.
                            </span>
                        </div>
                        <div class="flex items-start mb-4">
                            <div>
                                <x-icon-chevron-forward-circle class="w-6 h-6 mr-2 text-primary" />
                            </div>
                            <span>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Est dolor sint voluptates
                                aperiam.
                            </span>
                        </div>
                        <div class="flex items-start mb-4">
                            <div>
                                <x-icon-chevron-forward-circle class="w-6 h-6 mr-2 text-primary" />
                            </div>
                            <span>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Est dolor sint voluptates
                                aperiam.
                            </span>
                        </div>
                        <div class="flex items-start mb-4">
                            <div>
                                <x-icon-chevron-forward-circle class="w-6 h-6 mr-2 text-primary" />
                            </div>
                            <span>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Est dolor sint voluptates
                                aperiam.
                            </span>
                        </div>
                        <div class="flex items-start mb-4">
                            <div>
                                <x-icon-chevron-forward-circle class="w-6 h-6 mr-2 text-primary" />
                            </div>
                            <span>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Est dolor sint voluptates
                                aperiam.
                            </span>
                        </div>

                    </div>
                </section>

                {{-- Requerimientos --}}
                <section class="flex flex-wrap justify-between pt-12 mt-12 border-t">
                    <h1 class="mb-8 text-xl font-semibold md:w-2/5">
                        Calificaciones y Reviews
                    </h1>
                    <div class="md:w-3/5">
                        <div class="flex-grow">
                            <div class="flex items-center justify-start py-4 border-b">
                                <div class="flex-none w-full p-4 md:w-28">
                                    <img class="object-cover w-32 h-32 mx-auto rounded-full md:w-16 md:h-16"
                                        src="//images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80" />
                                </div>
                                <div>
                                    <div class="text-lg font-semibold">Nombre de Usuario</div>
                                    <div class="text-sm">Fecha: 17/12/2020</div>
                                    <div class="flex items-center mr-6 text-xl font-bold leading-6">
                                        <x-icon-star class="w-6 h-auto mr-2 text-yellow-400 fill-current" />
                                        {{ rand(1, 4) }}.{{ rand(0, 9) }}
                                    </div>
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
                </section>

                {{-- Reseñas --}}
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
                                    <span>{{ rand(1, 4) }}.{{ rand(0, 9) }}</span>
                                </div>

                            </div>
                            <div class="py-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. In eaque, quae libero
                                aspernaturx-modal
                                x-modalamus. Commodi minima at quis ullam, autem
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
                        </x-ui::button>
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
                    <h1 class="mb-8 text-xl font-semibold">
                        Aspectos legales
                    </h1>

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
        <div class="w-full lg:w-2/5 md:px-12">
            <div class="sticky left-0 w-full h-auto top-24">

                {{-- Reservaciones --}}
                <div class="py-8 mt-8 bg-gray-200 rounded-md">
                    <h1
                        class="flex items-center justify-center p-4 text-xl font-bold border-b text-secondary leading-1">
                        <x-icon-calendar class="w-8 h-auto mr-2 " />
                        <span>Reservaciones</span>
                    </h1>

                    <form action="" class="p-4 px-8">
                        <label for="">Fecha</label>
                        <x-ui::input type="date" key="date" class="w-full" />

                        <label for="">Hora</label>
                        <x-ui::input type="time" key="time" placeholder="Horario" class="w-full" />

                        <label for="">Personas</label>
                        <x-ui::input type="number" key="groupSize" placeholder="Min 1 - Max 15" min="1" max="15"
                            class="w-full appearance-none" />
                        <x-ui::button type="submit" class="justify-center w-full py-4 mt-4 bg-primary">Reservar
                        </x-ui::button>
                    </form>
                </div>

                {{-- Proximas Actividades --}}
                <div class="py-8 mt-8 bg-gray-200 rounded-md">
                    <h1
                        class="flex items-center justify-center p-4 text-xl font-bold border-b text-secondary leading-1">
                        <x-icon-calendar class="w-8 h-auto mr-2 " />
                        <span>Próximos eventos</span>
                    </h1>

                    <table class="w-full my-4 text-center">
                        <tr class="px-4 text-left">
                            <th class="pl-9">Fecha</th>
                            <th class="pl-3">Hora</th>
                            <th class="text-center">Disponibilidad</th>
                        </tr>
                        <tr class="h-10 text-sm">
                            <td>Vie - 17/12/2020</td>
                            <td>7:00pm</td>
                            <td>Disponible</td>
                        </tr>
                        <tr class="h-10 text-sm">
                            <td>Vie - 18/12/2020</td>
                            <td>8:00am</td>
                            <td>Disponible</td>
                        </tr>
                        <tr class="h-10 text-sm">
                            <td>Vie - 18/12/2020</td>
                            <td>1:00pm</td>
                            <td>Agotado</td>
                        </tr>
                        <tr class="h-10 text-sm">
                            <td>Vie - 18/12/2020</td>
                            <td>7:00pm</td>
                            <td>Disponible</td>
                        </tr>
                    </table>

                </div>

                {{-- Contacto Afitrion --}}
                <div class="py-8 mt-8 bg-gray-200 rounded-md">
                    <div class="flex pb-4 border-b">
                        <div class="w-3/4 px-8">
                            <div class="mb-2">Anfitrion</div>
                            <div class="text-xl font-bold">{{ $product->user->name }}</div>
                        </div>
                        <div class="w-1/4">
                            <img class="object-cover w-16 h-16 rounded-full"
                                src="//images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80"
                                alt="Avatar of Tailwind CSS Design" />
                        </div>

                    </div>


                    <form action="" class="p-4">
                        <x-ui::input key="subject" placeholder="Asunto" />
                        <x-ui::text-area key="date" rows=10 placeholder="Introduce tu mensaje" />
                        <x-ui::button type="submit" class="justify-center w-full py-4 mt-4 text-xl bg-info">
                            Enviar
                            <x-icon-send class="w-4 h-auto ml-4 transform " />
                        </x-ui::button>
                    </form>
                </div>

                {{-- Contacto Afitrion --}}
                <div class="px-4 py-8 mt-8 bg-transparent rounded-md">
                    <x-ui::button-icon icon="heart"
                        class="justify-center w-full py-4 rounded-full text-danger hover:text-white hover:bg-danger border-danger">
                        Agregar a Favoritos
                    </x-ui::button-icon>
                    <div class="my-4 text-center">O comparte en redes sociales</div>
                    <div class="flex justify-center">
                        <x-ui::button-icon icon="logo-facebook"
                            class="justify-center px-4 text-sm leading-5 border rounded-full bg-facebook">Share
                        </x-ui::button-icon>
                        <x-ui::button-icon icon="logo-instagram"
                            class="justify-center px-4 mx-2 text-sm leading-5 border rounded-full bg-instagram">Share
                        </x-ui::button-icon>
                        <x-ui::button-icon icon="logo-twitter"
                            class="justify-center px-4 text-sm leading-5 border rounded-full bg-twitter">Share
                        </x-ui::button-icon>
                    </div>

                </div>

            </div>
        </div>

    </div>

    {{-- Sugerencias --}}
    <div class="w-full">
        <x-embla-carousel id="expeCarousel" :items="App\Models\Experience::all()" :type="'experiencias'"
            :cardType="'V05'" />
    </div>

</x-guest-layout>
