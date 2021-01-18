<div class="pb-8">

    <h1 class="font-extrabold text-3xl mb-2">
        Tamaño de grupo
    </h1>

    <p class="text-sm mb-4 px-1">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        Facilis pariatur dolor deleniti quisquam soluta libero
        excepturi, mollitia atque, aperiam officia ab cumque dicta
        rem suscipit.
    </p>


    <div class="w-2/4">

        <label for="input_groupSize" class="font-semibold px-1">
            {{ __('Choose an option') }}
        </label>

        <x-select id="input_groupSize"
                  :key="'product.groupSize'"
                  wire:model="product.groupSize">

            @for ($i= 1; $i<=$groupMaxSize; $i++ )
            <option value="{{ $i }}">{{ $i }}</option>
            @endfor
        </x-select>

        <x-error :key="'product.groupSize'" />

    </div>

</div>
