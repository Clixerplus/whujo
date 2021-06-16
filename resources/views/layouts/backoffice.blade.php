<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles
    @stack('styles')

    <script src="{{ mix('js/app.js') }}" defer></script>

</head>

<body x-data="{ sidebarOpen : false }">

    <div class="fixed inset-0 z-10 w-full pt-4 bg-white md:w-2/5 lg:hidden" x-show="sidebarOpen"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform -translate-x-full"
        x-transition:enter-end="opacity-100 transform translate-x-0"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 transform translate-x-0"
        x-transition:leave-end="opacity-0 transform -translate-x-full">
        <x-admin::sidebar />
    </div>

    <div class="w-screen min-h-screen pb-16 lg:pb-0 lg:flex" >
        <div class="hidden h-screen pt-4 overflow-y-auto bg-white border-r lg:w-1/5 lg:block">
            <x-admin::sidebar />
        </div>

        <div class="w-screen h-auto lg:w-4/5">
            <div class="hidden lg:block">
                <x-admin::top-navbar />
            </div>
            <div class="p-4 lg:p-8">
                @yield('content')
            </div>
        </div>
    </div>

    <div class="fixed bottom-0 left-0 z-20 w-screen h-12 bg-white shadow lg:hidden">
        <x-admin::bottom-navbar />
    </div>

    @stack('scripts')

    @livewireScripts
</body>

</html>
