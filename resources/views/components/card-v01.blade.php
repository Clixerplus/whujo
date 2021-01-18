<div class="relative overflow-hidden duration-300 bg-primary w-full lg:w-72 shadow-w1" style="border-radius: 50px 0 50px 0;">
    <div class="group">
        <img src="https://images.pexels.com/photos/2408666/pexels-photo-2408666.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;w=500" class="object-cover w-full h-64" alt="" />
        <div
            class="absolute inset-0 h-64 bg-secondary bg-opacity-60 flex items-center justify-center transition transform -translate-y-64 group-hover:translate-y-0 duration-300">
            <a href="{{ route('product', [$product->type, $product->id, $product->slug]) }}"
                class="bg-primary leading-6 px-4 py-2 rounded-md text-white ">Contratar</a>
        </div>
    </div>

    <div class="bg-white p-4 border border-t-0">
        <div class="flex items-center justify-between mb-3 h-28">
            <a href="/" aria-label="Category" title="{{ $product->name }}"
                class="w-full mr-4 leading-6 text-lg font-bold transition-colors duration-200 hover:text-primary">
                {{ $product->name }}
            </a>
            <span class="flex  items-center font-bold leading-6 text-xl">
                <x-icon-star class="text-yellow-400 fill-current h-auto w-6 mr-2" />
                {{ rand(1,4)}}.{{ rand(0,9)}}
            </span>
        </div>
        <div class="flex items-center mb-3">
            <span class="leading-6 flex mr-4">
                <x-icon-map-outline class="text-secondary fill-current h-auto w-6 mr-2" />
                {{ $product->city->name }}
            </span>
            <span class="leading-6 flex">
                <x-icon-cash-outline class="text-secondary fill-current h-auto w-6 mr-2" />
                ${{ number_format($product->price,2,',','.') }}
            </span>
        </div>
        <p class="mb-2 text-gray-700 text-sm h-44 ">
            @if(Str::length('jh') < 250)
                 {{ $product->description }}
            @else
                {{ substr($product->description , 1, 200 ) + '. . .' }};
            @endif

        </p>
    </div>

</div>
