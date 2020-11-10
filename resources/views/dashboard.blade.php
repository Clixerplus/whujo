<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="w-screen lg:max-w-7xl lg:mx-auto sm:px-6 lg:px-8">
            <div class="sm:rounded-lg">
                <div class="flex flex-col flex-wrap md:flex-row md:justify-center md:gap-4 w-full lg:p-4 ">

                    <x-btn-touch href="#" :icon="'icon-person-add-outline'"
                        class="w-full md:w-2/5 lg:w-1/5 text-blue-600">
                        Datos Personales
                        <x-slot name="description">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed, doloribus
                            neque ipsum expedita?
                        </x-slot>
                    </x-btn-touch>

                    <x-btn-touch href="#" :icon="'icon-key-outline'" class="w-full md:w-2/5 lg:w-1/5 text-primary">
                        Seguridad
                        <x-slot name="description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, fuga officiis.
                        </x-slot>
                    </x-btn-touch>

                    <x-btn-touch href="#" :icon="'icon-wallet-outline'" class="w-full md:w-2/5 lg:w-1/5 text-green-500">
                        Pagos y Cobros
                        <x-slot name="description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </x-slot>
                    </x-btn-touch>

                    <x-btn-touch href="#" :icon="'icon-notifications-outline'"
                        class="w-full md:w-2/5 lg:w-1/5 text-yellow-300">
                        Mensajes y Notificaciones
                        <x-slot name="description">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam esse quod iure?
                        </x-slot>
                    </x-btn-touch>

                    <x-btn-touch class="w-full md:w-2/5 lg:w-2/5" :icon="'icon-whujo'" href="#">
                        Anuncios de Servicios
                        <x-slot name="description">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam esse quod
                            iure?
                        </x-slot>
                    </x-btn-touch>

                    <x-btn-touch class="w-full md:w-2/5 lg:w-2/5" :icon="'icon-whujo'" href="#">
                        Anuncios de Experiencias
                        <x-slot name="description">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam esse quod
                            iure?
                        </x-slot>
                    </x-btn-touch>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
