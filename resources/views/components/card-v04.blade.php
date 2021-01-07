<div class="group relative overflow-y-hidden shadow rounded-md pb-2">

    <div class="relative h-52 text-white">

        <img class="absolute inset-0 object-cover w-full h-full rounded-t-md"
            src="{{ $product->photos ?? 'https://images.pexels.com/photos/1813346/pexels-photo-1813346.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'}}" />

        <div class="relative p-4">
            <div class="flex">
                <x-badge class="bg-warning text-white" icon="star">Destacado</x-badge>
                <x-badge class="bg-info text-white" icon="star">Nuevo</x-badge>
            </div>
        </div>

        <div class="absolute inset-x-0 bottom-0 h-full
                    bg-gradient-to-t from-secondary">
            <div class="flex h-full items-end justify-between px-4">
                <div class="flex items-start">
                    $ <span class="text-2xl">{{ number_format($product->price, 2, ',' , '.') }}</span>
                </div>
                <div class="">
                    <img class="w-10 h-10 object-cover rounded-full ring ring-white"
                        src="//images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80"
                        alt="Avatar of Tailwind CSS Design" />
                </div>
            </div>
        </div>

    </div>

    <h1 class="text-md font-bold leading-1 h-16 py-2 px-4 round-b-md bg-secondary text-white">
        {{ Illuminate\Support\Str::limit($product->name, 50) }}
    </h1>
    <h2 class="px-4 text-sm mt-2 text-gray-500">
        {{ $product->state->name }} - {{ $product->city->name }}
    </h2>

    <div class="flex items-center justify-between px-4 mt-2">
        <div class="flex flex-col items-center">
            <span class="text-2xl font-bold">3.8</span>
            <x-star-rating rating="3.8" class="text-warning" />
        </div>
        <div class="relative z-20">
            <button class="group flex items-center justify-center w-10 h-10
                           border hover:border-primary rounded-full
                         text-gray-300 hover:text-primary
                           transition-color ease-out duration-300">
                <x-icon-heart class="w-5 h-auto" title="Agregar a favoritos" />
            </button>
        </div>
    </div>

    <div class="absolute inset-0 bg-secondary text-white bg-opacity-95 rounded-md
                transform translate-y-full group-hover:translate-y-0
                transition ease-in-out duration-500 z-10">
        <p class="px-4 text-md mt-2 leading-6 h-32">
            {{ $product->description }}
        </p>
    </div>

</div>
