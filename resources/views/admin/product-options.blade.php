<x-admin-layout>
    <div class="flex flex-col lg:flex-row lg:justify-between items-center space-y-2  px-6 py-8 mt-16">

        <h1 class="text-3xl ">Configuración de Usuario</h1>
        <ul class="flex items-center space-x-1 text-gray-500 text-sm">
            <li><a href="{{ route('account.dashboard')}}" class="hover:text-gray-900">Dahsboard</a></li>
            <li>
                <x-icon-chevron-forward class="h-3 w-auto" />
            </li>
            <li>Configuración de Usuario</li>
        </ul>

    </div>

    <div class="p-4">
        <div class="flex flex-wrap md:flex-nowrap space-y-4 md:space-y-0 md:space-x-4 items-center justify-around ">
            <a href="{{ route('wizard.service.create',1) }}"
                class=" hover:bg-amazon hover:bg-opacity-25 w-full md:w-1/3 rounded shadow bg-white p-6 flex flex-col items-center justify-center h-44">
                <x-icon-cafe-outline class="w-16 h-auto" />
                <h1 class="text-3xl text-center">Share a coffee</h1>
            </a>
            <a href="{{ route('wizard.service.create',1) }}"
                class="hover:bg-duolingo hover:bg-opacity-25 w-full md:w-1/3 rounded shadow bg-white p-6 flex flex-col items-center justify-center h-44">
                <x-icon-construct-outline class="w-16 h-auto" />
                <h1 class="text-3xl"> Servicios</h1>
            </a>
            <a href="{{ route('wizard.service.create',1) }}"
                class="hover:bg-twitter hover:bg-opacity-25 w-full md:w-1/3 rounded shadow bg-white p-6 flex flex-col items-center justify-center h-44">
                <x-icon-expand-outline class="w-16 h-auto" />
                <h1 class="text-3xl"> Experiencias</h1>
            </a>
        </div>
    </div>
</x-admin-layout>
