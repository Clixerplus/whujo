<div class="pb-8">

    <h1 class="font-extrabold text-3xl mb-2">
        Tiempo de la Actividad
    </h1>

    <p class="text-sm mb-4 px-1">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        Facilis pariatur dolor deleniti quisquam soluta libero
        excepturi, mollitia atque, aperiam officia ab cumque dicta
        rem suscipit.
    </p>


    <div class="w-full my-4">
        <div class="flex flex-col md:flex-row justify-around">
            <div>

                <label for="input_hour">{{ __('Hours') }}</label>
                <x-select id="input_hour"
                          :key="'product_hour'"
                          wire:model="product_hour">
                    @for ($hour =0; $hour <= $hoursInterval; $hour++)
                        <option value="{{$hour}}">
                            {{ $hour }} {{ __('Hour(s)') }}
                        </option>
                    @endfor
                </x-select>

            </div>

            <div>

                <label for="input_minute">{{ __('Minutes') }}</label>
                <x-select id="input_minute"
                          :key="'product_minute'"
                          wire:model="product_minute">
                    @foreach ($minutesInterval as $minute)
                    <option value="{{ $minute }}">
                        {{ $minute }} {{ __('Minute(s)') }}
                    </option>
                    @endforeach
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
