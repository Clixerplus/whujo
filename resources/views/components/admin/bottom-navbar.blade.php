<ul class="flex items-center justify-around w-4/5 py-1 mx-auto bg-white">
    <li class="w-1/4 h-12 p-3 active:shadow text-secondary active:text-gray-600">
        <x-icon-world class="w-auto h-full mx-auto " />
    </li>
    <li class="w-1/4 h-12 p-3 active:shadow text-secondary active:text-gray-600">
        <a href="{{ route('admin.bookings') }}">
            <x-icon-calendar class="w-auto h-full mx-auto " />
        </a>
    </li>
    <li class="w-1/4 h-12 p-3 active:shadow text-secondary active:text-gray-600">
        <a href="{{ route('admin.notifications') }}">
        <svg class="w-auto h-full mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
            fill="currentColor">
            <path
                d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
        </svg>
        </a>
    </li>
    <li class="w-1/4 h-12 p-1 active:shadow text-secondary active:text-gray-600" @click="sidebarOpen = !sidebarOpen">
        <x-icon-menu-outline class="w-auto h-full mx-auto " />
    </li>
</ul>
