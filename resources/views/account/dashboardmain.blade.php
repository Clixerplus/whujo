@extends('account.dashtest')

@section('content')
<h1 class="text-3xl font-light">Hola, Usuario!</h1>
<div class="flex space-x-8 py-4">
    <div class="w-1/4 rounded-xl h-32 bg-primary flex items-end justify-between p-6">
        <div class="text-gray-100 w-2/3">
            <h2 class="text-6xl">0</h2>
            <h3>Anuncios Activos</h3>
        </div>
        <div class="w-1/3 h-full text-white">
            <x-icon-newspaper class="w-full h-full" />
        </div>
    </div>
    <div class="w-1/4 rounded-xl h-32 bg-secondary flex items-end justify-between p-6">
        <div class="text-gray-100 w-2/3">
            <h2 class="text-6xl">0</h2>
            <h3>Reservaciones</h3>
        </div>
        <div class="w-1/3 h-full text-white">
            <x-icon-newspaper class="w-full h-full" />
        </div>
    </div>
    <div class="w-1/4 rounded-xl h-32 bg-third-orange flex items-end justify-between p-6">
        <div class="text-gray-100 w-2/3">
            <h2 class="text-6xl">0</h2>
            <h3>Rating & reviews</h3>
        </div>
        <div class="w-1/3 h-full text-white">
            <x-icon-newspaper class="w-full h-full" />
        </div>
    </div>
    <div class="w-1/4 rounded-xl h-32 bg-third-yonder flex items-end justify-between p-6">
        <div class="text-gray-100 w-2/3">
            <h2 class="text-6xl">0</h2>
            <h3>Fondos Totales</h3>
        </div>
        <div class="w-1/3 h-full text-white">
            <x-icon-newspaper class="w-full h-full" />
        </div>
    </div>
</div>

<div class="rounded-xl h-72 bg-white">5</div>
@endsection
