<div class="pb-8">

    <h1 class="font-extrabold text-3xl mb-2">
        Ellige una categoría
    </h1>

    <p class="text-sm mb-4 px-1">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        Facilis pariatur dolor deleniti quisquam soluta libero
        excepturi, mollitia atque, aperiam officia ab cumque dicta
        rem suscipit.
    </p>


    <div class="w-full md:w-3/5">

        <label for="input_category" class="font-semibold px-1">
            Elige una opción
        </label>

        <x-select id="input_category"
                  :key="'product.category_id'"
                  wire:model="product.category_id"
                  class="w-full">
            <option value="" @empty($product->category_id) selected @else disabled @endempty >
                {{ __('Choose an option') }}
            </option>

            @foreach ($categories as $category)
            <option value="{{ $category->id }}">
                {{ $category->name }}
            </option>
            @endforeach
        </x-select>

        <x-error :key="'product.category_id'" />

    </div>


</div>
