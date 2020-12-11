<div class="pb-8">

    <h1 class="font-extrabold text-3xl mb-2">Nivel de intensidad de <br>la(s) actividad(es)</h1>

    <p class="text-sm mb-4 px-1">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis pariatur dolor deleniti quisquam soluta
        libero
        excepturi, mollitia atque, aperiam officia ab cumque dicta rem suscipit.
    </p>


    <div class="w-3/5">

        <label for="activityLevel" class="font-semibold px-1">Elige una opción</label>

        <x-select id="activityLevel" :key="'activityLevel'" wire:model="activityLevel" >
            @foreach ($levelOptions as $option)
                <option {{ isSelected($activityLevel,$option) }} value="{{ $option }}">{{ $option }}</option>
            @endforeach
        </x-select>

        <x-error :key="'activityLevel'"/>

    </div>


</div>
