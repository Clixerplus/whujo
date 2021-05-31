<h1 class="text-3xl font-bold text-secondary md:text-4xl lg:text-5xl">{{ $slot }}</h1>

@isset($subtitle)
<x-separator class="mx-auto" />
<x-subtitle>{{ $subtitle  }}</x-subtitle>
@endisset
