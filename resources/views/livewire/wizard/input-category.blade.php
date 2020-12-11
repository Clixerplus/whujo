<div class="pb-8">

    <h1 class="font-extrabold text-3xl mb-2">Ellige una categoría</h1>

    <p class="text-sm mb-4 px-1">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis pariatur dolor deleniti quisquam soluta
        libero
        excepturi, mollitia atque, aperiam officia ab cumque dicta rem suscipit.
    </p>


    <div class="w-3/5">

        <label for="category" class="font-semibold px-1">Elige una opción</label>

        <x-select id="category" :key="'category'" wire:model="category">
            @foreach ($categories as $categoryItem)
            <option {{isSelected($category, $categoryItem->id)}} value="{{ $categoryItem->id }}">
                {{ $categoryItem->name }}
            </option>
            @endforeach
        </x-select>

        <x-error :key="'category'" />

    </div>


</div>
