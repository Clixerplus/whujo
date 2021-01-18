<div class="pb-8">

    <h1 class="font-extrabold text-3xl mb-2">
        ¿Quién puede participar en tu experiencia?
    </h1>

    <p class="text-sm mb-4 px-1">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        Facilis pariatur dolor deleniti quisquam soluta libero
        excepturi, mollitia atque, aperiam officia ab cumque dicta
        rem suscipit.
    </p>


    <div class="my-4 w-3/5">

        <label for="input_minimumAge" class="font-semibold px-1">
            Edad mínima
        </label>

        <x-select id="input_minimumAge"
                  :key="'product.minimumAge'"
                  wire:model.debounce.500ms="product.minimumAge">
            @for ($i = $minAge; $i <= $maxAge; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
            @endfor
        </x-select>

        <x-error :key="'product.minimumAge'"/>

    </div>

    <h2 class="font-semibold text-xl">
        Lorem ipsum dolor sit.
    </h2>

    <div class="px-1">
        <ol class="list-decimal list-inside text-sm">
            <li>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Qui at eius cum aliquid iure cumque!
            </li>
            <li>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Quidem quo nulla in impedit. Tempora earum debitis
                aperiam eveniet, animi commodi.
            </li>
            <li>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Et veniam labore debitis.
            </li>
        </ol>
    </div>

</div>
