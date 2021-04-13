<x-admin-layout>

    <div class="flex flex-col lg:flex-row lg:justify-between items-center space-y-2  px-6 py-8 mt-16">

        <h1 class="text-3xl ">Notificaciones</h1>
        <ul class="flex items-center space-x-1 text-gray-500 text-sm">
            <li><a href="{{ route('account.dashboard')}}" class="hover:text-gray-900">Dahsboard</a></li>
            <li>
                <x-icon-chevron-forward class="h-3 w-auto" />
            </li>
            <li>Notificaciones</li>
        </ul>

    </div>

    <div class="px-4">
        <div class="bg-white rounded-md divide-y shadow ">

            <h2 class="p-4 font-bold">Inbox</h2>
            <ul class="divide-y">

                <li class="py-4 px-8 flex items-center space-x-8">

                    <div class="w-16 h-16 bg-blue-600 rounded-full "></div>

                    <div class="space-y-2 flex-grow">
                        <div>
                            <span class="text-gray-900">Nombre Usuario</span>
                        </div>

                        <div class="space-y-2 md:flex md:space-x-2 md:space-y-0 sm:justify-between sm:w-full">
                            <div>
                                <span class="text-xs text-gray-500 bg-gray-200 rounded-full py-1 px-3">
                                    Asunto del mensaje
                                </span>
                            </div>

                            <div>
                                <span class="text-xs text-gray-500 bg-gray-200 rounded-full py-1 px-3">
                                    2 days
                                </span>
                            </div>
                        </div>

                        <div class="flex items-center space-x-2">
                            <x-icon-arrow-redo class="w-auto h-4 text-gray-400" />
                            <a href="" class="hover:text-third-cinnabar text-gray-700 font-extralight">Parte del mensaje</a>
                        </div>
                    </div>

                </li>

                <li class="py-4 px-8 flex items-center space-x-8">

                    <div class="w-16 h-16 bg-pink-600 rounded-full "></div>

                    <div class="space-y-2 flex-grow">
                        <div>
                            <span class="text-gray-900">Nombre Usuario</span>
                        </div>

                        <div class="space-y-2 md:flex md:space-x-2 md:space-y-0 sm:justify-between sm:w-full">
                            <div>
                                <span class="text-xs text-gray-500 bg-gray-200 rounded-full py-1 px-3">
                                    Asunto del mensaje
                                </span>
                            </div>

                            <div>
                                <span class="text-xs text-gray-500 bg-gray-200 rounded-full py-1 px-3">
                                    2 days
                                </span>
                            </div>
                        </div>

                        <div class="flex items-center space-x-2">
                            <x-icon-arrow-redo class="w-auto h-4 text-gray-400" />
                            <a href="" class="hover:text-third-cinnabar text-gray-700 font-extralight">Parte del mensaje</a>
                        </div>
                    </div>

                </li>

                <li class="py-4 px-8 flex items-center space-x-8">

                    <div class="w-16 h-16 bg-green-600 rounded-full "></div>

                    <div class="space-y-2 flex-grow">
                        <div>
                            <span class="text-gray-900">Nombre Usuario</span>
                        </div>

                        <div class="space-y-2 md:flex md:space-x-2 md:space-y-0 sm:justify-between sm:w-full">
                            <div>
                                <span class="text-xs text-gray-500 bg-gray-200 rounded-full py-1 px-3">
                                    Asunto del mensaje
                                </span>
                            </div>

                            <div>
                                <span class="text-xs text-gray-500 bg-gray-200 rounded-full py-1 px-3">
                                    2 days
                                </span>
                            </div>
                        </div>

                        <div class="flex items-center space-x-2">
                            <x-icon-arrow-redo class="w-auto h-4 text-gray-400" />
                            <a href="" class="hover:text-third-cinnabar text-gray-700 font-extralight">Parte del mensaje</a>
                        </div>
                    </div>

                </li>

            </ul>

        </div>
    </div>

    <div class="my-8 flex space-x-3">

    </div>

</x-admin-layout>
