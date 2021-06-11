<x-admin-layout>

    <div class="flex flex-col items-center px-6 py-8 mt-16 space-y-2 lg:flex-row lg:justify-between">

        <h1 class="text-3xl ">Listado de Servicios</h1>
        <ul class="flex items-center space-x-1 text-sm text-gray-500">
            <li>
                <a href="{{ route('account.dashboard') }}" class="hover:text-gray-900">
                    Dahsboard
                </a>
            </li>
            <li>
                <x-icon-chevron-forward class="w-auto h-3" />
            </li>
            <li>Servicios</li>
        </ul>

    </div>

    <div class="flex justify-end p-4">

        <div class="flex flex-wrap w-full space-x-2 space-y-4 md:flex-nowrap md:space-y-0">
            <div class="flex items-end justify-between w-full h-32 p-6 bg-white rounded shadow md:w-1/3">
                <div class="flex flex-col justify-end w-2/3 h-full text-gray-500">

                    <span class="text-4xl">12</span>
                    <span class="text-gray-700">Contratos Totales</span>
                </div>
                <div class="relative w-1/3 h-full text-gray-400">
                    <x-icon-document-text-outline class="absolute bottom-0 right-0 w-full h-full" />
                </div>
            </div>

            <div class="flex items-end justify-between w-full h-32 p-6 bg-white rounded shadow md:w-1/3">
                <div class="flex flex-col justify-end w-2/3 h-full text-gray-500">

                    <span class="text-4xl">12</span>
                    <span class="text-gray-700">Solicitudes Pendientes</span>
                </div>
                <div class="relative w-1/3 h-full text-gray-400">
                    <x-icon-mail-unread-outline class="absolute bottom-0 right-0 w-full h-full" />
                </div>
            </div>

            <div class="flex items-end justify-between w-full h-32 p-6 bg-white rounded shadow md:w-1/3">
                <div class="flex flex-col justify-end w-2/3 h-full text-gray-500">

                    <span class="text-4xl">12</span>
                    <span class="text-gray-700">Citas Pendients</span>
                </div>
                <div class="relative w-1/3 h-full text-gray-400">
                    <x-icon-calendar class="absolute bottom-0 right-0 w-full h-full" />
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-wrap items-stretch p-4 space-y-4 lg:flex-nowrap lg:space-y-0 lg:space-x-4">

        <div class="w-full bg-white divide-y rounded-md shadow ">

            <h2 class="p-4 font-bold">Listado de Servicios</h2>
            <ul class="divide-y">

                @foreach ($services as $service)


                    <li class="flex items-center px-8 py-4 space-x-8">

                        <div class="w-24 h-24 rounded ">
                            <img src="{{ $service->photos[1] }}" alt="{{ $service->photos[1] }}"
                            class="object-cover w-24 h-24 rounded shadow">

                        </div>

                        <div class="flex-grow">
                            <div>

                                <span class="text-gray-900">{{ $service->name }}</span>
                            </div>

                            <div class="space-y-2 md:flex md:space-x-2 md:space-y-0 sm:justify-between sm:w-full">
                                <div>

                                    @if ($service->status == 'STATUS_PUBLISHED')
                                        <span class="px-3 py-1 text-sm text-green-600 bg-green-200 rounded">
                                            activo
                                        </span>
                                    @elseif ($service->status == 'STATUS_INCOMPLETE')
                                        <span class="px-3 py-1 text-sm text-gray-600 bg-gray-200 rounded">
                                            incompleto
                                        </span>
                                    @elseif ($service->status == 'STATUS_DEACTIVATE')
                                        <span class="px-3 py-1 text-sm text-yellow-600 bg-yellow-200 rounded">
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

                            <div class="flex items-center pt-2 space-x-2">
                                <div
                                    class="flex items-center justify-center w-8 h-8 text-xs text-white bg-gray-600 rounded-full">
                                    {{ rand(0, 4) }}.{{ rand(0, 9) }}</div>
                                <span
                                    class="px-3 py-1 text-xs text-gray-600 bg-gray-200 rounded-full">{{ rand(0, 500) }}
                                    Reseñas</span>

                            </div>
                        </div>

                    </li>

                @endforeach
            </ul>

        </div>

        <div class="hidden w-full bg-white divide-y rounded-md shadow lg:w-1/3">

            <h2 class="p-4 font-bold">Próximas Citas</h2>
            <ul class="divide-y">
                <li class="px-6 py-4 hover:bg-gray-100">
                    <a href="#" title="Ver detalles" class="flex items-center space-x-6">

                        <div class="flex flex-col flex-grow text-xs">
                            <span>01/03/2001</span>
                            <span>9:43:38 P.M.</span>
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
                    </a>
                </li>

                <li class="px-6 py-4 hover:bg-gray-100">
                    <a href="#" title="Ver detalles" class="flex items-center space-x-6">
                        <div class="flex flex-col flex-grow text-xs">
                            <span>01/03/2001</span>
                            <span>9:43:38 P.M.</span>
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
                    </a>

                </li>

                <li class="px-6 py-4 hover:bg-gray-100">
                    <a href="#" title="Ver detalles" class="flex items-center space-x-6">
                        <div class="flex flex-col flex-grow text-xs">
                            <span>01/03/2001</span>
                            <span>9:43:38 P.M.</span>
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
                    </a>
                </li>

            </ul>

        </div>

    </div>

</x-admin-layout>
