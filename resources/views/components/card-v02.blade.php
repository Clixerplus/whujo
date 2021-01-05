<div class="relative h-full shadow-lg">
    <img class="absolute inset-0 object-cover w-full h-full rounded-md"
        src="{{ $product->photos ?? 'https://images.pexels.com/photos/1813346/pexels-photo-1813346.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'}}" />

    <div class="relative flex flex-col h-full">

        {{-- Pills --}}
        <div class="flex p-4">

            {{-- Pills 01 --}}
            <div class="flex p-1 pr-4 mr-2 items-center rounded-full bg-white bg-opacity-90">

                <span class="w-6 h-6 flex justify-center items-center rounded-full bg-primary ">
                    <x-icon-star class="w-3 h-auto text-white" />
                </span>
                <span class="text-xs ml-2 text-gray-700">Destacado</span>

            </div>

            {{-- Pills 02 --}}
            <div class="flex p-1 pr-4 items-center rounded-full bg-white bg-opacity-90 mr-4">

                <span class="w-6 h-6 flex justify-center items-center rounded-full bg-success ">
                    <x-icon-wallet class="w-3 h-auto text-white" />
                </span>
                <span class="text-xs ml-2 text-gray-700">${{ number_format($product->price, 2, ',' , '.') }}</span>

            </div>
        </div>

        <div class="flex items-center justify-between mt-auto w-full bg-gradient-to-t from-secondary p-4 rounded-b-md">

            <div class="w-4/6">

                {{--Rating--}}
                <div class="w-12 h-auto text-center leading-5 py-1 px-3 text-white font-bold bg-success rounded-full">
                    4.8
                </div>

                {{-- Titulo --}}
                <h1 class="text-lg font-bold leading-5 text-white mt-2">{{ $product->name }}</h1>

                {{-- Ubicacion --}}
                <div class="text-sm mt-4 text-gray-400">{{ $product->city->name }} - {{ $product->departament->name }}
                </div>
            </div>

            <form action="/make-favorite/1" class="w-1/6 self-end">
                <button
                    class="mx-auto group flex items-center justify-center w-10 h-10 rounded-full border border-white focus:outline-none hover:bg-white">
                    <x-icon-heart
                        class="w-5 h-auto text-white group-hover:text-primary transition-color ease-out duration-300 outline-none"
                        title="Agregar a favoritos" />
                </button>
            </form>

        </div>
    </div>
</div>
