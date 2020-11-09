<x-guest-layout>

    <div class="wrapper grid grid-cols-3 grid-rows-1 h-screen w-screen overflow-hidden bg-gray-200">

        <div id="left" class="hidden lg:block lg:col-span-1">

            {{ $left ?? '' }}

            <div class="fixed bottom-0 mb-2 lg:ml-4">
                <h3 class="flex sm:flex-col lg:flex-row text-center text-xs text-white">
                    <a href="/" class="hover:text-blue-600">Whujo&reg</a>
                    <span>- {{__('All rights reserved.') }} -</span>
                    <span>&copy 2020</span>
                </h3>
            </div>

        </div>

        <div id="right" class="col-span-3 lg:col-span-2 px-4 overflow-y-scroll">

            {{ $right ?? '' }}

        </div>

    </div>

</x-guest-layout>
