@push('styles')
<style>
    .lside {
        background-color: #eee;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4' viewBox='0 0 4 4'%3E%3Cpath fill='%23e32a2e' fill-opacity='1' d='M1 3h1v1H1V3zm2-2h1v1H3V1z'%3E%3C/path%3E%3C/svg%3E"), linear-gradient(rgba(26, 32, 46, .7), rgba(255, 46, 49, .7)), url('images/backgrounds/bg06.jpg');
        background-repeat: repeat, repeat, no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }
</style>
@endpush
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
                        {{ $link ?? '' }}
                    </div>

                </div>
            </div>

            <div class="my-auto w-5/6 md:w-3/4 lg:w-3/5 mx-auto pt-12 lg:pt-24 pb-8 lg:pb-0">

                <div class="mb-8 ">

                    <h1 class="text-secondary font-bold text-3xl">
                        {{ $title ?? '' }}
                    </h1>

                    <div class="px-4">
                        <x-jet-validation-errors />
                    </div>

                </div>

                <div class="mb-8">

                    {{ $body ?? '' }}

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
