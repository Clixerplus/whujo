<x-app-nonav-layout>

    <div class="flex flex-col items-center justify-center w-full h-screen animate-pulse">
        <div
            class="flex flex-col items-center justify-center max-w-xl px-20 py-8 space-y-4 text-center border border-red-300 rounded-md shadow">
            <x-icon-close class="w-24 h-24 -mt-20 text-white bg-red-400 rounded-full " />
            <h1 class="text-4xl font-bold text-green-200 opacity-75">Failed</h1>
            <p class="text-gray-600">
                {{ __('Something went wrong and communication with the platform has been lost.') }}
            </p>
        </div>

        <p class="mt-8 text-gray-600">{{ __('Please try again.') }}</p>
    </div>

</x-app-nonav-layout>
