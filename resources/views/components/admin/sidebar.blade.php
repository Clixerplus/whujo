
<div class="fixed inset-y-0 left-0 z-20 flex flex-col h-full overflow-hidden bg-white border-r border-gray-200 shadow-xl animate-sidebar md:static rounded-r-xl lg:rounded-none lg:shadow-none "
    :class="{'open':show}">

    <div class="">
        <div class="flex h-16 ">
            <div class="flex w-48 h-full px-4 py-2 md:w-full" x-show="show">
                <x-whujo class="text-4xl font-bold ">w</x-whujo>
            </div>

            <div class="flex w-full h-full text-white " x-show="!show">
                <span class="px-2 pb-1 m-auto text-3xl font-bold rounded bg-primary">w</span>
            </div>

            <div class="w-16 h-12 md:hidden">
                <button class="flex items-center justify-center w-full h-full p-4 outline-none "
                    x-on:click="show = !show">
                    <x-icon-close class="text-gray-500 " x-show="show" />
                    <x-icon-menu-outline class="text-gray-500" x-show="!show" />
                </button>
            </div>
        </div>
    </div>

    <div class="flex-1 w-full h-16 py-4 space-y-2 overflow-y-auto ">
        <div class="">
            <ul class="space-y-3">
                <x-sidebar-item :icon="'bar-chart-outline'"  :route="'dashboard'" wire:click="loadView('dashboard')">
                    {{ __('Dashboard') }}
                </x-sidebar-item>

                <x-sidebar-item :icon="'notifications-outline'"  :route="'notifications'"  wire:click="loadView('notifications')">
                    {{ __('Notifications') }}
                </x-sidebar-item>

                <x-sidebar-item :icon="'book-outline'"  :route="'bookings'"  wire:click="loadView('bookings')">
                    {{ __('Bookings') }}
                </x-sidebar-item>

                <x-sidebar-item :icon="'star-outline'"  :route="'reviews'"  wire:click="loadView('reviews')">
                    {{ __('Reviews') }}
                </x-sidebar-item>

                <x-sidebar-item :icon="'shield-outline'"  :route="'security'"  wire:click="loadView('security')">
                    {{ __('Security') }}
                </x-sidebar-item>

                <x-sidebar-item :icon="'settings-outline'"  :route="'settings'" wire:click="loadView('settings')">
                    {{ __('Settings') }}
                </x-sidebar-item>
            </ul>
        </div>
    </div>

    <div class="w-full h-16 py-2 bg-gray-100" x-show="show">
        <div class="flex h-12 px-4">

            <form method="POST" action="{{ route('logout') }}" class="w-1/4 h-full p-1 ">
                @csrf
                <button title="{{ __('Logout') }}"
                    class="flex items-center justify-center w-full h-full p-2 rounded-lg bg-primary hover:bg-primary-light"
                    onclick="event.preventDefault(); this.closest('form').submit();">
                    <x-icon-power-outline class="h-full text-white" />
                </button>
            </form>

            <div class="w-3/4 h-full ">
                <span class="block p-2 m-auto font-light text-gray-500">{{ __('Logout') }}</span>
            </div>
        </div>
    </div>

    {{-- <div class="w-full h-16 mb-8 border-gray-200">
        <div class="flex items-center justify-between h-full px-4">
            <x-whujo class="text-4xl" x-show="show"/>
            <button class="flex items-center justify-center w-8 h-8 lg:hidden" x-on:click="show = !show">
                <x-icon-close class="text-gray-500 " />
            </button>


            <button class="items-center justify-center hidden w-8 h-8 lg:flex" x-on:click="show = !show">
                <x-icon-close class="text-gray-500 " x-show="show" />
                <x-icon-menu-outline class="text-gray-500" x-show="!show"/>
            </button>
        </div>
    </div>

    <x-sidebar-items-group class="flex-1">

        <x-sidebar-item :icon="'bar-chart-outline'" :route="'dashboard'">
            {{ __('Dashboard') }}
        </x-sidebar-item>

        <x-sidebar-item :icon="'notifications-outline'" :route="'admin.notifications'">
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

        <x-sidebar-item :icon="'shield-outline'" :route="'account.security'">
            {{ __('Security') }}
        </x-sidebar-item>

        <x-sidebar-item :icon="'settings-outline'" :route="'account.setup'">
            {{ __('Configuracion') }}
        </x-sidebar-item>

    </x-sidebar-items-group>

    <div class="flex h-12 ">
        <span class="m-auto font-light text-gray-500">{{ __('Logout') }}</span>
        <form method="POST" action="{{ route('logout') }}" class="h-full">
            @csrf
            <button title="{{ __('Logout') }}" class="flex items-center justify-center w-16 h-full p-2 bg-primary hover:bg-primary-light"
                onclick="event.preventDefault(); this.closest('form').submit();">
                <x-icon-power-outline class="h-full text-white" />
            </button>
        </form>
    </div> --}}

</div>
