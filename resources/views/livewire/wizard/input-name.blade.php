<div class="text-gray-800">

    <h1 class="font-extrabold text-3xl mb-2">
        Dale un nombre a tu experiencia
    </h1>
    <p class="text-sm mb-4">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Consequatur alias rerum, aperiam blanditiis optio dolorem.
    </p>

    <div class="my-8">

        <label for="input_name" class="font-semibold">
            Titulo de la experiencia
        </label>

        <x-input id="input_name"
                 :key="'product.name'"
                 wire:model.debounce.500ms="product.name"
                 placeholder="Escribe aqui"
                 minlength="5"
                 maxlength="120"
                 class="w-full"
                 autofocus />

        <x-error :key="'product.name'"/>

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
