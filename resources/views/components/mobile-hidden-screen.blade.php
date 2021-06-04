@props([
    'clear_all'=> false
])
<div {{ $attributes }} class="fixed inset-0 z-50 bg-white"
    x-cloak
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="transform translate-y-full" x-transition:enter-end="transform translate-y-0"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="transform translate-y-0" x-transition:leave-end="transform translate-y-full">

    <div class="relative h-screen overflow-y-auto">


        <div class="flex justify-between p-4 border-b">
            @if ($clear_all)
            <button type="reset" class="text-gray-500 ">
                {{ __('clear all') }}
            </button>
            @endif

            <h2 class="font-bold text-gray-700">{{ __($title) }}</h2>

            <button x-on:click="show_filters=false">
                <x-icon-close class="w-6 h-6 text-gray-700" />
            </button>
        </div>

        <form>
            <div class="flex flex-wrap gap-8 p-4 pb-36">

                {{-- local seller //TODO: Cambiar por un componente checkbox--}}
                <div class="w-full p-4 border rounded">
                    <label for="local_sellers" class="flex items-center justify-between ">
                        <span class="font-bold">{{ __('Local sellers') }}</span>
                        <x-input type="checkbox" class="w-4 h-4 border " id="local_sellers" />
                    </label>
                </div>

                {{-- product type //TODO: Cambiar por un componente select --}}
                <div class="flex flex-wrap w-full space-y-2 rounded">
                    <div class="w-full font-bold">{{ __('Product type') }}</div>
                    <div class="flex items-center w-full p-4 bg-gray-100 border rounded">
                        All
                    </div>
                </div>

                {{-- category //TODO: Cambiar por un componente select --}}
                <div class="flex flex-wrap w-full space-y-2 rounded">
                    <div class="w-full font-bold">{{ __('Category') }}</div>
                    <div class="flex items-center w-full p-4 bg-gray-100 border rounded">
                        All
                    </div>
                </div>
                {{-- modality //TODO: Cambiar por un componente select --}}
                <div class="flex flex-wrap w-full space-y-2 rounded">
                    <div class="w-full font-bold">{{ __('Modality') }}</div>
                    <div class="flex items-center w-full p-4 bg-gray-100 border rounded">
                        All
                    </div>
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

            <div class="fixed inset-x-0 bottom-0 flex items-center justify-center p-4 bg-white border-t shadow-xl">
                <x-button class="w-full bg-primary" x-on:click="show_filters=false">
                    {{ __('show results') }}
                </x-button>
            </div>
        </form>

    </div>
</div>