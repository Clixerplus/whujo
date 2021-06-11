<div class="fixed flex items-center w-full h-16 px-4 bg-opacity-0 border-r bg-gray-50">
    <div>
        <button class="flex items-center justify-center w-8 h-8 " x-on:click="show = !show">
            <x-icon-close class="text-gray-500 " x-show="show" />
            <x-icon-menu-outline class="text-gray-500" x-show="!show" />
        </button>
    </div>

    <div x-data="{ open : false }">
        <div class="bg-white ">
            <div class="container px-4 py-4 mx-auto">
                <div class="flex justify-between">
                    <div class="flex justify-center">
                        <a
                            class="flex items-center px-3 py-1 mr-3 font-medium text-white bg-red-500 border rounded">Loa
                            Status</a>
                        <a
                            class="flex items-center px-3 py-1 mr-3 font-medium text-gray-700 border rounded">Shipment</a>
                        <a
                            class="flex items-center px-3 py-1 mr-3 font-medium text-gray-700 border rounded">Inventory</a>
                        <a
                            class="flex items-center px-3 py-1 mr-3 font-medium text-gray-700 border rounded">Distribution</a>
                        <a
                            class="flex items-center px-3 py-1 mr-3 font-medium text-gray-700 border rounded">Loss</a>
                    </div>
                    <div class="">
                        <button type="button" @click="open = !open"
                            class="flex items-center px-3 py-1 font-medium text-gray-700 border rounded">
                            <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" class="w-5 h-5 mr-1">
                                <g class="">
                                    <path d="M0 0h24v24H0z" fill="none" class=""></path>
                                    <path
                                        d="M3 17v2h6v-2H3zM3 5v2h10V5H3zm10 16v-2h8v-2h-8v-2h-2v6h2zM7 9v2H3v2h4v2h2V9H7zm14 4v-2H11v2h10zm-6-4h2V7h4V5h-4V3h-2v6z"
                                        class=""></path>
                                </g>
                            </svg>
                            Filter
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mx-auto">
            <div class="flex flex-col px-8 py-6 mx-4 bg-white shadow rounded-b-md" x-show="open"
                x-transition:enter="transition ease-out origin-top duration-300"
                x-transition:enter-start="opacity-0 transform scale-90"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in origin-top duration-300"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-90">
                <div class="flex justify-center text-sm text-gray-700">
                    <div class="w-1/5 mr-10">
                        <h3 class="pb-2 mb-3 font-semibold text-gray-900 border-b text-md">Country</h3>
                        <div class="flex flex-col">
                            <div class="flex py-2">
                                <svg class="w-5 h-5 mr-2" version="1.1" id="Layer_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                    xml:space="preserve">
                                    <circle style="fill:#496E2D;" cx="256" cy="256" r="256" />
                                    <circle style="fill:#D80027;" cx="200.348" cy="256" r="111.304" />
                                </svg>
                                <a href="#" class="flex-1">Bangladesh</a>
                            </div>
                            <div class="flex py-2 font-bold">
                                <svg class="w-5 h-5 mr-2" version="1.1" id="Layer_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                    xml:space="preserve">
                                    <circle style="fill:#496E2D;" cx="256" cy="256" r="256" />
                                    <circle style="fill:#D80027;" cx="200.348" cy="256" r="111.304" />
                                </svg>
                                <a href="#" class="flex-1">Bangladesh</a>
                                <a href="#"><svg class="h-5 py-1" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z" />
                                    </svg></a>
                            </div>
                            <div class="flex py-2">
                                <svg class="w-5 h-5 mr-2" version="1.1" id="Layer_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                    xml:space="preserve">
                                    <circle style="fill:#496E2D;" cx="256" cy="256" r="256" />
                                    <circle style="fill:#D80027;" cx="200.348" cy="256" r="111.304" />
                                </svg>
                                <a href="#" class="flex-1">Bangladesh</a>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/5 mr-10">
                        <h3 class="pb-2 mb-3 font-semibold text-gray-900 border-b text-md">Item</h3>
                        <div class="flex flex-col">
                            <div class="flex py-2">
                                <a href="#" class="flex-1">Item 1</a>
                            </div>
                            <div class="flex py-2 font-bold">
                                <a href="#" class="flex-1">Item 2</a>
                                <a href="#"><svg class="h-5 py-1" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z" />
                                    </svg></a>
                            </div>
                            <div class="flex py-2">
                                <a href="#" class="flex-1">Item 3</a>
                            </div>
                            <div class="flex py-2">
                                <a href="#" class="flex-1">Item 1</a>
                            </div>
                            <div class="flex py-2 font-bold">
                                <a href="#" class="flex-1">Item 2</a>
                                <a href="#"><svg class="h-5 py-1" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z" />
                                    </svg></a>
                            </div>
                            <div class="flex py-2">
                                <a href="#" class="flex-1">Item 3</a>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/5 mr-10">
                        <h3 class="pb-2 mb-3 font-semibold text-gray-900 border-b text-md">Item</h3>
                        <div class="flex flex-col">
                            <div class="flex py-2">
                                <a href="#" class="flex-1">Item 1</a>
                            </div>
                            <div class="flex py-2 font-bold">
                                <a href="#" class="flex-1">Item 2</a>
                                <a href="#"><svg class="h-5 py-1" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z" />
                                    </svg></a>
                            </div>
                            <div class="flex py-2">
                                <a href="#" class="flex-1">Item 3</a>
                            </div>
                            <div class="flex py-2 font-bold">
                                <a href="#" class="flex-1">Item 2</a>
                                <a href="#"><svg class="h-5 py-1" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z" />
                                    </svg></a>
                            </div>
                            <div class="flex py-2">
                                <a href="#" class="flex-1">Item 3</a>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/5 mr-10">
                        <h3 class="pb-2 mb-3 font-semibold text-gray-900 border-b text-md">Item</h3>
                        <div class="flex flex-col">
                            <div class="flex py-2">
                                <a href="#" class="flex-1">Item 1</a>
                            </div>
                            <div class="flex py-2 font-bold">
                                <a href="#" class="flex-1">Item 2</a>
                                <a href="#"><svg class="h-5 py-1" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z" />
                                    </svg></a>
                            </div>
                            <div class="flex py-2 font-bold">
                                <a href="#" class="flex-1">Item 2</a>
                                <a href="#"><svg class="h-5 py-1" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z" />
                                    </svg></a>
                            </div>
                            <div class="flex py-2">
                                <a href="#" class="flex-1">Item 3</a>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/5">
                        <h3 class="pb-2 mb-3 font-semibold text-gray-900 border-b text-md">Item</h3>
                        <div class="flex flex-col">
                            <div class="flex py-2">
                                <a href="#" class="flex-1">Item 1</a>
                            </div>
                            <div class="flex py-2 font-bold">
                                <a href="#" class="flex-1">Item 2</a>
                                <a href="#"><svg class="h-5 py-1" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z" />
                                    </svg></a>
                            </div>
                            <div class="flex py-2">
                                <a href="#" class="flex-1">Item 3</a>
                            </div>
                            <div class="flex py-2">
                                <a href="#" class="flex-1">Item 1</a>
                            </div>
                            <div class="flex py-2 font-bold">
                                <a href="#" class="flex-1">Item 2</a>
                                <a href="#"><svg class="h-5 py-1" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z" />
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <a class="text-sm font-normal text-gray-700 hover:underline">Clear Filter</a>
                </div>
            </div>
        </div>
    </div>
</div>
