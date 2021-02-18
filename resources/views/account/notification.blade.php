@extends('account.dashtest')

@section('content')

<div class="h-16 flex items-center justify-between px-8">
    <h1 class="text-2xl">Notificaciones</h1>
    <ul class="flex items-center text-xs">
        <li><a href="">Dashboard</a></li>
        <li>
            <x-icon-chevron-forward class="w-full h-3 mt-0.5" />
        </li>
        <li>Notificaciones</li>
    </ul>
</div>
<div class="bg-gray-50 rounded-lg h-96 ">
    <div class="w-full h-12 border-b"></div>
    <ul>
        <li class="border-b h-12 flex items-center px-8">
            <div class="flex-initial h-8 w-8 rounded-full bg-gray-500 border-white"></div>
            <div class="flex-grow">
                <div class="flex">
                    <div class="text-sm">Nombre Usuario</div>
                    <div class="text-sm">Tipo</div>
                </div>
                <div class="flex text-sm">
                    <div><x-icon-arrow-redo class="w-full h-6"/></div>
                    <div>Asunto del mensaje</div>
                </div>
            </div>
            <div class="flex-initial self-start">
                <span class="bg-gray-200 rounded-full text-xs px-4 py-1 text-gray-400">15 min</span>
            </div>
        </li>
    </ul>
</div>

@endsection
