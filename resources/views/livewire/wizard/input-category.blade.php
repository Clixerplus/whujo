<div class="pb-8">

    <h1 class="font-extrabold text-3xl mb-2">Ellige una categoría</h1>

    <p class="text-sm mb-4 px-1">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis pariatur dolor deleniti quisquam soluta
        libero
        excepturi, mollitia atque, aperiam officia ab cumque dicta rem suscipit.
    </p>


    <div class="w-2/4">

        <label for="category" class="font-semibold px-1">Elige una opción</label>
        <x-ui.select wire:model="category" class="mt-1 text-sm" id="category" placeholder="Describe aqui tu actividad">

            @foreach ($categories as $categoryLoop)
            <option @if ($category==$categoryLoop->id) selected @endif
                value="{{ $categoryLoop->id }}">{{ $categoryLoop->name }}</option>
            @endforeach
        </x-ui.select>

    </div>


</div>
