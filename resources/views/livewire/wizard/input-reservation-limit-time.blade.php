<div class="pb-8">

    <h1 class="font-extrabold text-3xl mb-2">
        Plazo para Reservaciones
    </h1>

    <p class="text-sm mb-4 px-1">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        Facilis pariatur dolor deleniti quisquam soluta libero
        excepturi, mollitia atque, aperiam officia ab cumque
        dicta rem suscipit.
    </p>


    <div class="w-3/5">

        <label for="input_reservationLimitTime" class="font-semibold px-1">
            {{ __('Choose an option') }}
        </label>

        <x-select id="input_reservationLimitTime"
                  :key="'product.reservationLimitTime'"
                  wire:model="product.reservationLimitTime" >
            @foreach ($intervals as $interval)
                <option value="{{ $interval }}">
                    @if ($interval == 0)
                        {{ __('No limit') }}
                    @else
                        {{ $interval }} {{ __('hour(s)') }}
                    @endif
                </option>
            @endforeach
        </x-select>

        <x-error :key="'product.reservationLimitTime'"/>
    </div>

</div>
