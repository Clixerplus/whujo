<div class="pb-8 max-w-xl mx-auto">

    <h1 class="font-extrabold text-3xl mb-2">
        Que deberán traer tus invitados
    </h1>
    <p class="text-sm mb-4 px-1">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        Facilis pariatur dolor deleniti quisquam soluta libero
        excepturi, mollitia atque, aperiam officia ab cumque dicta
        rem suscipit.
    </p>

    <div class="mt-8">
        <label for="input_requeriment" class="font-semibold px-1">
            Elabora tu listado de requerimientos
        </label>
        <div class="relative mt-2 h-14 w-full">
            <x-input id="input_requeriment"
                     class="h-full"
                     :key="'requeriment'"
                     wire:model.debounce.500ms="requeriment"
                     placeholder="Agrega los items que deben traer" />

            <x-error :key="'requeriment'" />

            <button wire:click="addRequerimentToList"
                    title="Agregar"
                    class="block absolute inset-y-0 right-4
                           p-1 m-auto h-10 w-10 rounded-full
                           outline-none hover:shadow-w1
                           transition ease-in-out
                           text-white bg-success">
                <x-icon-add-outline />
            </button>
        </div>

    </div>

    <h2 class="mt-8 font-semibold text-xl border-b pb-2">
        Lista de Requerimientos
    </h2>

    <div class="pl-2">
        @empty($experience->toBring)
        <div class="text-gray-400 text-sm py-2">
            {{ __('The list is empty') }}
        </div>
        @else
        <ol class="list-decimal list-inside text-sm mt-1">
            @foreach ($experience->toBring as $item)
            <li class="flex py-2 pl-2 mb-4 border-b ">
                <div class="w-4/5">
                    <span>{{ $item }}</span>
                </div>
                <div class="w-1/5 flex">
                    <button wire:click="removeRequerimentFromList({{ $loop->index }})"
                            class="ml-auto mb-auto mr-2 text-gray-500 hover:text-secondary">
                        {{ __('Remove') }}
                    </button>
                </div>
            </li>
            @endforeach
        </ol>
        @endempty

    </div>

</div>
