<div class="pb-8">

    <h1 class="mb-2 text-3xl font-extrabold">
        Donde te encuentras ubicado
    </h1>

    <p class="px-1 mb-4 text-sm">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        Facilis pariatur dolor deleniti quisquam soluta libero
        excepturi, mollitia atque, aperiam officia ab cumque dicta
        rem suscipit.
    </p>

    <div class="w-full my-4">
        <div class="flex flex-col justify-between space-y-2 md:flex-row lg:space-y-0 lg:space-x-2">

            {{-- Estados --}}
            <div>
                <label for="product_state">{{ __('States') }}</label>
                <x-ui::select id="product_state" :key="'product.state'" wire:model="selectedState">
                    <option value="" selected>{{ __('Choose state') }}</option>
                    @foreach ($states as $state)
                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                    @endforeach
                </x-ui::select>
            </div>

            {{-- Ciudades --}}
            <div>
                <label for="product_city">{{ __('Cities') }}</label>
                <x-ui::select id="product_city" :key="'product.city'" wire:model="selectedCity">
                    <option value="" selected>{{ __('Choose city') }}</option>
                    @if (!is_null($selectedState))
                        @foreach ($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    @endif
                </x-ui::select>
            </div>

            {{-- Localidades --}}
            <div>
                <label for="product_locality">{{ __('Localities') }}</label>
                <x-ui::select id="product_locality" :key="'product.locality'" wire:model="selectedLocality">
                    <option value="" selected>{{ __('Choose locality') }}</option>
                    @if (!is_null($selectedCity))
                        @foreach ($localities as $locality)
                            <option value="{{ $locality->id }}">{{ $locality->name }}</option>
                        @endforeach
                    @endif
                </x-ui::select>
            </div>

        </div>
    </div>

    <h2 class="mb-2 text-xl font-extrabold">
        Lorem ipsum dolor sit.
    </h2>

    <p class="px-1 mb-4 text-sm">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        Facilis pariatur dolor deleniti quisquam soluta libero
        excepturi, mollitia atque, aperiam officia ab cumque dicta
        rem suscipit.
    </p>

</div>
