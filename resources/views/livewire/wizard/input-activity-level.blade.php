<div class="pb-8">

    <h1 class="font-extrabold text-3xl mb-2">Nivel de intensidad <br> de la(s) actividad(es)</h1>

    <p class="text-sm mb-4 px-1">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis pariatur dolor deleniti quisquam soluta
        libero
        excepturi, mollitia atque, aperiam officia ab cumque dicta rem suscipit.
    </p>


    <div class="w-2/4">

        <label for="activityLevel" class="font-semibold px-1">Elige una opción</label>
        <x-ui.select wire:model="activityLevel" class="mt-1 text-sm" id="activityLevel"
            placeholder="Describe aqui tu actividad">
            @foreach ($levelOptions as $option)
            <option @if ($activityLevel==$option) selected @endif>{{ $option }}</option>
            @endforeach
        </x-ui.select>

    </div>


</div>
