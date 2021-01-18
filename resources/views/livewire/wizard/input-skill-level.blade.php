<div class="pb-8">

    <h1 class="font-extrabold text-3xl mb-2">
        Nivel de habilidad de los participantes
    </h1>

    <p class="text-sm mb-4 px-1">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        Facilis pariatur dolor deleniti quisquam soluta libero
        excepturi, mollitia atque, aperiam officia ab cumque dicta
        rem suscipit.
    </p>


    <div class="w-2/4">

        <label for="input_skillLevel" class="font-semibold px-1">
            Elige una opción
        </label>

        <x-select id="input_skillLevel"
                  :key="'product.skillLevel'"
                  wire:model="product.skillLevel">
            @foreach ($levelOptions as $option)
            <option value="{{ $option }}">
                {{ __($option) }}
            </option>
            @endforeach
        </x-select>

        <x-error :key="'product.skillLevel'" />
    </div>

</div>
