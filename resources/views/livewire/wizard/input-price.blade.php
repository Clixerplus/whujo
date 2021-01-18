<div class="text-gray-800">

    <h1 class="font-extrabold text-3xl mb-2">
        Precio de producto
    </h1>
    <p class="text-sm mb-4">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Consequatur alias rerum, aperiam blanditiis optio dolorem.
    </p>


    <div class="my-4">

        <label for="input_price" class="font-semibold">
            Precio individual por participante
        </label>
        <x-input id="input_price"
                 :key="'product.price'"
                 wire:model.debounce.500ms="product.price"
                 placeholder="$ 0.00"
                 min="{{ config('product.MIN_PRICE') }}"
                 type="number"
                 autofocus
                 class="w-96" />

        <x-error :key="'product.price'" />

    </div>


    <h2 class="font-semibold text-xl">
        Lorem ipsum dolor sit.
    </h2>
    <p class="text-sm mb-4">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Eligendi, laboriosam hic placeat animi fugiat, quos quo
        reiciendis maxime labore dolore aperiam aliquid vero
        dolorem nam!
    </p>

</div>
