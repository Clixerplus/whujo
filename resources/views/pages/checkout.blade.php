<x-app-nonav-layout>
    <!-- component -->
    @push('scripts')
    <script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>
    @endpush
    {{-- <div class="flex items-center justify-center h-screen">
        <script src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
            data-preference-id="{{ $preference->id }}" data-public-key="APP_USR-f84f2a7d-0061-4855-af9e-c9ec774856ed">

    </script>

    <form action="{{ route('payment') }}" method="POST" class="border rounded-full">
        @csrf
        <script src="https://www.mercadopago.com.ar/integrations/v1/web-tokenize-checkout.js"
            data-public-key="APP_USR-f84f2a7d-0061-4855-af9e-c9ec774856ed" data-transaction-amount="100.00">
        </script>
    </form>
    </div> --}}


    <div x-data="{ step: 1 }" class="flex flex-col h-screen overflow-hidden overflow-y-auto">
        <header class="flex items-center w-full h-16 bg-primary">
            <div class="container px-6 py-3 mx-auto">
                <h1 class="text-3xl text-white font-whujo">whujo</h1>
            </div>
        </header>

        {{-- <x-cart /> --}}

        <main>
            <div class="flex w-full h-full">
                <div class="flex flex-col justify-between w-2/3 h-full p-8 bg-gray-200">
                    <div class="flex items-center pb-4 pl-4 border-b">
                        <button @click="step=1" class="flex items-center text-sm text-secondary focus:outline-none"><span
                                class="flex items-center justify-center w-5 h-5 mr-2 border rounded-full text-primary border-primary">1</span>
                            Methods</button>
                        <button @click="step=2" class="flex ml-8 text-sm text-gray-500 focus:outline-none" disabled><span
                                class="flex items-center justify-center w-5 h-5 mr-2 border-2 border-gray-500 rounded-full">3</span>
                            Payments</button>
                    </div>

                    <div x-show="step===1" class="flex flex-col justify-between h-full pb-12 lg:w-3/4">
                        <form class="flex flex-col justify-between mt-8 lg:w-3/4">
                            <div>
                                <h4 class="text-sm font-medium text-gray-500">
                                    {{ __('Choose a payment gateway') }}
                                </h4>
                                <div class="mt-6">
                                    <button
                                        class="flex items-center justify-between w-full p-4 bg-white border-2 border-blue-500 rounded-md focus:outline-none">
                                        <label class="flex items-center">
                                            <input type="radio" class="w-5 h-5 text-blue-600 form-radio" checked><span
                                                class="ml-2 text-sm text-gray-700">{{ __('Mercadopago') }}</span>
                                        </label>

                                        <img src="{{ asset('images/logos/mercadopago-logo_1.png') }}" width="96" alt="">
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="flex items-center justify-between mt-8">
                            <a href="{{ back() }}"
                                class="flex items-center text-sm font-medium text-gray-700 rounded hover:underline focus:outline-none">
                                <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
                                </svg>
                                <span class="mx-2">Back step</span>
                            </a>
                            <button @click="step=2"
                                class="flex items-center px-3 py-2 text-sm font-medium text-white bg-green-400 rounded-md hover:bg-green-600 focus:outline-none focus:bg-green-600">
                                <span>{{ __('Next') }}</span>
                                <svg class="w-5 h-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </button>
                        </div>

                    </div>

                    <div x-show="step===2" class="h-full lg:w-3/4">
                        <x-datepicker name="date" class="w-1/4" />

                        <div class="flex items-center justify-between mt-8">
                            <button @click="step=1"
                                class="flex items-center text-sm font-medium text-gray-700 rounded hover:underline focus:outline-none">
                                <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
                                </svg>
                                <span class="mx-2">Back step</span>
                            </button>


                            <script src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
                                data-preference-id="{{ $preference->id }}">
                            </script>

                            
                        </div>
                    </div>


                    <div class="py-4 text-center ">
                        <img src="https://imgmp.mlstatic.com/org-img/banners/ar/medios/online/785X40.jpg"
                            title="Mercado Pago - Medios de pago" alt="Mercado Pago - Medios de pago" width="785"
                            height="40" />
                    </div>
                </div>


                <div class="w-1/3 p-8">
                    <div class="flex justify-center lg:justify-end">
                        <div class="w-full max-w-md px-4 py-3 border rounded-md">
                            <div class="flex items-center justify-between">
                                <h3 class="font-medium text-gray-700">Order total (1)</h3>
                                <span class="text-sm text-gray-600">Edit</span>
                            </div>
                            <div class="flex justify-between mt-6">
                                <div class="flex space-x-4">
                                    <img class="object-cover w-32 h-32 rounded" src="{{ $service->photos[0] }}" alt="">
                                    <div class="pr-4 mx-3">
                                        <h3 class="text-sm font-bold text-gray-600">
                                            {{ $service->name }}
                                        </h3>
                                        <div class="flex items-center mt-2">
                                            <p class="text-xs text-gray-500">
                                                {{ Str::substr($service->description, 0, 200)  }}...
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr class="my-4">

                            <div class="flex justify-between px-2 py-4 mt-4 text-right bg-gray-50">
                                <span class="text-sm">Costo de Contratación:</span>
                                <span class="text-right text-gray-600 ">
                                    ARS {{ number_format($service->price,0,',','.') }} $
                                </span>
                            </div>
                            <div class="mt-4">
                                <span class="p-2 text-sm">
                                    Microservices ({{ $microservices->count()  }}):
                                </span>

                                <ol class="list-decimal list-inside">

                                    @forelse ($microservices as $microservice)
                                    <li
                                        class="flex items-center p-4 space-x-2 text-xs rounded @if ($loop->odd) bg-gray-50 @endif">
                                        <div class="flex-1">{{ $microservice->name }}</div>
                                        <div class="flex-initial">
                                            <span>ARS {{ number_format($microservice->price,0,',','.') }} $</span>
                                        </div>
                                    </li>
                                    @empty
                                    &nbsp;
                                </ol>
                                <span class="p-4 mt-4 text-sm text-gray-500 bg-gray-50">
                                    {{ __('You haven\'t hired any extra microservices') }}
                                </span>
                                @endforelse

                            </div>

                            <hr class="my-4">

                            <div class="flex justify-between px-2 font-bold text-right">
                                <h3>TOTAL:</h3>
                                <h3>ARS {{ number_format($total,0,',','.') }} $</h3>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </main>
    </div>
</x-app-nonav-layout>
