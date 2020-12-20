@php
$service = App\Models\Service::first();
@endphp
<x-app-nonav-layout>
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
    <div class="container mx-auto my-4">
        <div class="flex flex-wrap gap-4">

            <main class="lg:flex-1 rounded">
                <div class="p-4">
                    <div class="flex">
                        <h1 class="text-2xl font-semibold mr-4 ">{{ $service->name }}</h1>
                        <span
                            class="text-md text-primary border-primary border border-solid px-4 py-1 rounded-full">Services</span>
                    </div>
                    <h2 class="text-gray-400 my-2">Ubicacion {{ $service->city->name }}</h2>
                    <div class="flex align-center">
                        <x-star-rating class="text-xl my-auto text-yellow-300" :rating="'4.5'" />
                        <span class="text-gray-400 ml-4">({{ rand(0,100) }} reseña)</span>
                    </div>
                </div>

                <nav class="bg-primary lg:rounded  sticky top-0 left-0 lg:m-4">
                    <ul class="flex justify-around text-sm py-4 font-semibold text-white">
                        <li><a href="#description">Descripción</a></li>
                        <li><a href="#features">Características</a></li>
                        <li><a href="#additionals">Adicionles</a></li>
                        <li><a href="#reviews">Reseñas</a></li>
                    </ul>
                </nav>

                <section id="description" title="Descripción del servicio" class="px-4 my-8 leading-relaxed">
                    <p class="px-4 text-gray-600">
                        {{ $service->description }}
                    </p>
                </section>

                <section id="features" title="Características que el servicio incluye" class="my-8">
                    <h3 class="mx-4 pb-4 text-xl font-semibold border-b border-gray-400">Características</h3>
                    <ul class="flex flex-col gap-4 py-4 px-8">
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

                <section id="additionals" title="Servicios adicionales" class="my-8">
                    <h3 class="mx-4 pb-4 text-xl font-semibold border-b border-gray-400">Servicios Adicionales</h3>
                    <ul class="flex flex-col">
                        <li class="flex py-4 px-8">
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
                        <li class="flex bg-red-100 py-4 px-8">
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
                        <li class="flex py-4 px-8">
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
                    <button class="block bg-gray-200 font-semibold px-6 py-1 rounded-full mx-auto text-sm mt-8">
                        Mostrar todos
                        <span class="text-primary text-lg ml-2">></span>
                    </button>
                </section>

                <section id="reviews" title="Reseñas de otros usuarios" class="my-8">
                    <h3 class="mx-4 pb-4 text-xl font-semibold border-b border-gray-400">Reviews<span>(2)</span></h3>

                    <div class="border rounded border-gray-400 my-4 mx-8 text-center py-8">
                        <p class="text-gray-600">Rating:</p>
                        <h4 class="font-bold text-3xl text-gray-700">4.5 <span class="text-lg font-normal">de 5</span>
                        </h4>
                        <x-star-rating class="w-36 justify-center mx-auto text-xl text-yellow-300" :rating="'4.5'" />

                    </div>
                    <ul class="mt-8">
                        <li class="mx-8 mb-8">
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
                        <li class="mx-8 mb-8">
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
                    <button class="block bg-gray-200 font-semibold px-6 py-1 mt-8 rounded-full mx-auto text-sm">
                        Mostrar todos
                        <span class="text-primary text-lg ml-2">></span>
                    </button>
                </section>

                {{--
                <section id="addReview" title="Agregar reseña al producto" class="my-8">
                    <h3 class="mx-4 pb-4 text-xl font-semibold border-b border-gray-400">
                        Agrega una reseña
                    </h3>
                    <p class="p-4 text-sm text-gray-500 font-normal">Lorem, ipsum dolor sit adipisicing elit. Eos, in
                        ab!
                        Quaerat mollitia minima reprehenderit?</p>
                    <form action="" class="p-4">
                        <textarea class="border border-gray-300 rounded min-w-full p-4 text-gray-600" name="" id=""
                            cols="30" rows="10"></textarea>
                        <button
                            class="block bg-primary font-semibold px-6 py-3 mt-4 rounded text-white mx-auto text-sm">
                            Enviar Reseña
                        </button>
                    </form>
                </section>
                --}}
            </main>

            <aside class="rounded w-full lg:w-auto">
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
                            <textarea class="border border-gray-300 rounded min-w-full p-4 text-gray-600" name="" id=""
                                cols="30" rows="10"></textarea>
                            <button
                                class="block bg-primary font-semibold px-6 py-3 mt-4 rounded text-white mx-auto text-sm">
                                Enviar
                            </button>
                        </form>
                    </div>
                </section>

                <button class="block px-8 py-2 mt-8 mx-auto rounded-full border border-primary text-primary">AGREGAR A
                    FAVORITOS</button>
                <p class="text-center text-gray-600 my-2">o comparte en redes sociales</p>
                <ul class="flex justify-center mt-4">
                    <li><a href=""
                            class="block px-4 py-1 mx-2 rounded-full border border-blue-600 text-blue-600 text-sm">Red
                            social</a></li>
                    <li><a href=""
                            class="block px-4 py-1 mx-2 rounded-full border border-red-600 text-red-600 text-sm">Red
                            social</a></li>
                    <li><a href=""
                            class="block px-4 py-1 mx-2 rounded-full border border-teal-800 text-teal-800 text-sm">Red
                            social</a></li>
                </ul>
            </aside>

        </div>

        <section id="features" title="Características que el servicio incluye" class="my-8 mx-4">
            <h1 class="pb-4 text-lg font-semibold border-b border-gray-400">También te recomendamos</h1>
            <ul class="flex gap-4 overflow-hidden my-4">
                <li class="w-full sm:w-1/2 lg:w-1/4"><a href=""
                        class="block bg-secondary h-44 rounded">Recomendacion1</a></li>
                <li class="sm:w-1/2 lg:w-1/4"><a href=""
                        class="hidden sm:block bg-secondary h-44 rounded">Recomendacion2</a></li>
                <li class=" lg:w-1/4"><a href="" class="hidden lg:block bg-secondary h-44 rounded">Recomendacion</a>
                </li>
                <li class=" lg:w-1/4"><a href="" class="hidden lg:block bg-secondary h-44 rounded">Recomendacion</a>
                </li>
            </ul>
        </section>
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
