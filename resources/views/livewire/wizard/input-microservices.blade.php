<div class="max-w-xl pb-8 mx-auto">

    <h1 class="mb-2 text-3xl font-extrabold">
        {{ __('Microservices') }}
    </h1>

    <p class="px-1 mb-4 text-sm">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        Facilis pariatur dolor deleniti quisquam soluta libero
        excepturi, mollitia atque, aperiam officia ab cumque dicta
        rem suscipit.
    </p>

    <div class="p-8 border rounded ">

        <div class="flex flex-wrap items-center">

            <div class="w-2/3 px-1">

                <label for="input_name" class="font-semibold">
                    {{ __('Name') }}
                </label>

                <x-input id="input_name" :key="'name'" wire:model.debounce.500ms="name" class="w-full h-full"
                    placeholder="Nombre de tu Servicio" />
            </div>

            <div class="w-1/3 px-1">

                <label for="input_price" class="font-semibold">
                    {{ __('Price') }}
                </label>

                <x-input id="input_price" :key="'price'" wire:model.debounce.500ms="price" class="w-full h-full"
                    placeholder="$0.00" />
            </div>

            <div class="w-full mt-4">
                <label for="input_descripcion" class="w-full font-semibold">
                    {{ __('Description') }}
                </label>
                <x-textarea id="input_description" :key="'description'" wire:model.debounce.500ms="description"
                    class="h-full" placeholder="Breve descripcion del servicio">
                </x-textarea>
            </div>

        </div>

        <div class="flex justify-center flex-shrink h-full p-4">
            <button title="Agregar a la lista" wire:click="addMicroserviceToList"
                class="px-4 py-2 text-white rounded-md outline-none bg-success hover:shadow-w1 transition-500">
                {{-- <x-icon-add-outline /> --}}
                Agregar
            </button>
        </div>
    </div>

    <div class="mt-8">
        <h2 class="pb-2 mt-8 text-xl font-semibold border-b">
            Lista de Microservicios
        </h2>

        <div class="pl-2">
            @empty($product->microservices)
            <div class="py-2 text-sm text-gray-400">
                {{ __('The list is empty') }}
            </div>
            @else
            <ol class="mt-1 text-sm list-decimal list-inside">
                @foreach ($product->microservices as $item)
                <li class="flex py-2 pl-2 mb-4 border-b ">
                    <div class="w-4/5">
                        <span>{{ $item }}</span>
                    </div>
                    <div class="flex w-1/5">
                        <button wire:click="removeFeatureFromList({{ $loop->index }})"
                                class="mb-auto ml-auto mr-2 text-gray-500 hover:text-secondary">
                            {{ __('Remove') }}
                        </button>
                    </div>
                </li>
                @endforeach
            </ol>
            @endempty

        </div>

    </div>

</div>
