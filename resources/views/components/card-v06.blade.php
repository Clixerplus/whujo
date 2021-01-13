<div class="overflow-hidden transition-shadow duration-300 bg-white rounded shadow-sm">
    <img src="https://images.pexels.com/photos/2408666/pexels-photo-2408666.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;w=500"
        class="object-cover w-full h-64" alt="" />
    <div class="p-5 border border-t-0">
        <p class="mb-3 text-xs font-semibold tracking-wide uppercase">
            <a href="/" class="transition-colors duration-200 text-blue-gray-900 hover:text-primary"
                aria-label="Category" title="Próximo">Próximo</a>
            <span class="text-gray-600">— 28 Dec 2020</span>
        </p>
        <a href="{{ route('product', [$product->type, $product->id, $product->slug ])}}" aria-label="Category"
           class="inline-block mb-3 text-2xl font-bold leading-5 transition-colors duration-200 hover:text-primary">
           {{ $product->name }}
        </a>
        <p class="mb-2 text-gray-700 h-18  mt-6">
            {{ $product->description }}
        </p>
        <a href="{{ route('product', [$product->type, $product->id, $product->slug ])}}"
           class="w-full bg-primary text-white rounded-md
                  py-2 mt-4 inline-flex items-center justify-center
                  font-semibold transition-colors duration-200 hover:bg-secondary">
                  Reservar
        </a>
    </div>
</div>
