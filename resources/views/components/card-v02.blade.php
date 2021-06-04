<div class="relative shadow-lg h-80 lg:h-64">
    <img class="absolute inset-0 object-cover w-full h-full rounded-md"
        src="{{ $product->photos[0] ?? 'https://images.pexels.com/photos/1813346/pexels-photo-1813346.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'}}" />

    <div class="relative flex flex-col h-full">

        {{-- Pills --}}
        <div class="flex p-4">

            {{-- Pills 01 --}}
            <div class="flex items-center p-1 pr-4 mr-2 bg-white rounded-full bg-opacity-90">

                <span class="flex items-center justify-center w-6 h-6 rounded-full bg-secondary ">
                    <x-icon-star class="w-3 h-auto text-white" />
                </span>
                <span class="ml-2 text-xs text-gray-700">Destacado</span>

            </div>

            {{-- Pills 02 --}}
            <div class="flex items-center p-1 pr-4 mr-4 bg-white rounded-full bg-opacity-90">

                <span class="flex items-center justify-center w-6 h-6 rounded-full bg-success ">
                    <x-icon-wallet class="w-3 h-auto text-white" />
                </span>
                <span class="ml-2 text-xs text-gray-700">${{ number_format($product->price, 2, ',' , '.') }}</span>

            </div>
        </div>

        <div class="flex items-center justify-between w-full p-4 mt-auto bg-gradient-to-t from-gray-900 rounded-b-md">

            <div class="w-4/6">

                {{--Rating--}}
                <div class="w-12 h-auto px-3 py-1 font-bold leading-5 text-center text-white rounded-full bg-success">
                    4.8
                </div>

                {{-- Titulo --}}
                <h1 class="mt-2 text-base font-bold leading-5 text-white">{{ Str::limit($product->name,30) }}</h1>

                {{-- Ubicacion --}}
                <div class="mt-4 text-xs text-gray-400">{{ $product->state->name }} - {{ $product->city->name }}
                </div>
            </div>

            <form action="/make-favorite/1" class="self-end w-1/6">
                <button
                    class="flex items-center justify-center w-10 h-10 mx-auto border border-white rounded-full group focus:outline-none hover:bg-white">
                    <x-icon-heart
                        class="w-5 h-auto text-white duration-300 ease-out outline-none group-hover:text-primary transition-color"
                        title="Agregar a favoritos" />
                </button>
            </form>

        </div>
    </div>
</div>
