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

    <x-navbar-top />

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
