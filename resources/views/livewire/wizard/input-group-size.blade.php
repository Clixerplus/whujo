<div class="pb-8">

    <h1 class="font-extrabold text-3xl mb-2">Tamaño de grupo</h1>

    <p class="text-sm mb-4 px-1">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis pariatur dolor deleniti quisquam soluta
        libero
        excepturi, mollitia atque, aperiam officia ab cumque dicta rem suscipit.
    </p>


    <div class="w-2/4">

        <label for="groupSize" class="font-semibold px-1">Elige una opción</label>

        <x-select id="groupSize" :key="'groupSize'" wire:model="groupSize">
            @for ($i= 1; $i<=$groupMaxSize; $i++ )
                <option {{ isSelected($groupSize, $i) }} value="{{ $i }}">
                    {{ $i }}
                </option>
            @endfor
        </x-select>

        <x-error :key="'groupSize'" />

    </div>

</div>
