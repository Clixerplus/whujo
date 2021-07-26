<div class="text-gray-800">

    <h1 class="mb-2 text-3xl font-extrabold">
        Dale un nombre a tu servicio
    </h1>
    <p class="mb-4 text-sm">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Consequatur alias rerum, aperiam blanditiis optio dolorem.
    </p>

    <div class="my-8">

        <label for="input_name" class="block mb-2 font-semibold">
            Titulo de la Servicio
        </label>

        <x-ui::input id="input_name"
                 :key="'product.name'"
                 wire:model.debounce.500ms="product.name"
                 placeholder="Escribe aqui"
                 minlength="5"
                 maxlength="120"
                 class="w-full"
                 autofocus />

        <x-ui::error :key="'product.name'"/>

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
@section('suggestPanel')
<div>ñldsajasjldal</div>
@endsection
