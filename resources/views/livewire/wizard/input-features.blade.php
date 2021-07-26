<div class="max-w-xl pb-8 mx-auto">

    <h1 class="mb-2 text-3xl font-extrabold">
        Caracterírsticas Resaltantes del Servicio
    </h1>
    <p class="px-1 mb-4 text-sm">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        Facilis pariatur dolor deleniti quisquam soluta libero
        excepturi, mollitia atque, aperiam officia ab cumque dicta
        rem suscipit.
    </p>

    <div class="mt-8">
        <label for="input_feature" class="px-1 font-semibold">
            Elabora tu listado
        </label>
        <div class="relative w-full mt-2 h-14">
            <x-ui::input id="input_feature" class="h-full" :key="'feature'" wire:model.debounce.500ms="feature"
                placeholder="Agrega los items que deben traer" />

            <x-ui::error :key="'feature'" />

            <div class="absolute inset-y-0 w-10 h-10 bg-white right-4">
                <button wire:click="addFeatureToList" title="Agregar"
                    class="block w-full h-full p-1 m-auto text-white transition ease-in-out rounded-full outline-none hover:shadow-w1 bg-success">
                    <x-icon-add-outline />
                </button>
            </div>
        </div>

    </div>

    <h2 class="pb-2 mt-8 text-xl font-semibold border-b">
        Lista de Características
    </h2>

    <div class="">
        @empty($features)
            <div class="py-2 text-sm text-gray-400">
                {{ __('The list is empty') }}
            </div>
        @else
            <ol class="text-sm list-decimal list-inside">
                @foreach ($features as $item)
                    <li class="flex px-2 py-2 rounded hover:bg-gray-100">
                        <span class="flex-1">{{ $item }}</span>
                        <button wire:click="removeFeatureFromList({{ $loop->index }})"
                            class="flex-grow-0 mb-auto ml-auto mr-2 text-xs text-gray-500 hover:text-secondary hover:underline">
                            {{ __('Remove') }}
                        </button>
                    </li>
                @endforeach
            </ol>
        @endempty

    </div>

</div>
