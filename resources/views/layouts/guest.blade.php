<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="icon" href="/favicon.png" type="image/png"/>
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/apple-touch-icon-72x72-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/apple-touch-icon-114x114precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/apple-touch-icon-144x144-precomposed.png" />
        <meta name="msapplication-TileImage" content="/favicon.png" />
        <meta name="msapplication-TileColor" content="#E32a2e" />
        <link rel="fluid-icon" href="http://whujo.test/favicon.png" title="whujo" />

        <title>{{ config('app.name', 'whujo') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/embla.css') }}">

        @stack('styles')

    </head>

    <body>

        <x-navbar />

        <div class="antialiased relative">
            {{ $slot }}
        </div>

        <x-footer />

        @stack('scripts')
        <script src="{{ asset('js/app.js') }}"></script>

    </body>

</html>
