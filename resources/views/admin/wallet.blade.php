<x-admin-layout>

    <div class="flex flex-col lg:flex-row lg:justify-between items-center space-y-2  px-6 py-8 mt-16">

        <h1 class="text-3xl ">Cartera</h1>
        <ul class="flex items-center space-x-1 text-gray-500 text-sm">
            <li><a href="{{ route('account.dashboard')}}" class="hover:text-gray-900">Dahsboard</a></li>
            <li>
                <x-icon-chevron-forward class="h-3 w-auto" />
            </li>
            <li>Cartera</li>
        </ul>

    </div>

    <div class="flex justify-end p-4">

        <div class="w-full  flex flex-wrap md:flex-nowrap space-x-2 space-y-4 md:space-y-0">
            <div class="w-full md:w-1/3 rounded h-32 bg-white shadow flex items-end justify-between p-6">
                <div class="flex flex-col  justify-between h-full text-gray-500 w-2/3">
                    <div>
                        <span class="bg-blue-200 text-gray-500 px-3 py-1 rounded">ARS</span>
                    </div>
                    <span class="text-lg">150.000,00</span>
                    <span class="text-gray-700">Saldo Extraíble </span>
                </div>
                <div class="relative w-1/3 h-full text-gray-400">
                    <x-icon-swap-money class="absolute bottom-0 right-0 w-full h-full" />
                </div>
            </div>

            <div class="w-full md:w-1/3 rounded h-32 bg-white shadow flex items-end justify-between p-6">
                <div class="flex flex-col  justify-between h-full text-gray-500 w-2/3">
                    <div>
                        <span class="bg-yellow-200 text-gray-500 px-3 py-1 rounded">ARS</span>
                    </div>
                    <span class="text-lg">150.000,00</span>
                    <span class="text-gray-700">Ganancia Total </span>
                </div>
                <div class="relative w-1/3 h-full text-gray-400">
                    <x-icon-money-bag class="absolute bottom-0 right-0 w-full h-full" />
                </div>
            </div>

            <div class="w-full md:w-1/3 rounded h-32 bg-white shadow flex items-end justify-between p-6">
                <div class="flex flex-col  justify-end h-full text-gray-500 w-2/3">

                    <span class="text-4xl">12</span>
                    <span class="text-gray-700">Reservaciones Pendientes</span>
                </div>
                <div class="relative w-1/3 h-full text-gray-400">
                    <x-icon-book-outline class="absolute bottom-0 right-0 w-full h-full" />
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-wrap lg:flex-nowrap p-4 space-y-4 lg:space-y-0 lg:space-x-4 items-stretch">

        <div class="w-full lg:w-2/3 bg-white rounded-md divide-y shadow ">

            <h2 class="p-4 font-bold">Ingresos</h2>
            <ul class="divide-y">

                <li class="py-4 px-8 flex items-center space-x-8">

                    <div class="w-12 h-12 bg-blue-600 rounded "></div>

                    <div class="flex-grow">
                        <div>
                            <span class="text-gray-900">Nombre Producto</span>
                        </div>

                        <div class="space-y-2 md:flex md:space-x-2 md:space-y-0 sm:justify-between sm:w-full">
                            <div>
                                <span class="text-sm text-gray-500">
                                    Fecha: 01/03/201
                                </span>
                            </div>

                            <div>
                                <span class="text-sm text-gray-500 bg-gray-200 rounded-full py-1 px-3">
                                    ARS 2.500,00
                                </span>
                            </div>
                        </div>

                        <div class="flex items-center space-x-2 pt-2">
                            <div class="w-8 h-8 bg-gray-600 rounded-full "></div>
                            <span class="text-gray-700 font-extralight">Nombre contratante</span>
                        </div>
                    </div>

                </li>

                <li class="py-4 px-8 flex items-center space-x-8">

                    <div class="w-12 h-12 bg-green-600 rounded "></div>

                    <div class="flex-grow">
                        <div>
                            <span class="text-gray-900">Nombre Producto</span>
                        </div>

                        <div class="space-y-2 md:flex md:space-x-2 md:space-y-0 sm:justify-between sm:w-full">
                            <div>
                                <span class="text-sm text-gray-500">
                                    Fecha: 01/03/201
                                </span>
                            </div>

                            <div>
                                <span class="text-sm text-gray-500 bg-gray-200 rounded-full py-1 px-3">
                                    ARS 2.500,00
                                </span>
                            </div>
                        </div>

                        <div class="flex items-center space-x-2 pt-2">
                            <div class="w-8 h-8 bg-gray-600 rounded-full "></div>
                            <span class="text-gray-700 font-extralight">Nombre contratante</span>
                        </div>
                    </div>

                </li>

                <li class="py-4 px-8 flex items-center space-x-8">

                    <div class="w-12 h-12 bg-pink-600 rounded "></div>

                    <div class="flex-grow">
                        <div>
                            <span class="text-gray-900">Nombre Producto</span>
                        </div>

                        <div class="space-y-2 md:flex md:space-x-2 md:space-y-0 sm:justify-between sm:w-full">
                            <div>
                                <span class="text-sm text-gray-500">
                                    Fecha: 01/03/201
                                </span>
                            </div>

                            <div>
                                <span class="text-sm text-gray-500 bg-gray-200 rounded-full py-1 px-3">
                                    ARS 2.500,00
                                </span>
                            </div>
                        </div>

                        <div class="flex items-center space-x-2 pt-2">
                            <div class="w-8 h-8 bg-gray-600 rounded-full "></div>
                            <span class="text-gray-700 font-extralight">Nombre contratante</span>
                        </div>
                    </div>

                </li>

            </ul>

        </div>

        <div class="w-full lg:w-1/3 bg-white rounded-md divide-y shadow ">

            <h2 class="p-4 font-bold">Retiros</h2>
            <ul class="divide-y">

                <li class="py-4 px-6 flex items-center space-x-6">

                    <div class="flex flex-col text-xs flex-grow">
                        <span>01/03/2001</span>
                        <span>9:43:38 P.M.</span>
                    </div>

                    <div class="space-y-2 flex-grow">
                        <span class=" text-gray-500">
                            ARS 15.000,00
                        </span>                        <div>
                            <span class="text-xs text-green-50 bg-green-400 rounded-full py-1 px-3">
                                Aprobado
                            </span>
                        </div>
                    </div>

                </li>

                <li class="py-4 px-6 flex items-center space-x-6">

                    <div class="flex flex-col text-xs flex-grow">
                        <span>01/03/2001</span>
                        <span>9:43:38 P.M.</span>
                    </div>

                    <div class="space-y-2 flex-grow">
                        <span class=" text-gray-500">
                            ARS 15.000,00
                        </span>                        <div>
                            <span class="text-xs text-red-50 bg-red-400 rounded-full py-1 px-3">
                                Rechazado
                            </span>
                        </div>
                    </div>

                </li>

                <li class="py-4 px-6 flex items-center space-x-6">

                    <div class="flex flex-col text-xs flex-grow">
                        <span>01/03/2001</span>
                        <span>9:43:38 P.M.</span>
                    </div>

                    <div class="space-y-2 flex-grow">
                        <span class=" text-gray-500">
                            ARS 15.000,00
                        </span>                        <div>
                            <span class="text-xs text-yellow-50 bg-yellow-400 rounded-full py-1 px-3">
                                Pendiente
                            </span>
                        </div>
                    </div>

                </li>

            </ul>

        </div>

    </div>

</x-admin-layout>
