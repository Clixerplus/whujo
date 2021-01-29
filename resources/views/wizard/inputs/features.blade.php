<div class="pb-8 max-w-xl mx-auto">

    <h1 class="font-extrabold text-3xl mb-2">Caracteristicas y Ventajas de tu servicio</h1>
    <p class="text-sm mb-4 px-1">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis pariatur dolor deleniti quisquam soluta
        libero
        excepturi, mollitia atque, aperiam officia ab cumque dicta rem suscipit.
    </p>

    <div class="mt-8">
        <label for="item" class="font-semibold px-1">Haz una lista de las Características</label>
        <div class="relative mt-2 h-14 w-full">

            <x-input id="item" :key="'item'" wire:model="item" class="h-full"
                placeholder="Agrega los items que deben traer" />

            <button wire:click="addToList" title="Agregar a la lista" class="block absolute inset-y-0 right-4
                           p-1 m-auto h-10 w-10 text-white
                           bg-success rounded-full outline-none
                           hover:shadow-w1 transition-500">
                <x-icon-add-outline />
            </button>

        </div>

    </div>

    <h2 class="mt-8 font-semibold text-xl border-b pb-2">
        Lista de Requerimientos
    </h2>

    <div class="pl-2">

        @empty ($product->features)
        <div class="text-gray-400 text-sm py-2">La lista está vacía</div>
        @else
        <ol class="list-decimal list-inside text-sm mt-1">
            @foreach ($product->features as $key => $value)
            <li class="flex py-2 pl-2 mb-4 border-b ">
                <div class="w-4/5">
                    <span>{{ $value }}</span>
                </div>
                <div class="w-1/5 flex">
                    <button class="ml-auto mb-auto mr-2 text-gray-500 hover:text-secondary"
                        wire:click="deleteFromList({{ $key }})">Eliminar</button>
                </div>
            </li>
            @endforeach
        </ol>

        @endif

    </div>

</div>
