<div class="pb-8">

    <h1 class="font-extrabold text-3xl mb-2">Nivel de habilidad <br>de los participantes</h1>

    <p class="text-sm mb-4 px-1">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis pariatur dolor deleniti quisquam soluta
        libero
        excepturi, mollitia atque, aperiam officia ab cumque dicta rem suscipit.
    </p>


    <div class="w-2/4">

        <label for="skillLevel" class="font-semibold px-1">Elige una opción</label>

        <x-select id="skillLevel" :key="'skillLevel'" wire:model="skillLevel">
            @foreach ($levelOptions as $option)
                <option {{ isSelected($skillLevel,$option) }}>{{ $option }}</option>
            @endforeach
        </x-select>

        <x-error :key="'skillLevel'"/>
    </div>

</div>
