@props([
    'icon'=> [
        'service'=> 'icon-persons',
        'experience' => 'icon-world',
        'shareACoffee' => 'icon-coffee',
        'user' => 'icon-person'
    ],
])
<div class="px-4">

    <x-input key="search" {{ $attributes->merge(['class' => 'w-full' ,'placeholder'=>'Buscar']) }} :size="$size" />

    <div class="hidden w-full pb-2 overflow-x-hidden overflow-y-auto text-sm text-left text-gray-400 border shadow-xl max-h-96">
    @if (count($autocomplete_results))

        @foreach ($autocomplete_results as $category => $category_result)
            @if (count($category_result))
            <div>

                {{-- Category --}}
                <h3 class="flex items-center p-2 space-x-2 font-bold text-gray-500 bg-gray-100">
                    <x-dynamic-component :component="$icon[$category]" class="w-4 h-4 text-gray-500" />
                    <span>{{ $category }}</span>
                </h3>

                {{-- Results --}}
                <ul>
                    @foreach ($category_result as $result)
                    <li class="px-4 py-2">{{ $result['name'] }}</li>
                    @endforeach
                </ul>

            </div>
            @endif
        @endforeach

    @else
        <h3 class="p-4 bg-co">No se encontraron resultados</h3>
    @endif
    </div>
</div>
