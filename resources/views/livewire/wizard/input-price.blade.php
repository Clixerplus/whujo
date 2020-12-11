<div class="text-gray-800">

    <h1 class="font-extrabold text-3xl mb-2">Precio de producto</h1>
    <p class="text-sm mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur alias rerum, aperiam
        blanditiis optio dolorem.
    </p>


    <div class="my-4">

        <label for="price" class="font-semibold">Precio individual porparticipar</label>

        <x-input id="price" :key="'price'" wire:model="price" placeholder="0.00" min="{{ $minPrice }}" />

        <x-error :key="'price'" />

    </div>


    <h2 class="font-semibold text-xl">Lorem ipsum dolor sit.</h2>
    <p class="text-sm mb-4">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, laboriosam hic placeat animi fugiat, quos quo
        reiciendis maxime labore dolore aperiam aliquid vero dolorem nam!
    </p>

</div>
