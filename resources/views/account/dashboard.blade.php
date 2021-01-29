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
                        class="w-full md:w-2/5 lg:w-1/5 text-yellow-500 lg:border-l-4 shadow lg:border-yellow-500">
                        Perfil
                        <x-slot name="description">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed, doloribus
                            neque ipsum expedita?
                        </x-slot>
                    </x-btn-touch>

                    <x-btn-touch href="#" :icon="'icon-key-outline'"
                        class="w-full md:w-2/5 lg:w-1/5 text-primary lg:border-l-4 shadow lg:border-primary">
                        Seguridad
                        <x-slot name="description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, fuga officiis.
                        </x-slot>
                    </x-btn-touch>

                    <x-btn-touch href="#" :icon="'icon-wallet-outline'"
                        class="w-full md:w-2/5 lg:w-1/5 text-purple-500 lg:border-l-4 shadow lg:border-purple-500">
                        Pagos y Cobros
                        <x-slot name="description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </x-slot>
                    </x-btn-touch>

                    <x-btn-touch href="#" :icon="'icon-notifications-outline'"
                        class="w-full md:w-2/5 lg:w-1/5 text-pink-700 lg:border-l-4 shadow lg:border-pink-700">
                        Mensajes y Notificaciones
                        <x-slot name="description">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam esse quod iure?
                        </x-slot>
                    </x-btn-touch>

                    <x-btn-touch href="{{ route('service-listing') }}" :icon="'icon-newspaper'"
                        class="w-full md:w-2/5 lg:w-2/5 text-blue-700 lg:border-l-4 shadow lg:border-blue-700">
                        Anuncios de Servicios
                        <x-slot name="description">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam esse quod
                            iure?
                        </x-slot>
                    </x-btn-touch>

                    <x-btn-touch href="#" :icon="'icon-rocket'"
                        class="w-full md:w-2/5 lg:w-2/5 text-green-500 lg:border-l-4 shadow lg:border-green-500">
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

    <x-footer />
</x-app-layout>
