{{-- action buttons --}}
<div class="sticky inset-x-0 flex gap-4 p-4 bg-white border-t shadow-xl top-20 lg:hidden">
    <x-button type="button" class="w-1/2 bg-gray-200 border text-secondary" x-on:click="show_filters=true">
        {{ __('Filters') }}
    </x-button>
    <x-button type="button" class="w-1/2 bg-gray-200 border text-secondary" x-on:click="show_sortBy=true">
        {{ __('Sort By') }}
    </x-button>
</div>

{{-- filters panel --}}
<div class="fixed inset-0 z-50 bg-white lg:hidden" x-show="show_filters"
    x-transition:enter="transition ease-out duration-300" x-transition:enter-start="transform translate-y-full"
    x-transition:enter-end="transform translate-y-0" x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="transform translate-y-0" x-transition:leave-end="transform translate-y-full"
    x-cloak>

    <div class="relative h-screen overflow-y-auto">


        <div class="flex justify-between p-4 border-b">
            <button type="reset" class="text-gray-500 ">
                {{ __('clear all') }}
            </button>

            <h2 class="font-bold text-gray-700">{{ __('Filters') }}</h2>

            <button x-on:click="show_filters=false">
                <x-icon-close class="w-6 h-6 text-gray-700" />
            </button>
        </div>

        <form>
            <div class="flex flex-wrap gap-8 p-4 pb-36">

                {{-- local seller //TODO: Cambiar por un componente checkbox--}}
                <div class="w-full p-4 border rounded">
                    <label for="local_sellers_1" class="flex items-center justify-between ">
                        <span class="font-bold">{{ __('Local sellers') }}</span>
                        <x-input type="checkbox" class="w-4 h-4 border " id="local_sellers_1" />
                    </label>
                </div>

                {{-- product type //TODO: Cambiar por un componente select --}}
                <div class="flex flex-wrap w-full space-y-2 rounded">
                    <label for="" class="w-full">
                        {{ __('Product Type') }}
                        {{-- <x-select-2 :options="$types" /> --}}
                    </label>
                </div>

                {{-- category //TODO: Cambiar por un componente select --}}
                <div class="flex flex-wrap w-full space-y-2 rounded">
                    <label for="" class="w-full">
                        {{ __('Categories') }}
                        {{-- <x-select-2 :options="$categories" /> --}}
                    </label>
                </div>
                {{-- modality //TODO: Cambiar por un componente select --}}
                <div class="flex flex-wrap w-full space-y-2 rounded">
                    <label for="" class="w-full">
                        {{ __('Modalities') }}
                        {{-- <x-select-2 :options="$modalities" /> --}}
                    </label>
                </div>

                {{-- budget //TODO: Cambiar por un componente select --}}
                <div class="flex flex-wrap w-full space-y-2 ">
                    <div class="w-full font-bold">{{ __('Budget') }}</div>
                    <div class="flex space-x-2">
                        <x-input class="w-full" placeholder="$  min" />
                        <x-input class="w-full" placeholder="$  max" />
                    </div>
                </div>

            </div>

            <div
                class="fixed inset-x-0 bottom-0 flex items-center justify-center p-4 bg-white border-t shadow-xl">
                <x-button class="w-full bg-primary" x-on:click="show_filters=false">
                    {{ __('show results') }}
                </x-button>
            </div>
        </form>

    </div>
</div>

{{-- sortby panel --}}
<div class="fixed inset-0 z-50 bg-white lg:hidden" x-show="show_sortBy"
    x-transition:enter="transition ease-out duration-300" x-transition:enter-start="transform translate-y-full"
    x-transition:enter-end="transform translate-y-0" x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="transform translate-y-0" x-transition:leave-end="transform translate-y-full"
    x-cloak>

    <div class="relative h-screen overflow-y-auto">

        <div class="flex justify-between p-4 border-b">
            <button type="reset" class="text-gray-500 ">
                {{ __('clear all') }}
            </button>

            <h2 class="font-bold text-gray-700">{{ __('Filters') }}</h2>

            <button x-on:click="show_sortBy=false">
                <x-icon-close class="w-6 h-6 text-gray-700" />
            </button>
        </div>

        <form>
            <div class="flex flex-wrap gap-8 p-4 pb-24">
                {{-- TODO:Colocar filtros reales --}}

                {{-- local seller //TODO: Cambiar por un componente checkbox TODO: --}}
                <div class="w-full p-4 border rounded">
                    <label for="local_sellers_a" class="flex items-center justify-between ">
                        <span class="font-bold">{{ __('Local sellers') }}</span>
                        <x-input type="checkbox" class="w-4 h-4 border " id="local_sellers_a" />
                    </label>
                </div>

                {{-- local seller //TODO: Cambiar por un componente checkbox--}}
                <div class="w-full p-4 border rounded">
                    <label for="local_sellers_b" class="flex items-center justify-between ">
                        <span class="font-bold">{{ __('Local sellers') }}</span>
                        <x-input type="checkbox" class="w-4 h-4 border " id="local_sellers_b" />
                    </label>
                </div>

                {{-- local seller //TODO: Cambiar por un componente checkbox--}}
                <div class="w-full p-4 border rounded">
                    <label for="local_sellers_c" class="flex items-center justify-between ">
                        <span class="font-bold">{{ __('Local sellers') }}</span>
                        <x-input type="checkbox" class="w-4 h-4 border " id="local_sellers_c" />
                    </label>
                </div>

                {{-- local seller //TODO: Cambiar por un componente checkbox--}}
                <div class="w-full p-4 border rounded">
                    <label for="local_sellers_d" class="flex items-center justify-between ">
                        <span class="font-bold">{{ __('Local sellers') }}</span>
                        <x-input type="checkbox" class="w-4 h-4 border " id="local_sellers_d" />
                    </label>
                </div>

            </div>

            <div
                class="fixed inset-x-0 bottom-0 flex items-center justify-center p-4 bg-white border-t shadow-xl">
                <x-button class="w-full bg-primary" x-on:click="show_sortBy=false">
                    {{ __('show results') }}
                </x-button>
            </div>
        </form>

    </div>
</div>
