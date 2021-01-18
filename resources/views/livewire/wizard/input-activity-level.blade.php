<div class="pb-8">

    <h1 class="font-extrabold text-3xl mb-2">
        Nivel de intensidad de la(s) actividad(es)
    </h1>

    <p class="text-sm mb-4 px-1">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        Facilis pariatur dolor deleniti quisquam soluta libero
        excepturi, mollitia atque, aperiam officia ab cumque dicta
        rem suscipit.
    </p>


    <div class="w-3/5">

        <label for="input_activityLevel" class="font-semibold px-1">
            {{ __('Choose an option') }}
        </label>

        <x-select id="input_activityLevel"
                  :key="'product.activityLevel'"
                  wire:model="product.activityLevel">

            @foreach ($levelOptions as $option)
            <option  value="{{ $option }}">
                {{ __($option) }}
            </option>
            @endforeach

        </x-select>

        <x-error :key="'product.activityLevel'" />

    </div>


</div>
