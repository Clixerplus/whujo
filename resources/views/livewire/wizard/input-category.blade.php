<div class="pb-8">

    <h1 class="mb-2 text-3xl font-extrabold">
        Ellige una categoría
    </h1>

    <p class="px-1 mb-4 text-sm">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        Facilis pariatur dolor deleniti quisquam soluta libero
        excepturi, mollitia atque, aperiam officia ab cumque dicta
        rem suscipit.
    </p>


    <div class="w-full md:w-3/5">

        <label for="input_category" class="px-1 font-semibold">
            Elige una opción
        </label>

        <x-ui::select id="input_category" :key="'product.category_id'" wire:model="product.category_id">
            <option value="" @empty($product->category_id) selected @else disabled @endempty >
                {{ __('Choose an option') }}
            </option>

            @foreach ($categories as $key => $category)
                <option value="{{ $key }}">
                    {{ $category }}
                </option>
            @endforeach
        </x-ui::select>

        <x-ui::error :key="'product.category_id'" />

    </div>
</div>
