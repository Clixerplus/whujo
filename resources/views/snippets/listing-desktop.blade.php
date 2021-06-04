{{-- filters and sort by panel --}}
<div class="sticky inset-x-0 z-10 hidden px-4 mt-8 space-x-4 bg-white lg:flex top-20 md:px-6">
    <label for="" class="w-full">
        {{ __('Product Type') }}
        <x-ui.dropdown label="types">
            <div class="z-10 p-4 border ">
                <ul>
                    @foreach ($types as $type)
                        <li>
                            <button wire:click="otrometoo('{{ $type['value'] }}')" wire:key="product_type_{{ $loop->index }}">
                                {{ $type['title'] }}
                            </button>
                        </li>
                    @endforeach
                </ul>
            </div>
        </x-ui.dropdown>
    </label>
    <label for="" class="w-full">
        {{ __('Categories') }}
        <x-ui.dropdown label="categories">
            <div class="z-10 p-4 border w-72 h-96">
                cualquier contraseña
            </div>
        </x-ui.dropdown>
    </label>
    <label for="" class="w-full">
        {{ __('Modalities') }}
        <x-ui.dropdown label="modalities">
            <div class="z-10 p-4 border w-72 h-96">
                cualquier contraseña
            </div>
        </x-ui.dropdown>
    </label>
    <label for="" class="w-full">
        {{ __('budget') }}
        <x-button class="px-4 py-2 border rounded">Budget</x-button>
    </label>

    <div class="self-end w-full px-4 py-3 border rounded hover:border-gray-400">
        <label for="local_sellers_1" class="flex items-center justify-between h-full cursor-pointer">
            <span class="font-bold">{{ __('Local sellers') }}</span>
            <x-input type="checkbox" class="w-4 h-4 mt-1 border" id="local_sellers_1" />
        </label>
    </div>
</div>
