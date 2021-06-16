@extends('layouts.backoffice')
@section('content')

    <div class="p-4 space-y-4">

        <div class="mr-6">
            <h2 class="mb-1 text-3xl font-semibold leading-7 tracking-tight truncate md:text-4xl md:leading-10">
                Bookings
            </h2>
            <div class="tracking-tight text-gray-600 font-base">
                Lorem ipsum is placeholder text commonly used in the graphic.
            </div>
        </div>


        <div class="w-full divide-y rounded-md shadow bg-gray-50 ">
            <ul class="divide-y">
                <li class="px-6 py-4 hover:bg-gray-100">
                    <a href="#" title="Ver detalles" class="flex items-center space-x-6">


                        <div class="flex text-xs">
                            <img src="{{ asset('images/avatars/avatar01.jpeg') }}" alt=""
                            class="object-cover w-12 h-12 rounded-full">
                        </div>
                        <div class="flex flex-col flex-grow font-bold">
                            <span>User Name</span>
                        </div>

                        <div class="flex flex-col flex-grow space-y-1 text-sm text-gray-500">
                            <span class="text-sm text-gray-500 ">
                                Nombre Producto
                            </span>
                            <span>
                                Direccion de la cita
                            </span>
                            <span>
                                +(00) 000-0000
                            </span>

                            <div class="pt-2">
                                <span class="px-3 py-1 text-sm text-yellow-600 bg-yellow-200 rounded-full">
                                    pending
                                </span>
                            </div>
                        </div>

                        <div class="flex flex-col flex-grow text-xs">
                            <span>01/03/2001</span>
                            <span>9:43:38 P.M.</span>
                        </div>
                    </a>
                </li>
                <li class="px-6 py-4 hover:bg-gray-100">
                    <a href="#" title="Ver detalles" class="flex items-center space-x-6">


                        <div class="flex text-xs">
                            <img src="{{ asset('images/avatars/avatar01.jpeg') }}" alt=""
                            class="object-cover w-12 h-12 rounded-full">
                        </div>
                        <div class="flex flex-col flex-grow font-bold">
                            <span>User Name</span>
                        </div>

                        <div class="flex flex-col flex-grow space-y-1 text-sm text-gray-500">
                            <span class="text-sm text-gray-500 ">
                                Nombre Producto
                            </span>
                            <span>
                                Direccion de la cita
                            </span>
                            <span>
                                +(00) 000-0000
                            </span>

                            <div class="pt-2">
                                <span class="px-3 py-1 text-red-600 bg-red-300 rounded-full">
                                    Cancelada
                                </span>
                            </div>
                        </div>

                        <div class="flex flex-col flex-grow text-xs">
                            <span>01/03/2001</span>
                            <span>9:43:38 P.M.</span>
                        </div>
                    </a>
                </li>
                <li class="px-6 py-4 hover:bg-gray-100">
                    <a href="#" title="Ver detalles" class="flex items-center space-x-6">


                        <div class="flex text-xs">
                            <img src="{{ asset('images/avatars/avatar01.jpeg') }}" alt=""
                            class="object-cover w-12 h-12 rounded-full">
                        </div>
                        <div class="flex flex-col flex-grow font-bold">
                            <span>User Name</span>
                        </div>

                        <div class="flex flex-col flex-grow space-y-1 text-sm text-gray-500">
                            <span class="text-sm text-gray-500 ">
                                Nombre Producto
                            </span>
                            <span>
                                Direccion de la cita
                            </span>
                            <span>
                                +(00) 000-0000
                            </span>

                            <div class="pt-2">
                                <span class="px-3 py-1 text-sm text-green-600 bg-green-200 rounded-full">
                                    Success
                                </span>
                            </div>
                        </div>

                        <div class="flex flex-col flex-grow text-xs">
                            <span>01/03/2001</span>
                            <span>9:43:38 P.M.</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
@endsection
