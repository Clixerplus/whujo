@extends('layouts.backoffice')

@section('content')
    <div class="p-4 space-y-4">
        <div class="mr-6">
            <h2 class="mb-1 text-3xl font-semibold leading-7 tracking-tight truncate md:text-4xl md:leading-10">
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
