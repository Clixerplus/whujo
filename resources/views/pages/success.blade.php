<x-app-nonav-layout>

    <div class="flex flex-col items-center justify-center w-full h-screen animate-pulse">
        <div
            class="flex flex-col items-center justify-center max-w-xl px-20 py-8 space-y-4 text-center border rounded-md shadow ">
            <x-icon-checkmark-circle class="w-24 h-24 -mt-20 text-green-400 bg-gray-100" />
            <h1 class="text-4xl font-bold text-green-200 opacity-75">Success</h1>
            <p class="text-gray-600">{{ __('Your account has been linked successfully') }}</p>
        </div>

        <p class="mt-8 text-gray-400">You will be redirected</p>
    </div>

</x-app-nonav-layout>
