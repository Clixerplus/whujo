<x-admin-layout>

    <h1 class="text-3xl font-light pt-24 pb-4 px-4">Hola, Usuario!</h1>

    <div class="flex p-4 flex-wrap lg:flex-nowrap space-y-4 lg:space-y-0 lg:space-x-2">

        <div class="w-full lg:w-1/2 flex flex-wrap md:flex-nowrap space-x-2 space-y-4 md:space-y-0">
            <div class="w-full md:w-1/2 rounded h-32 bg-white shadow flex items-end justify-between p-6">
                <div class="text-gray-500 w-2/3">
                    <h2 class="text-6xl">0</h2>
                    <h3 class="text-sm">Anuncios Activos</h3>
                </div>
                <div class="w-1/3 h-full text-gray-400">
                    <x-icon-newspaper class="w-full h-full" />
                </div>
            </div>

            <div class="w-full md:w-1/2 rounded h-32 bg-white shadow flex items-end justify-between p-6">
                <div class="text-gray-500  w-2/3">
                    <h2 class="text-6xl">0</h2>
                    <h3 class="text-sm">Reservaciones</h3>
                </div>
                <div class="w-1/3 h-full text-gray-600">
                    <x-icon-newspaper class="w-full h-full" />
                </div>
            </div>
        </div>

        <div class="w-full lg:w-1/2 flex flex-wrap md:flex-nowrap space-x-2 space-y-4 md:space-y-0">
            <div class="w-full md:w-1/2 rounded h-32 bg-white shadow flex items-end justify-between p-6">
                <div class="text-gray-500  w-2/3">
                    <h2 class="text-6xl">0</h2>
                    <h3 class="text-sm">Rating & reviews</h3>
                </div>
                <div class="w-1/3 h-full text-gray-400">
                    <x-icon-newspaper class="w-full h-full" />
                </div>
            </div>

            <div class="w-full md:w-1/2 rounded h-32 bg-white shadow flex items-end justify-between p-6">
                <div class="text-gray-500  w-2/3">
                    <h2 class="text-6xl">0</h2>
                    <h3 class="text-sm">Fondos Totales</h3>
                </div>
                <div class="w-1/3 h-full text-gray-600">
                    <x-icon-newspaper class="w-full h-full" />
                </div>
            </div>
        </div>

    </div>

    <div class="flex flex-wrap lg:flex-nowrap p-4 space-y-4 lg:space-y-0 lg:space-x-4 items-stretch">

        <div class="w-full lg:w-3/5 bg-white shadow rounded-lg self-stretch">
            <div class="bg-white h-96"></div>
        </div>

        <div class="w-full lg:w-2/5 bg-white shadow rounded-lg">
            <div class="bg-white h-96"></div>
        </div>

    </div>

</x-admin-layout>
