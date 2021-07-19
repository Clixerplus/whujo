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


    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @stack('styles')

    @livewireStyles

    {{-- UI blade-icons css --}}
    {{-- @bukStyles(true) --}}
</head>
<body>

    <x-navbar-top />

    <div class="relative overflow-x-hidden antialiased" id="app">
        {{ $slot }}
    </div>

    <x-footer />

    {{-- Livewire scripts --}}
    @livewireScripts
    {{-- App scripts --}}
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- Embla CDN scripts --}}
    <script src="https://unpkg.com/embla-carousel/embla-carousel.umd.js"></script>

    {{-- UI blade-icons scripts --}}
    {{-- @bukScripts(true) --}}

    {{-- View stack scripts --}}
    @stack('scripts')

    <script type="text/javascript">
        // Grab wrapper nodes
        /* const rootNode = document.querySelector('.embla')
        const viewportNode = rootNode.querySelector('.embla__viewport')
        // Initialize the carousel
        const embla = EmblaCarousel(viewportNode, {
            loop: true
        }) */
    </script>

</body>

</html>
