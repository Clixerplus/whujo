<div class="pb-8">

    <h1 class="font-extrabold text-3xl mb-2">Tiempo de la Actividad</h1>

    <p class="text-sm mb-4 px-1">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis pariatur dolor deleniti quisquam soluta
        libero
        excepturi, mollitia atque, aperiam officia ab cumque dicta rem suscipit.
    </p>


    <div class="w-full my-4">
        <div class="flex flex-col md:flex-row justify-around">
            <x-select id="hour" :key="'hour'" wire:model="hour">
                @for ($hourI = 0; $hourI<=$hoursInterval; $hourI++) <option {{ isSelected($hour,$hourI)}}
                    value="{{$hourI}}">{{ $hourI }} horas</option>
                    @endfor
            </x-select>
            <x-select id="minute" :key="'minute'" wire:model="minute">
                @foreach ($minutesInterval as $minuteI)
                <option {{ isSelected($minute,$minuteI)}} value="{{$minuteI}}">{{ $minuteI }} minutes</option>
                @endforeach
            </x-select>

        </div>

    </div>

    <h2 class="font-extrabold text-xl mb-2">Lorem ipsum dolor sit.</h2>

        <p class="text-sm mb-4 px-1">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis pariatur dolor deleniti quisquam soluta
            libero
            excepturi, mollitia atque, aperiam officia ab cumque dicta rem suscipit.
        </p>

</div>
