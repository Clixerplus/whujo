@extends('layouts.backoffice')

@section('content')

    <div class="flex flex-wrap items-stretch p-4 space-y-4 lg:flex-nowrap lg:space-y-0 lg:space-x-4">

        <div class="w-full divide-y rounded-md shadow bg-gray-50 ">

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
                                    @if (!$service->isComplete())
                                        <span class="px-3 py-1 text-sm text-gray-600 bg-gray-200 rounded">
                                            incompleto
                                        </span>

                                    @elseif ($service->isPublished())
                                        <span class="px-3 py-1 text-sm text-green-600 bg-green-200 rounded">
                                            activo
                                        </span>
                                    @else
                                        <span class="px-3 py-1 text-sm text-yellow-600 bg-yellow-200 rounded">
                                            desactivado
                                        </span>
                                    @endif
                                </div>
                                <div class="flex items-center space-x-4 text-xs text-gray-500">
                                    <a href="{{ route('service.edit', $service) }}"
                                        class="hover:text-gray-700 hover:underline focus:outline-none">Edit</a>

                                    <button class="hover:text-gray-700 hover:underline focus:outline-none">Delete</button>

                                    @if (!$service->isPublished())
                                        <button class="hover:text-gray-700 hover:underline focus:outline-none">
                                            Publish
                                        </button>
                                    @else
                                        <button class="hover:text-gray-700 hover:underline focus:outline-none">
                                            Unpublish
                                        </button>
                                    @endif
                                </div>
                            </div>

                            <div class="flex items-center pt-2 space-x-2">
                                <div
                                    class="flex items-center justify-center w-8 h-8 text-xs text-white bg-gray-600 rounded-full">
                                    {{ rand(0, 4) }}.{{ rand(0, 9) }}</div>
                                <span class="px-3 py-1 text-xs text-gray-600 bg-gray-200 rounded-full">{{ rand(0, 500) }}
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
@endsection
