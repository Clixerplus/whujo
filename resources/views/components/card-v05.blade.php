<div class="group relative overflow-y-hidden shadow-w1 border rounded-md h-80">

    {{-- Background --}}
    <img class="absolute inset-0 object-cover w-full h-full "
        src="{{ $product->photos ?? 'https://images.pexels.com/photos/1813346/pexels-photo-1813346.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'}}" />

    <div class="relative flex flex-col h-full mt-auto bg-gradient-to-t from-secondary p-4">

        {{-- Badge --}}
        <div class="flex">
            <x-badge class="bg-warning text-white" icon="star">Destacado</x-badge>
        </div>

        <div class="flex items-end justify-between mt-auto">

            <div class="flex flex-col space-y-1">

                <div class="flex items-center h-12 space-x-4 mt-auto text-white">

                    {{-- Avatar --}}
                    <div class="flex-none w-10 h-16 py-3">
                        <img class="w-full h-full object-cover rounded-full ring ring-white"
                            src="//images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80"
                            alt="" />
                    </div>

                    {{-- Calificacion --}}
                    <div class="flex flex-col ">
                        <span class="text-2xl font-bold text-white">3.8</span>
                        <x-star-rating rating="3.8" class="text-warning" />
                    </div>

                </div>

                {{-- Nombre --}}
                <div class="h-12 pr-3">
                    <h1 class="text-md font-bold text-white">
                        {{ Illuminate\Support\Str::limit($product->name, 40) }}
                    </h1>
                </div>

                {{-- Localizacion --}}
                <div class="text-sm text-gray-300 h-6  pr-2.5">
                    <span>{{ $product->state->name }} - {{ $product->city->name }}</span>
                </div>

            </div>

            {{-- Agregr a favoritos Favoritos --}}
            <div class="z-20">
                <button class="flex items-center justify-center w-10 h-10
                               rounded-full border hover:bg-white
                             text-gray-300 hover:text-primary
                               transition-color ease-out duration-300">
                    <x-icon-heart class="w-5 h-auto" title="Agregar a favoritos" />
                </button>
            </div>

        </div>

    </div>

    {{-- Descripcion --}}
    <p class="absolute inset-0 text-md  text-white p-4 leading-6
            bg-secondary bg-opacity-95 rounded-md
              transform translate-y-full group-hover:translate-y-0
              transition-all ease-in-out duration-300 z-10">
        {{ $product->description }}
    </p>

</div>
