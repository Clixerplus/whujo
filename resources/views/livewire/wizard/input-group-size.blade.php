<div class="pb-8">

    <h1 class="font-extrabold text-3xl mb-2">Tamaño de grupo</h1>

    <p class="text-sm mb-4 px-1">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis pariatur dolor deleniti quisquam soluta
        libero
        excepturi, mollitia atque, aperiam officia ab cumque dicta rem suscipit.
    </p>


    <div class="w-2/4">

        <label for="groupSize" class="font-semibold px-1">Elige una opción</label>
        <x-ui.select wire:model="groupSize" class="mt-1 text-sm" id="groupSize"
            placeholder="Describe aqui tu actividad">
            @for ($i= 1; $i<=$groupMaxSize; $i++ )
                <option @if ($groupSize==$i) selected @endif>
                    {{ $i }}
                </option>
                @endfor
        </x-ui.select>

    </div>

</div>
