@extends('layouts.backoffice')

@section('content')



    <div class="p-4 space-y-4 " x-data="{isFinished:false}" x-init="$nextTick(()=>isFinished=true)">

        @if(session()->has('isFinished'))
            <div x-show="isFinished" x-cloak x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform -translate-y-full"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform translate-y-0"
                x-transition:leave-end="opacity-0 transform -translate-y-full"
                class="absolute inset-x-0 top-0 z-30 flex items-center justify-center h-16 px-4 text-2xl bg-success">
                <span class="ml-auto">{{ session()->get('isFinished') }}</span>
                <button type="button" @click="isFinished = false" class="ml-auto">
                    <x-icon-close class="w-auto h-6 text-green-600 " />
                </button>
            </div>
        @endif

        @if(session()->has('isDeleted'))
        <div x-show="isFinished" x-cloak x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform -translate-y-full"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 transform translate-y-0"
            x-transition:leave-end="opacity-0 transform -translate-y-full"
            class="absolute inset-x-0 top-0 z-30 flex items-center justify-center h-16 px-4 text-2xl bg-success">
            <span class="ml-auto text-base">Producto ha sido eliminado</span>
            <button type="button" @click="isFinished = false" class="ml-auto">
                <x-icon-close class="w-auto h-6 text-green-600 " />
            </button>
        </div>
    @endif
        <div class="mr-6">
            <h2 class="mb-1 text-3xl font-semibold leading-7 tracking-tight truncate md:text-4xl md:leading-10"
                @click="isFinished=!isFinished">
                {{ __('List of ' . $productType) }}
            </h2>
            <div class="tracking-tight text-gray-600 font-base">
                Lorem ipsum is placeholder text commonly used in the graphic.
            </div>
        </div>

        <div class="w-full divide-y rounded-md shadow bg-gray-50 ">
            <ul class="grid grid-cols-1 gap-4 mt-8 ">
                @foreach ($products as $product)
                    <li class="flex flex-col">
                        <x-list-index-card :product="$product" :productType="$productType" />
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
