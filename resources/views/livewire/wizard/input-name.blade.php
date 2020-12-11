<div class="text-gray-800">

    <h1 class="font-extrabold text-3xl mb-2">Dale un un nombre a tu experiencia</h1>
    <p class="text-sm mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur alias rerum, aperiam
        blanditiis optio dolorem.
    </p>

    <div class="my-4">

        <label for="name" class="font-semibold"> Titulo de la experiencia</label>

        <x-input id="name" :key="'name'" wire:model="name" placeholder="Escribe aqui" minlength="5" maxlength="151" />

        <x-error :key="'name'"/>

    </div>

    <h2 class="font-semibold text-xl">Lorem ipsum dolor sit.</h2>
    <p class="text-sm mb-4">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, laboriosam hic placeat animi fugiat, quos quo
        reiciendis maxime labore dolore aperiam aliquid vero dolorem nam!
    </p>

</div>
