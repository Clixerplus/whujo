<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="/favicon.png" type="image/png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/apple-touch-icon-72x72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/apple-touch-icon-114x114precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/apple-touch-icon-144x144-precomposed.png" />
    <meta name="msapplication-TileImage" content="/favicon.png" />
    <meta name="msapplication-TileColor" content="#E32a2e" />
    <link rel="fluid-icon" href="http://whujo.test/favicon.png" title="whujo" />

    <title>{{ config('app.name', 'whujo') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/embla.css') }}">

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>



    @stack('styles')

    @livewireStyles
    @bukStyles(true)
</head>

<body>

    {{-- <x-navbar /> --}}
    <div class="flex items-center justify-between w-full h-16 px-4">
        <x-button class="px-2 text-gray-400 border">
            <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </x-button>

        <a href="{{ route('home') }}" aria-label="whujo" title="whujo">
            <span class="text-4xl font-bold tracking-wide font-whujo text-primary">whujo</span>
        </a>


        <a href="{{ route('login') }}">Login</a>
    </div>


    <div class="relative antialiased">
        {{ $slot }}
    </div>

    <x-footer />

    @stack('scripts')
    <script src="{{ asset('js/app.js') }}"></script>

    @livewireScripts
    @bukScripts(true)
</body>

</html>
