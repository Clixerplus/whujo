<x-guest-layout>
    <div class="flex h-screen overflow-hidden">

        <div class="lside w-1/3 hidden md:flex md:flex-col bg-white opacity-50">

            {{ $slot }}

        </div>

        <div class="rside w-full md:w-2/3 flex flex-col justify-between overflow-y-auto bg-gray-200">

            <div class="md:absolute inset-0 h-20">
                <div class="flex justify-between px-8 py-4">

                    <div class=" w-12 h-12">
                        <a href="/">
                            <x-icon-whujo class="w-3/4 text-primary" />
                        </a>
                    </div>

                    <div class="flex flex-col items-end gap-x-4 gap-y-2 md:flex-row  md:items-center text-sm">
                        {{ $link }}
                    </div>

                </div>
            </div>

            <div class="my-auto w-5/6 md:w-3/4 lg:w-3/5 mx-auto pt-12 lg:pt-24 pb-8 lg:pb-0">

                <div class="mb-8 ">

                    <h1 class="text-secondary font-bold text-3xl">
                        {{ $title }}
                    </h1>

                    <div class="px-4">
                        <x-jet-validation-errors />
                    </div>

                    {{-- SESSION STATUS --}}
                    @if (session('status'))
                    <div class=" font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                    @endif

                </div>

                <div class="mb-8">

                    {{ $form }}

                </div>

            </div>

            <div class="md:absolute inset-x-0 bottom-0 h-10 px-8 text-sm bg-gray-200 md:bg-transparent">
                <div class="text-center md:text-left py-2 text-cool-gray-600">
                    <span class="font-wujo">Whujo&reg;</span>
                    <span> - </span>
                    <span>Todos los derechos reservados&copy;</span>
                </div>
            </div>

        </div>

    </div>
</x-guest-layout>
