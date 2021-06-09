<div class="relative h-full">
    <h2 class="relative h-16 p-4 mt-2 mb-16 text-3xl font-bold">
        <x-whujo />
        <button
            class="absolute inset-y-0 right-0 flex items-center justify-center w-10 h-12 my-auto text-white hover:bg-primary-light rounded-l-xl bg-primary">
            <x-icon-chevron-forward class="w-5 h-5 transform rotate-180 " />
        </button>
    </h2>

    <x-sidebar-items-group>

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

        <x-sidebar-item :icon="'shield-outline'" :route="'account.security'">
            {{ __('Security') }}
        </x-sidebar-item>

        <x-sidebar-item :icon="'settings-outline'" :route="'account.setup'">
            {{ __('Configuracion') }}
        </x-sidebar-item>

    </x-sidebar-items-group>

    <div class="absolute inset-x-0 flex items-center h-12 space-x-4 text-white bg-gray-200 bottom-2">

        <form method="POST" action="{{ route('logout') }}" class="h-full">
            @csrf
            <button title="{{ __('Logout') }}" class="flex w-12 h-full rounded-r bg-primary hover:bg-primary-light"
                onclick="event.preventDefault(); this.closest('form').submit();">
                <x-icon-power-outline class="w-6 h-6 m-auto" />
            </button>
        </form>

        <span class="m-auto font-light text-gray-500">{{ __('Logout') }}</span>
    </div>
</div>
