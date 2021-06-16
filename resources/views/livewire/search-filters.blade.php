<div class="space-y-4 ">
    <div class="flex items-center justify-between w-full space-x-24">
        <div class="flex items-center w-1/2 space-x-4 ">

            {{-- type --}}
            <x-ui.dropdown :labelTag="__('Categories')" :active="$type">

                <ul class="w-48 overflow-y-auto border max-h-44">
                    @foreach ($types as $type_key => $type_value)
                        <li wire:click="selectType('{{ $type_key }}')"
                            class="w-full p-2 text-gray-600 cursor-pointer hover:bg-gray-200">

                            {{ __($type_value) }}
                        </li>
                    @endforeach
                </ul>
            </x-ui.dropdown>

            {{-- categories --}}
            <x-ui.dropdown :labelTag="__('Categories Options')" :active="$category">
                <ul class="w-48 overflow-y-auto border max-h-44">
                    @foreach ($categories as $category_key => $category_value)
                        <li wire:click="selectCategory('{{ $category_key }}')"
                            class="w-full p-2 text-gray-600 cursor-pointer hover:bg-gray-200">

                            {{ __($category_value) }}
                        </li>
                    @endforeach
                </ul>
            </x-ui.dropdown>

            {{-- modalities --}}
            <x-ui.dropdown :labelTag="__('Modalities')" :active="$modality">
                <ul class="w-48 overflow-y-auto border max-h-44">
                    @foreach ($modalities as $modality_key => $modality_value)
                        <li wire:click="selectModality('{{ $modality_key }}')"
                            class="w-full p-2 text-gray-600 cursor-pointer hover:bg-gray-200">

                            {{ __($modality_value) }}
                        </li>
                    @endforeach
                </ul>
            </x-ui.dropdown>

            {{-- budget --}}
            <x-ui.dropdown :labelTag="__('Budget')" :closeOnClick="false"
                :active="is_numeric($minPrice) || is_numeric($maxPrice)">
                <form class="border w-72" wire:submit.prevent="selectBudget">
                    <div class="flex p-4 space-x-4">
                        <input wire:model.defer="minPrice" class="w-full p-2 border rounded outline-none" type="number"
                            min="0" placeholder="Min price" />
                        <input wire:model.defer="maxPrice" class="w-full p-2 border rounded outline-none" type="number"
                            min="0" placeholder="Max price" />
                        @error('priceMax')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="flex items-center justify-between p-4 border-t">
                        <button type="button" wire:click="clearBudget"
                            class="text-sm font-light text-gray-600 outline-none hover:text-gray-800 hover:underline"
                            x-on:click="open = false">
                            clear all
                        </button>
                        <button type="submit"
                            class="px-3 py-1 text-sm font-light bg-opacity-75 rounded outline-none bg-primary text-gray-50 hover:bg-primary-light hover:bg-opacity-100"
                            x-on:click="open = false">
                            {{ __('Apply') }}
                        </button>
                    </div>
                </form>

            </x-ui.dropdown>

        </div>

        {{-- local --}}
        <div class="flex-initial">
            <div class="flex items-center justify-between px-4 py-2 border rounded w-52 bg-gray-50">
                <label for="onlyLocal" class="font-semibold">Only local</label>
                <input id="onlyLocal" wire:model="onlyLocal" type="checkbox"
                    class="w-4 h-4 rounded bg-duolingo text-twitter">
            </div>
        </div>

    </div>

    {{-- Filters pills --}}
    <div class="flex mt-4 space-x-4">
        @isset($type)
            <x-pill-button wire:click="selectType(null)">
                {{ __(data_get($types, $type)) }}
            </x-pill-button>
        @endisset

        @isset($category)
            <x-pill-button wire:click="selectCategory(null)">
                {{ __(data_get($categories, $category)) }}
            </x-pill-button>
        @endisset

        @isset($modality)
            <x-pill-button wire:click="selectModality(null)">
                {{ __(data_get($modalities, $modality)) }}
            </x-pill-button>
        @endisset

        @if (!is_null($minPrice) || !is_null($maxPrice))
            <x-pill-button wire:click="clearBudget(null)">
                @if (!is_null($minPrice) && !is_null($maxPrice))
                    ${{ $minPrice }} - ${{ $maxPrice }}
                @elseif(!is_null($minPrice))
                    Over ${{ $minPrice }}
                @else
                    Under ${{ $maxPrice }}
                @endif
            </x-pill-button>
        @endisset

        @if ($onlyLocal)
            <x-pill-button wire:click="clearOnlyLocal()">
                {{ $country }}
            </x-pill-button>
        @endisset

</div>

<x-section-container >

<div class="w-auto h-full ">

    @foreach ($results as $type => $products)
        <h1 class="w-full py-2 font-bold capitalize border-b">{{ $type }}</h1>
        <ul class="flex flex-wrap mt-4">
            @foreach ($products as $product)
                <li class="w-1/4 h-72">
                    <a href="/product/{{ $product->id }}"
                        class="block h-full p-2 transition duration-500 ease-out transform hover:-translate-y-4 active:opacity-75">
                        <x-card-V02 :product="$product" />
                    </a>
                </li>
            @endforeach
        </ul>
    @endforeach
</div>

</x-section-container>

</div>
