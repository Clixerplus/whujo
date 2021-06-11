<x-jet-dropdown align="right" width="48">
    <x-slot name="trigger">
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
        <button
            class="flex text-sm transition duration-150 ease-in-out border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300">
            <img class="object-cover w-10 h-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}"
                alt="{{ Auth::user()->name }}" />
        </button>
        @else
        <button
            class="flex items-center text-sm font-medium text-gray-500 transition duration-150 ease-in-out hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300">
            <div>{{ Auth::user()->name }}</div>

            <div class="ml-1">
                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </div>
        </button>
        @endif
    </x-slot>

    <x-slot name="content">
        <!-- Account Management -->
        <div class="block px-4 py-2 text-xs text-gray-400">
            {{ __('Manage Account') }}
        </div>

        <x-jet-dropdown-link href="{{ route('admin.dashboard') }}">
            <span class="text-gray-600">{{ __('Settings') }}</span>
        </x-jet-dropdown-link>

        <x-jet-dropdown-link href="{{ route('admin.settings') }}">
            <span class="text-gray-600">{{ __('Profile') }}</span>
        </x-jet-dropdown-link>

        <x-jet-dropdown-link href="{{ route('admin.reviews') }}">
            <span class="text-gray-600">{{ __('Reviews') }}</span>
        </x-jet-dropdown-link>

        <x-jet-dropdown-link href="{{ route('admin.notifications') }}">
            <span class="text-gray-600">{{ __('Notifications') }}</span>
            <span class="px-3 py-0.5 ml-4 text-xs text-green-800 bg-green-200 rounded-2xl">4</span>
        </x-jet-dropdown-link>


        <div class="border-t border-gray-100"></div>
        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                            this.closest('form').submit();">
                <span class="text-gray-600">{{ __('Logout') }}</span>
            </x-jet-dropdown-link>
        </form>
    </x-slot>
</x-jet-dropdown>
