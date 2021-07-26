<div class="pb-8">

    <h1 class="mb-2 text-3xl font-extrabold">
        Que haremos en tu actividad
    </h1>

    <p class="px-1 mb-4 text-sm">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        Facilis pariatur dolor deleniti quisquam soluta libero
        excepturi, mollitia atque, aperiam officia ab cumque dicta
        rem suscipit.
    </p>


    <div class="my-6">
        <label for="input_description" class="px-1 font-semibold">
            Describe brevemente tu actividad
        </label>
        <x-ui::textarea id="input_description"
                    :key="'product.description'"
                    wire:model.debounce.500ms="product.description"
                    placeholder="Describe aqui tu actividad"
                    onkeypress="calculateLength()"
                    cols="30" rows="8"
                    min="{{ $minChars }}"
                    max="{{ $maxChars }}">

        </x-ui::textarea>

        <span class="float-right px-1 mt-2 text-xs" >
            {{ Illuminate\Support\Str::length($product->description) }}/{{ $maxChars }}
        </span>

        <x-ui::error :key="'product.description'"/>

    </div>


    <h2 class="text-xl font-semibold">
        Lorem ipsum dolor sit.
    </h2>
    <div class="px-1">
        <ol class="text-sm list-decimal list-inside">
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
