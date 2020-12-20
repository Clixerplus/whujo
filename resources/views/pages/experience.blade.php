<x-app-nonav-layout>

    {{-- Imagenes --}}
    <div class="min-w-screen bg-secondary">
        <div class="flex overflow-x-hidden bg-yellow-300 h-96">
            <div class="w-screen lg:-ml-48 lg:w-4/12  ">
                <img src="https://images.pexels.com/photos/2408666/pexels-photo-2408666.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;w=500"
                    class="object-cover w-full h-full" alt="" />
            </div>
            <div class="hidden lg:inline-flex lg:w-4/12 ">
                <img src="https://images.pexels.com/photos/2408666/pexels-photo-2408666.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;w=500"
                    class="object-cover w-full h-full" alt="" />
            </div>
            <div class="hidden lg:inline-flex lg:w-4/12 ">
                <img src="https://images.pexels.com/photos/2408666/pexels-photo-2408666.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;w=500"
                    class="object-cover w-full h-full" alt="" />
            </div>
            <div class="hidden lg:inline-flex lg:-mr-48 lg:w-4/12 ">
                <img src="https://images.pexels.com/photos/2408666/pexels-photo-2408666.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;w=500"
                    class="object-cover w-full h-full" alt="" />
            </div>
        </div>
    </div>

    {{-- body --}}
    <div class="flex flex-col lg:flex-row bg-white border-b pb-8">

        {{--Panel Izquierdo--}}
        <div class="w-full lg:w-3/5 min-h-screen p-4 md:p-12">
            <div class="w-full h-full bg-white">

                {{--Contenedor Titulo, Ubicacion y Verificacion--}}
                <div class="mb-4">
                    {{-- Titulo --}}
                    <h1 class="leading-7 pr-6 font-bold text-2xl mb-2">
                        {{ $model->name ?? 'Lorem ipsum dolor sit amet consectetur' }}
                    </h1>

                    {{-- Ubicacion --}}
                    <h2 class="flex leading-2 text-sm pr-6 text-gray-400 mb-8">
                        <x-icon-location class="w-4 h-auto text-gray-400" />
                        Ubicacion ({{ $model->city ?? 'Ciudad de Ubicacion'}})
                    </h2>
                    {{-- Verificacion de Usuario--}}
                    <div class="flex flex-col items-center justify-start">
                        <x-icon-shield-checkmark class="w-12 h-auto text-success" />
                        <span class="font-bold text-sm">Verificado</span>
                    </div>
                </div>


                {{-- Reseñas --}}
                <div class="flex justify-between lg:justify-start items-center mb-2">
                    <span class="flex items-center font-bold leading-6 text-xl mr-6">
                        <x-icon-star class="text-yellow-400 fill-current h-auto w-6 mr-2" />
                        {{ rand(1,4)}}.{{ rand(0,9)}}
                    </span>
                    <span class="text-gray-600">({{ rand(0,250) }} reviews)</span>
                </div>

                {{-- Resumen --}}
                <div class="flex flex-wrap">
                    <div class="w-1/2 md:w-1/4 flex flex-col justify-center items-center p-4 border border-gray-300">
                        <x-icon-time class="w-6 h-auto" />
                        <span class="my-2">Duración</span>
                        <span class="font-semibold">{{ $model->durationString ?? '1h 30min'}}</span>
                    </div>
                    <div class="w-1/2 md:w-1/4 flex flex-col justify-center items-center p-4 border border-gray-300">
                        <x-icon-speedometer class="w-6 h-auto" />
                        <span class="my-2">Nivel</span>
                        <span class="font-semibold">{{ $model->activityLevel ?? 'Principiante'}}</span>
                    </div>
                    <div class="w-1/2 md:w-1/4 flex flex-col justify-center items-center p-4 border border-gray-300">
                        <x-icon-pricetag class="w-6 h-auto" />
                        <span class="my-2">Precio</span>
                        <span class="font-semibold">$ {{ $model->price ?? '2.500,00'}}</span>
                    </div>
                    <div class="w-1/2 md:w-1/4 flex flex-col justify-center items-center p-4 border border-gray-300">
                        <x-icon-people-circle class="w-6 h-auto" />
                        <span class="my-2">Grupos</span>
                        <span class="font-semibold">{{ $model->groupSize ?? rand(1,15) }} personas</span>
                    </div>
                </div>

                {{-- Descripcion --}}
                <section class="mt-12">
                    <h1 class="font-semibold text-xl mb-8">Acerca de lo que harás</h1>
                    <p>
                        {{ $model->toDo ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, dolorem facere eaque
                                            necessitatibus repellendus saepe, consequuntur suscipit nam veniam perspiciatis itaque! Eius
                                            nesciunt exercitationem quibusdam, aliquam rem sint alias culpa itaque doloribus fugiat? Cum ex
                                            tempore, amet accusamus natus nesciunt odio in aut quidem magnam eligendi est, aperiam ipsam
                                            dolorem esse doloribus nobis assumenda. Corrupti id dicta, quos beatae veritatis nisi officiis
                                            veniam eligendi? Dolor, rem. Dolor saepe quod hic possimus esse dolorum tenetur odio ad error
                                            iure tempore aperiam, quaerat iusto assumenda aliquid recusandae reiciendis fugiat magni cum
                                            deleniti nesciunt similique perspiciatis! Quos sequi, similique suscipit, esse ipsam et a
                                            repellendus doloribus perferendis quo consequatur? Animi corporis consequatur omnis repellendus
                                            aperiam atque repellat eligendi mollitia iure laudantium commodi ex quisquam, officiis
                                            consequuntur provident deserunt eum, qui vitae facilis praesentium, minus tenetur saepe autem
                                            voluptas. Magnam itaque repellendus enim officiis voluptatum. Dolorum ex sapiente impedit
                                            aspernatur quod necessitatibus, veritatis totam.'}}
                    </p>
                </section>

                {{-- Inclusiones --}}
                <section class="flex flex-wrap justify-between mt-12 pt-12 border-t">
                    <h1 class="w-full md:w-2/5 font-semibold text-xl mb-8">Incluido en la actividad</h1>
                    <div class="w-full md:w-3/5">
                        <div class="flex items-start mb-4">
                            <div>
                                <x-icon-checkmark-circle class="w-6 h-6 text-primary mr-2" />
                            </div>
                            <span>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Est dolor sint voluptates
                                aperiam.
                            </span>
                        </div>
                        <div class="flex items-start mb-4">
                            <div>
                                <x-icon-checkmark-circle class="w-6 h-6 text-primary mr-2" />
                            </div>
                            <span>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Est dolor sint voluptates
                                aperiam.
                            </span>
                        </div>
                        <div class="flex items-start mb-4">
                            <div>
                                <x-icon-checkmark-circle class="w-6 h-6 text-primary mr-2" />
                            </div>
                            <span>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Est dolor sint voluptates
                                aperiam.
                            </span>
                        </div>
                        <div class="flex items-start mb-4">
                            <div>
                                <x-icon-checkmark-circle class="w-6 h-6 text-primary mr-2" />
                            </div>
                            <span>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Est dolor sint voluptates
                                aperiam.
                            </span>
                        </div>
                        <div class="flex items-start mb-4">
                            <div>
                                <x-icon-checkmark-circle class="w-6 h-6 text-primary mr-2" />
                            </div>
                            <span>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Est dolor sint voluptates
                                aperiam.
                            </span>
                        </div>

                    </div>
                </section>

                {{-- Requerimientos --}}
                <section class="flex flex-wrap  justify-between mt-12 pt-12 border-t">
                    <h1 class="md:w-2/5 font-semibold text-xl mb-8">Que necesitas</h1>
                    <div class="md:w-3/5">
                        <div class="flex items-start mb-4">
                            <div>
                                <x-icon-chevron-forward-circle class="w-6 h-6 text-primary mr-2" />
                            </div>
                            <span>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Est dolor sint voluptates
                                aperiam.
                            </span>
                        </div>
                        <div class="flex items-start mb-4">
                            <div>
                                <x-icon-chevron-forward-circle class="w-6 h-6 text-primary mr-2" />
                            </div>
                            <span>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Est dolor sint voluptates
                                aperiam.
                            </span>
                        </div>
                        <div class="flex items-start mb-4">
                            <div>
                                <x-icon-chevron-forward-circle class="w-6 h-6 text-primary mr-2" />
                            </div>
                            <span>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Est dolor sint voluptates
                                aperiam.
                            </span>
                        </div>
                        <div class="flex items-start mb-4">
                            <div>
                                <x-icon-chevron-forward-circle class="w-6 h-6 text-primary mr-2" />
                            </div>
                            <span>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Est dolor sint voluptates
                                aperiam.
                            </span>
                        </div>
                        <div class="flex items-start mb-4">
                            <div>
                                <x-icon-chevron-forward-circle class="w-6 h-6 text-primary mr-2" />
                            </div>
                            <span>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Est dolor sint voluptates
                                aperiam.
                            </span>
                        </div>

                    </div>
                </section>

                {{--Reseñas--}}
                <section class="mt-12 pt-12 border-t">
                    <h1 class="font-semibold text-xl mb-8 w-2/5">Reseñas</h1>

                    <div class="px-12">
                        <div class="flex flex-col md:flex-row">
                            <div class="flex-none w-full md:w-28 p-4">
                                <img class="w-32 h-32 md:w-16 md:h-16 object-cover rounded-full mx-auto"
                                    src="//images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80" />
                            </div>
                            <div class="flex-grow">
                                <div class="flex justify-between border-b py-4">

                                    <div>
                                        <div class="font-semibold text-lg">Nombre de Usuario</div>
                                        <div class="text-sm">Fecha: 17/12/2020</div>
                                    </div>
                                    <div class="flex items-center font-bold leading-6 text-xl mr-6">
                                        <x-icon-star class="text-yellow-400 fill-current h-auto w-6 mr-2" />
                                        {{ rand(1,4)}}.{{ rand(0,9)}}
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
                    </div>

                    <a class="block w-24 text-center mx-auto hover:text-info text-primary active:outline-none cursor-pointer"
                        onclick="document.getElementById('modal').classList.remove('hidden','opacity-0')">Ver Todas</a>
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
        <div class="w-full lg:w-2/5 min-h-screen md:px-12">
            <div class="w-full h-full">

                {{--Reservaciones--}}
                <div class="bg-gray-300 rounded-md py-8 mt-8">
                    <h1
                        class="flex items-center justify-center p-4 border-b  text-secondary text-xl font-bold leading-1">
                        <x-icon-calendar class="w-8 h-auto mr-2 " />
                        <span>Reservaciones</span>
                    </h1>

                    <form action="" class="p-4">
                        <label for="">Fecha</label>
                        <x-input type="date" key="date" />

                        <label for="">Hora</label>
                        <x-input type="time" key="time" placeholder="Horario" />

                        <label for="">Personas</label>
                        <x-input type="number" key="groupSize" placeholder="Min 1 - Max 15" min="1" max="15"
                            class="appearance-none" />
                        <x-button type="submit" class="w-full py-4 justify-center mt-4 bg-primary">Reservar</x-button>
                    </form>
                </div>

                {{--Proximas Actividades--}}
                <div class="bg-gray-300 rounded-md py-8 mt-8">
                    <h1
                        class="flex items-center justify-center p-4 border-b  text-secondary text-xl font-bold leading-1">
                        <x-icon-calendar class="w-8 h-auto mr-2 " />
                        <span>Próximos eventos</span>
                    </h1>

                    <table class="w-full my-4 text-center">
                        <tr class="text-left px-4">
                            <th class="pl-9">Fecha</th>
                            <th class="pl-3">Hora</th>
                            <th class="text-center">Disponibilidad</th>
                        </tr>
                        <tr class="text-sm h-10">
                            <td>Vie - 17/12/2020</td>
                            <td>7:00pm</td>
                            <td>Disponible</td>
                        </tr>
                        <tr class="text-sm h-10">
                            <td>Vie - 18/12/2020</td>
                            <td>8:00am</td>
                            <td>Disponible</td>
                        </tr>
                        <tr class="text-sm h-10">
                            <td>Vie - 18/12/2020</td>
                            <td>1:00pm</td>
                            <td>Agotado</td>
                        </tr>
                        <tr class="text-sm h-10">
                            <td>Vie - 18/12/2020</td>
                            <td>7:00pm</td>
                            <td>Disponible</td>
                        </tr>
                    </table>

                </div>

                {{-- Contacto Afitrion --}}
                <div class="bg-gray-300 rounded-md py-8 mt-8">
                    <div class="flex border-b pb-4">
                        <div class="px-8 w-3/4">
                            <div class="mb-2">Anfitrion</div>
                            <div class="font-bold text-xl">Johan Tovar</div>
                        </div>
                        <div class="w-1/4">
                            <img class="w-16 h-16 object-cover rounded-full"
                                src="//images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80"
                                alt="Avatar of Tailwind CSS Design" />
                        </div>

                    </div>


                    <form action="" class="p-4">
                        <x-input key="subject" placeholder="Asunto" />
                        <x-textarea key="date" rows=10 placeholder="Introduce tu mensaje" />
                        <x-button type="submit" class="w-full py-4 justify-center mt-4 bg-info text-xl">
                            Enviar
                            <x-icon-send class="w-4 h-auto ml-4 transform " />
                        </x-button>
                    </form>
                </div>

                {{-- Contacto Afitrion --}}
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
    <div class="w-full my-8">

        @php
        $model = DB::table('experiences')->where('user_id','>', 1)->get();
        @endphp

        <x-embla-carousel :model="$model" />

    </div>

</x-app-nonav-layout>
