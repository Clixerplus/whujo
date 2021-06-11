@extends('layouts.backoffice')

@section('content')

    <div class="flex flex-col w-full mx-auto md:flex-row">
        <div class="w-1/4 p-4 shadow-xl rounded-xl">
            <div class="mx-auto bg-blue-600 border rounded-full w-44 h-44">
                <img class="object-cover w-full h-full rounded-full" src="{{ Auth::user()->profile_photo_url }}"
                alt="{{ Auth::user()->name }}" />
            </div>
            <h2 class="mt-4 text-xl font-bold text-center">{{ Auth::user()->name }}</h2>
            <p class="mt-4 text-center t">Usuario desde: <br> {{ Auth::user()->created_at->format('d/m/Y') }}</p>
        </div>

        <div class="w-3/4">

            <ul class="p-4 text-sm bg-white rounded shadow md:px-12">
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
        </div>
    </div>

@endsection
