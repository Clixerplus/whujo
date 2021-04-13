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

    <div class="px-4">

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updateProfileInformation()))
                    @livewire('profile.update-profile-information-form')

                    <x-jet-section-border />
                @endif


                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            </div>
        </div>

    </div>


</x-admin-layout>
