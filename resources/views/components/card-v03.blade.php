<div class="shadow-w1 border rounded-md pb-2 bg-gray-100">

    <div class="relative h-56">

        <img class="absolute inset-0 object-cover w-full h-full rounded-t-md"
            src="{{ $product->photos ?? 'https://images.pexels.com/photos/1813346/pexels-photo-1813346.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'}}" />

        <div class="relative p-4">
            <span class="relative text-xs text-white px-2 py-1  bg-primary rounded-md">Destacado</span>
        </div>

        <div
            class="absolute inset-x-0 bottom-0 h-full p-4 flex items-end justify-between text-white bg-gradient-to-t from-secondary">
            <div class="flex items-start">
                $ <span class="text-3xl">{{ number_format($product->price, 2, ',' , '.') }}</span>
            </div>
            <div>
                <img class="w-10 h-10 object-cover rounded-full ring ring-white"
                    src="//images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80"
                    alt="" />
            </div>
        </div>

    </div>

    <div class="">
        <h1 class="text-md font-bold leading-1 h-16 py-2 px-4 round-b-md bg-secondary text-white" style="text-overflow: ellipsis;">
            {{ Illuminate\Support\Str::limit($product->name, 50) }}
        </h1>
        <h2 class="px-4 text-sm mt-2 text-gray-500">
            {{ $product->state->name }} - {{ $product->city->name }}</h2>
        <p class="px-4 md:text-sm mt-2 h-28 ">
            {{ Illuminate\Support\Str::limit($product->description, 160) }}
        </p>

        <div class="flex items-center justify-between px-4 mt-4">
            <div class="flex flex-col items-center">
                <span class="text-2xl font-bold">3.8</span>
                <x-star-rating rating="3.8" class="text-warning" />
            </div>
            <div>
                <button
                    class="group flex items-center justify-center
                           w-10 h-10 rounded-full border  hover:border-primary
                           transition-color ease-out duration-300">
                    <x-icon-heart
                        class="w-5 h-auto text-gray-300 group-hover:text-primary transition-color ease-out duration-300"
                        title="Agregar a favoritos" />
                </button>
            </div>
        </div>
    </div>
</div>
