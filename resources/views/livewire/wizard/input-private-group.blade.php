<div class="text-gray-800">

    <h1 class="font-extrabold text-3xl mb-2">
        Grupos Privados
    </h1>
    <p class="text-sm mb-4">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Consequatur alias rerum, aperiam blanditiis optio dolorem.
    </p>


    <div class="my-4">

        <div class="flex itmes-center space-x-2 font-semibold">
            <label for="input_privateGroup">
                {{ __('Allows private groups') }}
            </label>
            <div class="relative inline-block w-10 mr-2 align-middle select-none transition-200">
                <input id="input_privateGroup"
                       name="product.privateGroup"
                       wire:model="product.privateGroup"
                       type="checkbox"
                       required
                       class="toggle-checkbox absolute block
                              w-6 h-6 rounded-full bg-white
                              border-4 appearance-none
                              cursor-pointer"/>

                <label for="input_privateGroup"
                       class="toggle-label block
                              overflow-hidden h-6
                              rounded-full bg-gray-300
                              cursor-pointer">
                </label>
            </div>

        </div>

        <div>
            <label for="input_privateGroupPrice" class="font-semibold">
                {{ __('Minimum contract price') }}
            </label>
            <x-input id="input_privateGroupPrice"
                     type="number"
                     :key="'product.privateGroupPrice'"
                     wire:model.debounce.500ms="product.privateGroupPrice"
                     placeholder="$ 0.00"
                     min="{{ $minimumPrice }}"
                     class="w-96 appearance-none"
                     autofocus
                     @if ('product.privateGroup')
                      required
                     @endif />

            <x-error :key="'product.privateGroupPrice'" />
        </div>

    </div>

</div>
