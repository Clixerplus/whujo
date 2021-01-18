<div class="pb-8">

    <h1 class="font-extrabold text-3xl mb-2">
        Donde te encuentras ubicado
    </h1>

    <p class="text-sm mb-4 px-1">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        Facilis pariatur dolor deleniti quisquam soluta libero
        excepturi, mollitia atque, aperiam officia ab cumque dicta
        rem suscipit.
    </p>

    <div class="w-full my-4">
        <div class="flex flex-col md:flex-row justify-between space-y-2 lg:space-y-0 lg:space-x-2">

            {{-- Estados --}}
            <div>
                <label for="product_state">{{ __('States') }}</label>
                <x-select id="product_state"
                          :key="'product.state'"
                          wire:model="selectedState">
                        <option value="" selected>{{ __('Choose state') }}</option>
                    @foreach ($states as $state)
                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                    @endforeach
                </x-select>
            </div>

            {{-- Ciudades --}}
            <div>
                <label for="product_city">{{ __('Cities') }}</label>
                <x-select id="product_city"
                          :key="'product.city'"
                          wire:model="selectedCity">
                        <option value="" selected>{{ __('Choose city') }}</option>
                    @if (!is_null($selectedState))
                        @foreach ($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    @endif
                </x-select>
            </div>

            {{-- Localidades --}}
            <div>
                <label for="product_locality">{{ __('Localities') }}</label>
                <x-select id="product_locality"
                          :key="'product.locality'"
                          wire:model="selectedLocality">
                    <option value="" selected>{{ __('Choose locality') }}</option>
                    @if (!is_null($selectedCity))
                        @foreach ($localities as $locality)
                        <option value="{{ $locality->id }}">{{ $locality->name }}</option>
                        @endforeach
                    @endif
                </x-select>
            </div>

        </div>
    </div>

    <h2 class="font-extrabold text-xl mb-2">
        Lorem ipsum dolor sit.
    </h2>

    <p class="text-sm mb-4 px-1">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        Facilis pariatur dolor deleniti quisquam soluta libero
        excepturi, mollitia atque, aperiam officia ab cumque dicta
        rem suscipit.
    </p>

</div>
