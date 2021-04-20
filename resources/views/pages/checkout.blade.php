<x-guest-layout>
    <!-- component -->
    @push('scripts')
    <script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>
    @endpush
    <div class="flex items-center justify-center h-screen">
        <script src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
            data-preference-id="{{ $preference->id }}" data-public-key="APP_USR-f84f2a7d-0061-4855-af9e-c9ec774856ed">

        </script>
        {{--
    <form action="{{ route('payment') }}" method="POST" class="border rounded-full">
        @csrf
        <script src="https://www.mercadopago.com.ar/integrations/v1/web-tokenize-checkout.js"
            data-public-key="APP_USR-f84f2a7d-0061-4855-af9e-c9ec774856ed" data-transaction-amount="100.00">
        </script> --}}
        </form>
    </div>

    {{--
<div x-data="{ cartOpen: true , isOpen: false }" class="bg-white">
    <header>
        <div class="container px-6 py-3 mx-auto">
            <div class="flex items-center justify-between">

                <div class="flex items-center justify-end w-full">
                    <button @click="cartOpen = !cartOpen" class="mx-4 text-gray-600 focus:outline-none sm:mx-0">
                        <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </button>

                    <div class="flex sm:hidden">
                        <button @click="isOpen = !isOpen" type="button"
                            class="text-gray-600 hover:text-gray-500 focus:outline-none focus:text-gray-500"
                            aria-label="toggle menu">
                            <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                                <path fill-rule="evenodd"
                                    d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <x-cart/>

    <main class="my-8">
        <div class="container px-6 mx-auto">
            <h3 class="text-2xl font-medium text-gray-700">Checkout</h3>
            <div class="flex flex-col mt-8 lg:flex-row">
                <div class="order-2 w-full lg:w-1/2">
                    <div class="flex items-center">
                        <button class="flex text-sm text-blue-500 focus:outline-none"><span
                                class="flex items-center justify-center w-5 h-5 mr-2 text-white bg-blue-500 rounded-full">1</span>
                            Contacts</button>
                        <button class="flex ml-8 text-sm text-gray-700 focus:outline-none"><span
                                class="flex items-center justify-center w-5 h-5 mr-2 border-2 border-blue-500 rounded-full">2</span>
                            Shipping</button>
                        <button class="flex ml-8 text-sm text-gray-500 focus:outline-none" disabled><span
                                class="flex items-center justify-center w-5 h-5 mr-2 border-2 border-gray-500 rounded-full">3</span>
                            Payments</button>
                    </div>
                    <form class="mt-8 lg:w-3/4">
                        <div>
                            <h4 class="text-sm font-medium text-gray-500">Delivery method</h4>
                            <div class="mt-6">
                                <button
                                    class="flex items-center justify-between w-full p-4 bg-white border-2 border-blue-500 rounded-md focus:outline-none">
                                    <label class="flex items-center">
                                        <input type="radio" class="w-5 h-5 text-blue-600 form-radio" checked><span
                                            class="ml-2 text-sm text-gray-700">MS Delivery</span>
                                    </label>

                                    <span class="text-sm text-gray-600">$18</span>
                                </button>
                                <button
                                    class="flex items-center justify-between w-full p-4 mt-6 bg-white border rounded-md focus:outline-none">
                                    <label class="flex items-center">
                                        <input type="radio" class="w-5 h-5 text-blue-600 form-radio"><span
                                            class="ml-2 text-sm text-gray-700">DC Delivery</span>
                                    </label>

                                    <span class="text-sm text-gray-600">$26</span>
                                </button>
                            </div>
                        </div>
                        <div class="mt-8">
                            <h4 class="text-sm font-medium text-gray-500">Delivery address</h4>
                            <div class="flex mt-6">
                                <label class="block w-3/12">
                                    <select class="block w-full mt-1 text-gray-700 form-select">
                                        <option>NY</option>
                                        <option>DC</option>
                                        <option>MH</option>
                                        <option>MD</option>
                                    </select>
                                </label>
                                <label class="flex-1 block ml-3">
                                    <input type="text" class="block w-full mt-1 text-gray-700 form-input"
                                        placeholder="Address">
                                </label>
                            </div>
                        </div>
                        <div class="mt-8">
                            <h4 class="text-sm font-medium text-gray-500">Date</h4>
                            <div class="flex mt-6">
                                <label class="flex-1 block">
                                    <input type="date" class="block w-full mt-1 text-gray-700 form-input"
                                        placeholder="Date">
                                </label>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-8">
                            <button
                                class="flex items-center text-sm font-medium text-gray-700 rounded hover:underline focus:outline-none">
                                <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
                                </svg>
                                <span class="mx-2">Back step</span>
                            </button>
                            <button
                                class="flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                <span>Payment</span>
                                <svg class="w-5 h-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </button>


                        </div>
                    </form>
                </div>
                <div class="flex-shrink-0 order-1 w-full mb-8 lg:w-1/2 lg:mb-0 lg:order-2">
                    <div class="flex justify-center lg:justify-end">
                        <div class="w-full max-w-md px-4 py-3 border rounded-md">
                            <div class="flex items-center justify-between">
                                <h3 class="font-medium text-gray-700">Order total (2)</h3>
                                <span class="text-sm text-gray-600">Edit</span>
                            </div>
                            <div class="flex justify-between mt-6">
                                <div class="flex">
                                    <img class="object-cover w-20 h-20 rounded"
                                        src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1189&q=80"
                                        alt="">
                                    <div class="mx-3">
                                        <h3 class="text-sm text-gray-600">Mac Book Pro</h3>
                                        <div class="flex items-center mt-2">
                                            <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                                                <svg class="w-5 h-5" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path
                                                        d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z">
                                                    </path>
                                                </svg>
                                            </button>
                                            <span class="mx-2 text-gray-700">2</span>
                                            <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                                                <svg class="w-5 h-5" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <span class="text-gray-600">20$</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-4">
            <img src="https://imgmp.mlstatic.com/org-img/banners/ar/medios/online/785X40.jpg"
                title="Mercado Pago - Medios de pago" alt="Mercado Pago - Medios de pago" width="785" height="40" />
        </div>
    </main>
</div> --}}
</x-guest-layout>
