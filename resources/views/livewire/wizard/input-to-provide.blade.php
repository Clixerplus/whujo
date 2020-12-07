<div class="pb-8">

    <h1 class="font-extrabold text-3xl mb-2">Que proveeras durante la actividad</h1>
    <p class="text-sm mb-4 px-1">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis pariatur dolor deleniti quisquam soluta
        libero
        excepturi, mollitia atque, aperiam officia ab cumque dicta rem suscipit.
    </p>

    <div class="mt-8">
        <label for="item" class="font-semibold px-1">Describe brevemente tu actividad</label>
        <div class="relative mt-2 h-14 w-full">
            <x-ui.input wire:model="item" class="h-full" id="item" name="item"
                placeholder="Agrega los items a proveer" />
            <button wire:click="addItem" class="block absolute inset-y-0 right-4 p-1 m-auto h-10 w-10 rounded-full outline-none hover:shadow-w1 transition ease-in-out text-white bg-success">
                <x-icon-add-outline />
            </button>
        </div>

    </div>

    <h2 class="mt-8 font-semibold text-xl border-b pb-2">Lista de Provisiones</h2>
    <div class="pl-2">

        @if (count($toProvide)>=1)
        <ol class="list-decimal list-inside text-sm mt-1">
            @foreach ($toProvide as $item)
            <li class="flex py-2 pl-2 mb-4 border-b ">
                <div class="w-4/5">
                    <span>{{ $item}}</span>
                </div>
                <div class="w-1/5 flex">
                    <button class="ml-auto mb-auto mr-2 text-gray-500 hover:text-secondary" wire:click="deleteItem({{$loop->index}})">Eliminar</button>
                </div>
            </li>
            @endforeach
        </ol>
        @else
        <div class="text-gray-400 text-sm py-2">La lista está vacía</div>
        @endif

    </div>

</div>
