{{-- sideMenu --}}
<div id="sideMenu" x-data={open:true} class="fixed inset-y-0 left-0 h-screen overflow-y-auto  max-w-xs shadow-xl rounded-r-3xl bg-gray-300
           border-r border-red-50 transform -translate-x-full transition-transform duration-500 ease-in-out z-20
           lg:transform-none lg:z-10" :class="{ 'w-16': !open, 'w-1/5':open}">

    <h2 class=" text-whujo text-3xl font-bold pt-4 pl-4" x-show="open">whujo</h2>
    <div class="text-center py-4 px-2" x-show="!open">
        <h2 class="rounded bg-primary p-1">
            <span class="text-3xl font-bold font-whujo  text-white">w</span>
        </h2>
    </div>

    <div class="w-full text-right px-4 py-1 lg:hidden">
        <button onclick="toggleMenu()" class="ml-auto">
            <x-icon-close-outline class="h-8 w-8 text-gray-400" />
        </button>
    </div>

    <x-sidebar-items-group>
        <x-slot name="title">Menu</x-slot>
        <x-sidebar-item :icon="'bar-chart-outline'" :route="'account.dashboard'">
            {{ __('Dashboard') }}
        </x-sidebar-item>

        <x-sidebar-item :icon="'notifications-outline'" :route="'account.notifications'">
            {{ __('Notifications') }}
        </x-sidebar-item>

        <x-sidebar-item :icon="'book-outline'" :route="'account.booking'">
            {{ __('Bookings') }}
        </x-sidebar-item>

        <x-sidebar-item :icon="'wallet-outline'" :route="'account.wallet'">
            {{ __('Wallet') }}
        </x-sidebar-item>

        <x-sidebar-item :icon="'star-outline'" :route="'account.reviews'">
            {{ __('Reviews') }}
        </x-sidebar-item>
    </x-sidebar-items-group>

    <ul class="lg:text-sm space-y-2 lg:hidden ">
        <li class="text-gray-600 font-bold opacity-75 p-3 "> Account</li>

        <li class="border-l-4 border-transparent  hover:border-whujo hover:bg-gray-200 transition-500">
            <a href="" class="inline-flex items-center py-2 px-6 space-x-2">
                <span class="h-5">
                    <x-icon-share class="h-full" /></span>
                <span> Share a...</span>
            </a>
        </li>

        <li class="border-l-4 border-transparent  hover:border-whujo hover:bg-gray-200 transition-500">
            <a href="{{ route('service.index') }} class=" inline-flex items-center py-2 px-6 space-x-2">
                <span class="h-5">
                    <x-icon-construct-outline class="h-full" /></span>
                <span> Servicios</span>
            </a>
        </li>

        <li class="border-l-4 border-transparent  hover:border-whujo hover:bg-gray-200 transition-500">
            <a href="" class="inline-flex items-center py-2 px-6 space-x-2">
                <span class="h-5">
                    <x-icon-expand-outline class="h-full" /></span>
                <span> Experiencias</span>
            </a>
        </li>

    </ul>

    <ul class="lg:text-sm space-y-2">
        <li class="text-gray-600 font-bold opacity-75 p-3 "> Account</li>

        <li class="border-l-4 border-transparent  hover:border-whujo hover:bg-gray-200 transition-500">
            <a href="{{ route('account.setup') }}" class="inline-flex items-center py-2 px-6 space-x-2">
                <span class="h-5">
                    <x-icon-settings-outline class="h-full" /></span>
                <span> Configuracion</span>
            </a>
        </li>

        <li class="border-l-4 border-transparent  hover:border-whujo hover:bg-gray-200 transition-500">
            <a href="{{ route('account.security') }}" class="inline-flex items-center py-2 px-6 space-x-2">
                <span class="h-5">
                    <x-icon-shield-outline class="h-full" /></span>
                <span> Seguridad</span>
            </a>
        </li>

        <li class="border-l-4 border-transparent  hover:border-whujo hover:bg-gray-200 transition-500">
            <a href="" class="inline-flex items-center py-2 px-6 space-x-2">
                <span class="h-5">
                    <x-icon-power-outline class="h-full" /></span>
                <span> Cerrar Sesión</span>
            </a>
        </li>

    </ul>

</div>
