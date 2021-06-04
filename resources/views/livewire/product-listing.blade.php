@php
for ($i=0; $i < 20; $i++) {
    $options = [
        ['value' => $i , 'title'=> 'Title '. $i],
    ]    # code...;
}
@endphp
<div x-data="{ show_filters: false, show_sortBy: false  }" class="relative">
    <x-section-container>
        <div class="px-4 lg:hidden">
            <livewire:search-product-form />
        </div>

        <div class="sticky inset-x-0 flex gap-4 p-4 bg-white shadow-xl top-20 lg:hidden">
            <x-button type="button" class="w-1/2 bg-gray-200 border text-secondary" x-on:click="show_filters=true">
                {{ __('Filters') }}
            </x-button>
            <x-button type="button" class="w-1/2 bg-gray-200 border text-secondary" x-on:click="show_sortBy=true">
                {{ __('Sort By') }}
            </x-button>
        </div>

        <div class="sticky inset-x-0 w-full gap-4 p-4 bg-white shadow-xl top-20 lg:hidden">
            <div class="w-full">
                <livewire:search-product-form />
            </div>

            <div class="flex w-full">
                <div class="flex-initial w-24 bg-gray-200 border text-secondary">
                    <x-select-2 :options="$options" />
                </div>
                <div class="flex-initial w-24 bg-gray-200 border text-secondary">
                    <x-select-2 :options="$options" />
                </div>
                <div class="flex-initial w-24 bg-gray-200 border text-secondary">
                    {{ __('Filters') }}
                </div>
                <div class="flex-initial w-24 bg-gray-200 border text-secondary">
                    {{ __('Filters') }}
                </div>
                <div class="flex items-center justify-between flex-initial p-4 space-x-4 border rounded">
                    <input type="checkbox" class="w-4 h-4 border" id="local_sellers" />
                    <label for="local_sellers">
                        <span class="font-bold">{{ __('Local sellers') }}</span>
                    </label>
                </div>
            </div>

        </div>





        {{-- options panel --}}
        <div class="flex flex-wrap px-4 mt-16 ">
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
            <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                <div class="w-full h-40 bg-gray-300 rounded lg:h-80"></div>
            </div>
        </div>
    </x-section-container>
</div>