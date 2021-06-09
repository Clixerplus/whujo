<x-admin-layout>

    <div class="flex flex-col items-center px-6 py-8 space-y-2 lg:flex-row lg:justify-between">
        <ul class="flex items-center space-x-1 text-sm text-gray-500">
            <li><a href="{{ route('account.dashboard') }}" class="hover:text-gray-900">Dahsboard</a></li>
            <li>
                <x-icon-chevron-forward class="w-auto h-3" />
            </li>
            <li>Notificaciones</li>
        </ul>

    </div>

    <div class="px-4">
        <div class="bg-white divide-y rounded-md shadow ">

            <h2 class="p-4 font-bold">Inbox</h2>


            <ul class="divide-y">

                @foreach ($reviews as $review)

                    <li class="flex items-center px-8 py-4 space-x-8">


                        <div
                            class="flex flex-initial text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300">
                            <img class="object-cover w-16 h-16 rounded-full" src="{{ $review->profile_photo_url }}"
                                alt="{{ $review->name }}" />
                        </div>


                        <div class="flex-1 space-y-2">
                            <div>
                                <span class="text-gray-900">{{ $review->name }}</span>
                            </div>

                            <div class="space-y-2 md:flex md:space-x-2 md:space-y-0 sm:justify-between sm:w-full">
                                <div>
                                    <span class="px-3 py-1 text-xs text-gray-500 bg-gray-200 rounded-full">
                                        Lorem ipsum dolor sit.
                                    </span>
                                </div>

                                <div>
                                    <span class="px-3 py-1 text-xs text-gray-500 bg-gray-200 rounded-full">
                                        {{ now()->subMinutes(rand(1, 100000))->diffForHumans() }}
                                    </span>
                                </div>
                            </div>

                            <div class="flex items-center space-x-2">
                                <x-icon-arrow-redo class="w-auto h-8 text-gray-400" />
                                <a href="" class="text-gray-700 hover:text-third-cinnabar font-extralight">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum tempora dolores
                                    voluptate eaque illo corrupti magnam fugit accusamus, quam error, est quibusdam
                                    odio, voluptatem provident.
                                </a>
                            </div>
                        </div>

                    </li>
                @endforeach

            </ul>

        </div>
    </div>

    <div class="flex my-8 space-x-3">

    </div>

</x-admin-layout>
