<livewire:wizard.input-features :product="$product" />
{{-- <div class="max-w-xl pb-8 mx-auto">

    <h1 class="mb-2 text-3xl font-extrabold">Caracteristicas y Ventajas de tu servicio</h1>
    <p class="px-1 mb-4 text-sm">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis pariatur dolor deleniti quisquam soluta
        libero
        excepturi, mollitia atque, aperiam officia ab cumque dicta rem suscipit.
    </p>

    <div class="mt-8">
        <label for="item" class="px-1 font-semibold">Haz una lista de las Características</label>
        <div class="relative w-full mt-2 h-14">

            <x-input id="item" :key="'item'" wire:model="item" class="h-full"
                placeholder="Agrega los items que deben traer" />

            <button wire:click="addToList" title="Agregar a la lista" class="absolute inset-y-0 block w-10 h-10 p-1 m-auto text-white rounded-full outline-none right-4 bg-success hover:shadow-w1 transition-500">
                <x-icon-add-outline />
            </button>

        </div>

    </div>

    <h2 class="pb-2 mt-8 text-xl font-semibold border-b">
        Lista de Requerimientos
    </h2>

    <div class="pl-2">

        @empty($product->features)
        <div class="py-2 text-sm text-gray-400">La lista está vacía</div>
        @else
        <ol class="mt-1 text-sm list-decimal list-inside">
            @foreach ($product->features as $key => $value)
            <li class="flex py-2 pl-2 mb-4 border-b ">
                <div class="w-4/5">
                    <span>{{ $value }}</span>
                </div>
                <div class="flex w-1/5">
                    <button class="mb-auto ml-auto mr-2 text-gray-500 hover:text-secondary"
                        wire:click="deleteFromList({{ $key }})">Eliminar</button>
                </div>
            </li>
            @endforeach
        </ol>

        @endif

    </div>

</div> --}}
