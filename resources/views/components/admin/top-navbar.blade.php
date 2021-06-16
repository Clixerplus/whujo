<div class="h-16 bg-white border-b ">
    <navbar>
        <ul class="flex items-center w-full h-full gap-4 px-12">
            <li>
                <a href="{{ route('service.index') }}"
                    class="px-8 py-2 transition-all duration-300 ease-in-out hover:rounded hover:bg-primary hover:text-white">
                    {{ __('Services') }}
                </a>
            </li>
            <li>
                <a href="{{ route('experience.index') }}"
                    class="px-8 py-2 transition-all duration-300 ease-in-out hover:rounded hover:bg-primary hover:text-white">
                    {{ __('Experiences') }}
                </a>
            </li>
            <li>
                <a href="{{ route('shareACoffee.index') }}"
                    class="px-8 py-2 transition-all duration-300 ease-in-out hover:rounded hover:bg-primary hover:text-white">
                    {{ __('Share a coffee') }}
                </a>
            </li>
            <li class="relative ml-auto">
                <span
                    class="absolute z-20 inline-flex w-2 h-2 rounded-full opacity-100 right-1.5 top-1.5 bg-primary"></span>
                <span
                    class="absolute z-20 inline-flex w-2 h-2 rounded-full opacity-75 right-1.5 top-1.5 bg-primary animate-ping"></span>

                <div class="relative" x-data="{ openDropdown: false}">
                    <!-- Dropdown toggle button -->
                    <button @click="openDropdown = !openDropdown"
                        class="relative z-10 block p-2 bg-white rounded-md hover:border dark:bg-gray-800 focus:outline-none">
                        <svg class="w-5 h-5 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div x-show="openDropdown"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform scale-90"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-90"
                        class="absolute right-0 z-20 mt-2 overflow-hidden bg-white rounded-md shadow-lg w-80 dark:bg-gray-800">
                        <div class="py-2">
                            <a href="#"
                                class="flex items-center px-4 py-3 -mx-2 transition-colors duration-200 transform border-b hover:bg-gray-100 dark:hover:bg-gray-700 dark:border-gray-700">
                                <img class="object-cover w-8 h-8 mx-1 rounded-full"
                                    src="{{ asset('images/avatars/avatar02.jpeg') }}"
                                    alt="avatar">
                                <p class="mx-2 text-sm text-gray-600 dark:text-white">
                                    <span class="font-bold">Sara Salah</span> replied on the <span
                                        class="font-bold text-blue-500" >request service</span> . 2m
                                </p>
                            </a>
                            <a href="#"
                                class="flex items-center px-4 py-3 -mx-2 transition-colors duration-200 transform border-b hover:bg-gray-100 dark:hover:bg-gray-700 dark:border-gray-700">
                                <img class="object-cover w-8 h-8 mx-1 rounded-full"
                                    src="{{ asset('images/avatars/avatar01.jpeg') }}"
                                    alt="avatar">
                                <p class="mx-2 text-sm text-gray-600 dark:text-white">
                                    <span class="font-bold" href="#">Slick Net</span> start following you . 45m
                                </p>
                            </a>
                            <a href="#"
                                class="flex items-center px-4 py-3 -mx-2 transition-colors duration-200 transform border-b hover:bg-gray-100 dark:hover:bg-gray-700 dark:border-gray-700">
                                <img class="object-cover w-8 h-8 mx-1 rounded-full"
                                    src="{{ asset('images/avatars/avatar03.jpeg') }}"
                                    alt="avatar">
                                <p class="mx-2 text-sm text-gray-600 dark:text-white">
                                    <span class="font-bold" >Jane Doe</span> Like Your <span
                                        class="font-bold text-blue-500" >Experience name</span> product . 1h
                                </p>
                            </a>
                            <a href="#"
                                class="flex items-center px-4 py-3 -mx-2 transition-colors duration-200 transform hover:bg-gray-100 dark:hover:bg-gray-700">
                                <img class="object-cover w-8 h-8 mx-1 rounded-full"
                                    src="{{ asset('images/avatars/avatar04.jpeg') }}"
                                    alt="avatar">
                                <p class="mx-2 text-sm text-gray-600 dark:text-white">
                                    <span class="font-bold" href="#">Abigail Bennett</span> start following you . 3h
                                </p>
                            </a>
                        </div>
                        <a href="{{ route('admin.notifications') }}"
                            class="block py-2 font-bold text-center text-white bg-gray-800 dark:bg-gray-700 hover:underline">See
                            all notifications</a>
                    </div>
                </div>
            </li>
            <li>
                <x-admin::dropdown-avatar />
            </li>
        </ul>
    </navbar>
</div>
