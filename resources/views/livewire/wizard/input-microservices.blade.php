<div class="pb-8 max-w-xl mx-auto">

    <h1 class="font-extrabold text-3xl mb-2">
        {{ __('Microservices') }}
    </h1>

    <div class="mt-8">

        <label for="item" class="font-semibold px-1">
            Haz una lista de los Microservicios que quieres ofrecer
        </label>

        <div class="relative mt-2 h-14 w-full">

            <div class="flex items-center space-x-1 w-full">

                <div class="w-2/4">

                    <label for="input_name" class="font-semibold">
                        {{ __('Name') }}
                    </label>

                    <x-input id="input_name"
                            :key="'name'"
                            wire:model.debounce.500ms="name"
                            class="w-full h-full"
                            placeholder="Nombre de tu Servicio" />
                </div>

                <div class="w-1/3">

                    <label for="input_price" class="font-semibold">
                        {{ __('Price') }}
                    </label>

                    <x-input id="input_price"
                            :key="'price'"
                            wire:model.debounce.500ms="price"
                            class="w-full h-full"
                            placeholder="$0.00" />
                </div>

                <div class="flex-shrink ">
                    <button title="Agregar a la lista"
                            wire:click="addMicroserviceToList"
                            class="p-1 m-auto h-10 w-10 text-white
                                   bg-success rounded-full outline-none
                                   hover:shadow-w1 transition-500">
                        <x-icon-add-outline />
                    </button>
                </div>

            </div>

            <label for="input_descripcion" class="font-semibold">
                {{ __('Description') }}
            </label>
            <x-textarea id="input_description"
                        :key="'description'"
                        wire:model.debounce.500ms="description"
                        class="h-full"
                        placeholder="Breve descripcion del servicio">
            </x-textarea>

        </div>

    </div>

    <h2 class="mt-8 font-semibold text-xl border-b pb-2 bg-black">
        lista de Microservicios
    </h2>

    <div class="pl-2">

        @empty ($product->microservice)

        <div class="text-gray-400 text-sm py-2">
            {{ __('The list is empty') }}
        </div>

        @else

        <ol class="list-decimal list-inside text-sm mt-1">
            @foreach ($product->microservice as $microservice)
            <li class="flex py-2 pl-2 mb-4 border-b ">
                <div class="w-4/5">
                    <span>{{ $microservice->name }}</span>
                </div>
                <div class="w-1/5 flex">
                    <button class="ml-auto mb-auto mr-2 text-gray-500 hover:text-secondary"
                            wire:click="deleteMicroservice({{ $microservice->id }})">
                        {{ __('Remove') }}
                    </button>
                </div>
            </li>
            @endforeach
        </ol>

        @endempty

    </div>
    
</div>
