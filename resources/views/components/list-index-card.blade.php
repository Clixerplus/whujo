<div class="p-4 bg-white border shadow-xl rounded-3xl">
    <div class="flex-none lg:flex">

        <div class="w-full h-full mb-3 lg:h-36 lg:w-32 lg:mb-0">
            <img src="{{ $product->coverPhoto }} " alt="{{ $product->coverPhoto }}"
                class="object-scale-down w-full lg:object-center lg:object-cover lg:h-44 rounded-2xl">
        </div>

        <div class="flex-1 py-2 ml-4 justify-evenly">

            <div class="flex flex-wrap px-2">
                <div class="flex-none w-full text-xs font-medium text-primary ">
                    Product title
                </div>
                <h2 class="flex-auto text-lg font-medium">{{ $product->name }}</h2>
            </div>

            <p class="px-2 mt-2 text-sm font-light">{{ $product->description }}</p>

            <hr class="my-4">
            <div class="flex px-2 space-x-3 text-sm font-medium">
                <div class="flex items-center flex-auto space-x-3">
                    <span
                        class="inline-flex items-center justify-center w-8 h-8 text-xs text-white bg-gray-600 rounded-full">
                        {{ $product->rating }}
                    </span>
                    <span class="inline-block text-xs text-gray-600 ">
                        {{ $product->reviewsCount }} {{ __('Reviews') }}
                    </span>
                </div>
                <div class="flex items-center space-x-4 text-xs text-gray-500">
                    <a href="{{ route(
    Str::of($productType)->singular()->lower()->camel() . '.edit',
    $product,
) }}"
                        class="hover:text-gray-700 hover:underline focus:outline-none">
                        {{ __('Edit') }}
                    </a>


                    <form method="POST" action="{{ route('service.delete', $product->id) }}">
                        @csrf
                        <button type="submit" class="hover:text-gray-700 hover:underline focus:outline-none">
                            {{ __('Delete') }}
                        </button>
                    </form>

                    @if (!$product->isPublished())
                        <button class="hover:text-gray-700 hover:underline focus:outline-none">
                            {{ __('Publish') }}
                        </button>
                    @else
                        <button class="hover:text-gray-700 hover:underline focus:outline-none">
                            {{ __('Unpublish') }}
                        </button>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
