@props([
    'active' => false,
    'labelTag' => 'Dropdown label',
    'closeOnClick' => true,
])

<div class="w-full" x-data="{open : false}">

    <div class="relative mt-1">

        <button type="button" x-on:click="open = true"
            class="relative w-full py-2 pl-3 pr-10 text-left bg-white border rounded-md shadow cursor-default hover:border-gray-400 focus:outline-none focus:ring-1 focus:ring-gray-200 sm:text-sm @if($active) border-400 bg-secondary  @endif">
            <span class="flex items-center">
                <span class="block ml-3 truncate @if($active) text-gray-100 @else text-gray-600 @endif">
                    {{ $labelTag }}
                </span>
            </span>
            <span class="absolute inset-y-0 right-0 flex items-center pr-2 ml-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                    fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                        clip-rule="evenodd">
                    </path>
                </svg>
            </span>
        </button>

        <div class="absolute z-10 w-auto mt-1 overflow-y-auto bg-white rounded-md shadow max-h-44" x-show="open"
            @if ($closeOnClick) @click="open = false" @endif  @click.away="open = false" x-cloak>

            {{ $slot }}
        </div>

    </div>
</div>
