<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Service Listing') }}
        </h2>
    </x-slot>

    <div class="w-screen md:max-w-2xl lg:max-w-6xl mx-auto">
        <div class="px-4 py-8">

            <div class="w-full mb-8 md:flex md:justify-between">
                <h1 class="font-bold text-3xl mb-4">Tus Anuncios</h1>
                <div>
                    <a href="{{ route('service-create') }}" class="px-4 py-2 transition-300
                                   border border-services rounded
                                   text-services active:text-white
                                   active:bg-services hover:bg-blue-300
                                   hover:text-blue-900
                                   hover:shadow-md">
                        Crear un anuncio
                    </a>
                </div>
            </div>

            @foreach ($services as $service)

            <div class="border bg-gray-100 rounded-md p-4 lg:p-6 mb-8">
                <div class="flex justify-between pb-4">

                    <div class="flex flex-col w-2/3">
                        <div class="flex-initial w-auto h-auto space-x-2">
                            <span class="text-sm shadow border-l-4 border-warning p-2">
                                Pendiente
                                <x-icon-information-circle class="inline h-5 w-auto text-gray-600" />
                            </span>
                        </div>
                        <div class="flex-grow py-4">
                            <h1 class="font-semibold text-xl">
                                {{ $service->name ?? 'Nombre incompleto' }}
                            </h1>
                            <p class="text-sm lg:text-base font-light text-gray-600">
                                {{ $service->description ?? 'Sin description' }}
                            </p>
                        </div>
                    </div>

                    <div class="w-1/3 h-40 text-center">
                        <img src="{{ $service->photos[0] ?? 'nada'}}" alt="" class="rounded-md h-full ml-auto">
                    </div>

                </div>

                <div class="flex space-x-2 items-center border-t pt-4">
                    <div class="mr-auto">
                        <span>
                            <x-switch :key="'publisher'">Activo</x-switch>
                        </span>
                    </div>
                    <div>
                        <a href="{{ route('service-create',$service) }}"
                            class="text-sm tracking-wider p-3 rounded-md border transition-300 hover:bg-success hover:text-white">Continuar</a>
                    </div>
                    <div>
                        <a href="{{-- route('service-delete',$service) --}}"
                            class="text-sm tracking-wider p-3 rounded-md border transition-300 hover:bg-red-800 hover:text-white">Eliminar</a>
                    </div>
                </div>
            </div>

            @endforeach


        </div>
    </div>

    <x-footer />
</x-app-layout>
