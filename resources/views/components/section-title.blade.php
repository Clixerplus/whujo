<h1 class="text-3xl font-bold text-secondary md:text-4xl lg:text-5xl">{{ $slot }}</h1>

@isset($subtitle)
<hr class="hidden my-8 border-4 rounded w-44 border-primary md:block">
<x-subtitle>{{ $subtitle  }}</x-subtitle>
@endisset
