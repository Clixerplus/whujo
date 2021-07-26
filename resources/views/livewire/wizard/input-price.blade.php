<div class="text-gray-800">

    <h1 class="mb-2 text-3xl font-extrabold">
        Precio de producto
    </h1>
    <p class="mb-4 text-sm">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Consequatur alias rerum, aperiam blanditiis optio dolorem.
    </p>


    <div class="my-8">

        <label for="input_price" class="block mb-2 font-semibold">
            Precio individual por participante
        </label>
        <x-ui::input id="input_price"
                 :key="'product.price'"
                 wire:model.debounce.500ms="product.price"
                 placeholder="$ 0.00"
                 min="{{ config('product.MIN_PRICE') }}"
                 type="number"
                 autofocus
                 class="w-72" />

        <x-ui::error :key="'product.price'" />

    </div>


    <h2 class="text-xl font-semibold">
        Lorem ipsum dolor sit.
    </h2>
    <p class="mb-4 text-sm">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Eligendi, laboriosam hic placeat animi fugiat, quos quo
        reiciendis maxime labore dolore aperiam aliquid vero
        dolorem nam!
    </p>

</div>
