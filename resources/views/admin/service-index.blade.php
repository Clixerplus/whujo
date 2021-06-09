<x-admin-layout>

    <div class="flex flex-col lg:flex-row lg:justify-between items-center space-y-2  px-6 py-8 mt-16">

        <h1 class="text-3xl ">Listado de Servicios</h1>
        <ul class="flex items-center space-x-1 text-gray-500 text-sm">
            <li><a href="{{ route('account.dashboard')}}" class="hover:text-gray-900">Dahsboard</a></li>
            <li>
                <x-icon-chevron-forward class="h-3 w-auto" />
            </li>
            <li>Servicios</li>
        </ul>

    </div>

    <div class="flex justify-end p-4">

        <div class="w-full  flex flex-wrap md:flex-nowrap space-x-2 space-y-4 md:space-y-0">
            <div class="w-full md:w-1/3 rounded h-32 bg-white shadow flex items-end justify-between p-6">
                <div class="flex flex-col  justify-end h-full text-gray-500 w-2/3">

                    <span class="text-4xl">12</span>
                    <span class="text-gray-700">Contratos Totales</span>
                </div>
                <div class="relative w-1/3 h-full text-gray-400">
                    <x-icon-document-text-outline class="absolute bottom-0 right-0 w-full h-full" />
                </div>
            </div>

            <div class="w-full md:w-1/3 rounded h-32 bg-white shadow flex items-end justify-between p-6">
                <div class="flex flex-col  justify-end h-full text-gray-500 w-2/3">

                    <span class="text-4xl">12</span>
                    <span class="text-gray-700">Solicitudes Pendientes</span>
                </div>
                <div class="relative w-1/3 h-full text-gray-400">
                    <x-icon-mail-unread-outline class="absolute bottom-0 right-0 w-full h-full" />
                </div>
            </div>

            <div class="w-full md:w-1/3 rounded h-32 bg-white shadow flex items-end justify-between p-6">
                <div class="flex flex-col  justify-end h-full text-gray-500 w-2/3">

                    <span class="text-4xl">12</span>
                    <span class="text-gray-700">Citas Pendients</span>
                </div>
                <div class="relative w-1/3 h-full text-gray-400">
                    <x-icon-calendar class="absolute bottom-0 right-0 w-full h-full" />
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-wrap lg:flex-nowrap p-4 space-y-4 lg:space-y-0 lg:space-x-4 items-stretch">

        <div class="w-full lg:w-2/3 bg-white rounded-md divide-y shadow ">

            <h2 class="p-4 font-bold">Listado de Servicios</h2>
            <ul class="divide-y">

                @foreach ($services as $service)

                <li class="py-4 px-8 flex items-center space-x-8">

                    <div class="w-24 h-24 bg-gray-900 rounded ">
                        <img src="" alt="">
                    </div>

                    <div class="flex-grow">
                        <div>
                            <span class="text-gray-900">{{ $service->name }}</span>
                        </div>

                        <div class="space-y-2 md:flex md:space-x-2 md:space-y-0 sm:justify-between sm:w-full">
                            <div>

                                @if ($service->status == 'STATUS_PUBLISHED')
                                <span class="text-sm text-green-600 px-3 py-1 bg-green-200 rounded">
                                    activo
                                </span>
                                @elseif ($service->status == 'STATUS_INCOMPLETE')
                                <span class="text-sm text-gray-600 px-3 py-1 bg-gray-200 rounded">
                                    incompleto
                                </span>
                                @elseif ($service->status == 'STATUS_DEACTIVATE')
                                <span class="text-sm text-yellow-600 px-3 py-1 bg-yellow-200 rounded">
                                    desactivado
                                </span>
                                @endif
                            </div>
                            <div class="flex space-x-4 text-xs text-gray-500 ">
                                <button class="hover:text-gray-700">Edit</button>
                                <button class="hover:text-gray-700">Delete</button>
                                <button class="hover:text-gray-700">Publish</button>
                            </div>
                        </div>

                        <div class="flex items-center space-x-2 pt-2">
                            <div
                                class="w-8 h-8 bg-gray-600 rounded-full flex items-center justify-center text-xs text-white">
                                {{ rand(0,4) }}.{{ rand(0,9) }}</div>
                            <span class="text-xs px-3 py-1 bg-gray-200 text-gray-600 rounded-full">{{ rand(0,500) }} Reseñas</span>

                        </div>
                    </div>

                </li>
                @endforeach
            </ul>

        </div>

        <div class="w-full lg:w-1/3 bg-white rounded-md divide-y shadow ">

            <h2 class="p-4 font-bold">Próximas Citas</h2>
            <ul class="divide-y">
                <li class="py-4 px-6 hover:bg-gray-100">
                    <a href="#" title="Ver detalles" class="flex items-center space-x-6">

                        <div class="flex flex-col text-xs flex-grow">
                            <span>01/03/2001</span>
                            <span>9:43:38 P.M.</span>
                        </div>

                        <div class="space-y-1 text-sm text-gray-500 flex-grow flex flex-col">
                            <span class=" text-sm text-gray-500">
                                Nombre Producto
                            </span>
                            <span>
                                Direccion de la cita
                            </span>
                            <span>
                                +(00) 000-0000
                            </span>

                            <div class="pt-2">
                                <span class="text-sm text-yellow-600 px-3 py-1 bg-yellow-200 rounded-full">
                                    pending
                                </span>
                            </div>
                        </div>
                    </a>
                </li>

                <li class="py-4 px-6 hover:bg-gray-100">
                    <a href="#" title="Ver detalles" class="flex items-center space-x-6">
                        <div class="flex flex-col text-xs flex-grow">
                            <span>01/03/2001</span>
                            <span>9:43:38 P.M.</span>
                        </div>

                        <div class="space-y-1 text-sm text-gray-500 flex-grow flex flex-col">
                            <span class=" text-sm text-gray-500">
                                Nombre Producto
                            </span>
                            <span>
                                Direccion de la cita
                            </span>
                            <span>
                                +(00) 000-0000
                            </span>

                            <div class="pt-2">
                                <span class="px-3 py-1 bg-red-300 rounded-full text-red-600">
                                    Cancelada
                                </span>
                            </div>
                        </div>
                    </a>

                </li>

                <li class="py-4 px-6 hover:bg-gray-100">
                    <a href="#" title="Ver detalles" class="flex items-center space-x-6">
                        <div class="flex flex-col text-xs flex-grow">
                            <span>01/03/2001</span>
                            <span>9:43:38 P.M.</span>
                        </div>

                        <div class="space-y-1 text-sm text-gray-500 flex-grow flex flex-col">
                            <span class=" text-sm text-gray-500">
                                Nombre Producto
                            </span>
                            <span>
                                Direccion de la cita
                            </span>
                            <span>
                                +(00) 000-0000
                            </span>

                            <div class="pt-2">
                                <span class="text-sm text-yellow-600 px-3 py-1 bg-yellow-200 rounded-full">
                                    pending
                                </span>
                            </div>
                        </div>
                    </a>
                </li>

            </ul>

        </div>

    </div>

</x-admin-layout>
