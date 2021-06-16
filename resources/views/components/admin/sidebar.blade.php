<div class="flex flex-col w-full h-full overflow-y-auto">

    <div class="flex items-center justify-between h-16 py-4 pl-12 pr-8">
        <a href="{{ route('admin.dashboard') }}">
            <x-whujo class="w-full h-auto text-4xl text-primary" />
        </a>
        <button @click="sidebarOpen = !sidebarOpen" class="focus:outline-none lg:hidden">
            <x-icon-close class="w-8 h-8 mt-1 text-gray-400" />
        </button>
    </div>

    <ul class="flex-1 pt-8 ">
        <li class="px-8 py-2 ">
            <a href="{{ route('admin.dashboard') }}"
                class="inline-flex w-full h-full p-2 pl-4 space-x-4 font-semibold rounded text-secondary ">
                <x-icon-world class="w-6 h-auto" />
                <span>{{ __('Products') }}</span>
            </a>
        </li>
        <li class="px-8 py-2 ">
            <a href="{{ route('admin.bookings') }}"
                class="inline-flex w-full h-full p-2 pl-4 space-x-4 font-semibold rounded text-secondary ">
                <x-icon-calendar class="w-6 h-auto" />
                <span>{{ __('Bookings') }}</span>
            </a>
        </li>
        <li class="px-8 py-2 ">
            <a href="{{ route('admin.settings') }}"
                class="inline-flex w-full h-full p-2 pl-4 space-x-4 font-semibold rounded text-secondary ">
                <x-icon-person class="w-6 h-auto" />
                <span>Profile</span>
            </a>
        </li>
        <li class="px-8 py-2 ">
            <a href="{{ route('admin.security') }}"
                class="inline-flex w-full h-full p-2 pl-4 space-x-4 font-semibold rounded text-secondary ">
                <x-icon-shield-checkmark class="w-6 h-auto" />
                <span>Security</span>
            </a>
        </li>
        <li class="px-8 py-2 ">
            <form method="POST" action="{{ route('logout') }}" class="h-full">
                @csrf
                <button onclick="event.preventDefault(); this.closest('form').submit();"
                    class="inline-flex w-full h-full p-2 pl-4 space-x-4 font-semibold rounded text-secondary ">
                    <x-icon-power-outline class="w-6 h-auto" />
                    <span>{{ __('Logout') }}</span>
                </button>
            </form>
        </li>

    </ul>

</div>
