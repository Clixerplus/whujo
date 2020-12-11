<div class="pb-8">

    <h1 class="font-extrabold text-3xl mb-2">Plazo para Reservaciones</h1>

    <p class="text-sm mb-4 px-1">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis pariatur dolor deleniti quisquam soluta
        libero
        excepturi, mollitia atque, aperiam officia ab cumque dicta rem suscipit.
    </p>


    <div class="w-3/5">

        <label for="reservationLimitTime" class="font-semibold px-1">Elige una opción</label>

        <x-select id="reservationLimitTime" :key="'reservationLimitTime'" wire:model="reservationLimitTime" >
            @foreach ($intervals as $interval)
                <option  {{ isSelected($reservationLimitTime , $interval) }} value="{{ $interval }}">
                    @if ($loop->first)
                        Sin Límite
                    @else
                        {{ $interval }} hora(s)
                    @endif
                </option>
            @endforeach
        </x-select>

        <x-error :key="'reservationLimitTime'"/>
    </div>

</div>
