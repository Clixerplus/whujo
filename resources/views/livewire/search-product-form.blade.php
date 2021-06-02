<section class="relative w-full mx-auto bg-white bg-opacity-50 rounded-md"
    x-data="{ isSearchActive: @entangle('isSearchActive') }">
    <form action="/listing">

        <div class="relative">
            <span class="absolute inset-y-0 left-0 items-center hidden pl-3 md:flex ">
                <x-icon-search class="w-5 h-5 text-gray-400" />
            </span>

            <input type="text" placeholder="Type Something" spellcheck="false" data-ms-editor="true"
                class="w-full py-4 pl-10 pr-4 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-red-500 dark:focus:border-blue-500 focus:outline-none focus:ring focus:ring-red-500"
                wire:model.debounce.500ms="search" name="search" wire:keydown="activateSearch"
                wire:keydown.escape="deactivateSearch" autocomplete="false" required>

            <x-button type="submit"
                class="absolute top-0 right-0 flex items-center h-12 m-1 bg-primary focus:ring focus:ring-primary focus:ring-opacity-50 active:bg-primary-light active:ring-red-200">
                <span class="hidden md:inline-flex">{{ __('Search') }}</span>
                <x-icon-search class="w-6 h-6 md:hidden" />
            </x-button>
        </div>

        <div class="absolute inset-x-0 w-full mt-2 overflow-y-auto text-left bg-white border rounded max-h-44"
            x-show="isSearchActive" x-cloak>
            @if($results)
            <ul>
                @foreach ($results as $type_results => $data_result)
                <li
                    class="px-4 py-2 font-medium text-secondary capitalize border-b border-gray-200 @if ($loop->iteration > 1) mt-6 @endif">
                    {{ str_replace('-',' ', __($type_results)) }}
                </li>

                @foreach ($data_result as $result)
                <li class="w-full">
                    <a class="block h-full px-6 py-2 text-sm text-gray-500 capitalize transition-colors duration-300 ease-out cursor-pointer hover:bg-red-100 hover:text-gray-700"
                        x-on:click="$wire.pickResult('{{ $result }}')">
                        {{ $result }}
                    </a>
                </li>
                @endforeach

                @endforeach
            </ul>
            @else
            <p class="p-4 text-sm text-gray-500">
                {{ __('No results found') }}
            </p>
            @endif
        </div>

    </form>
</section>




{{-- <div>
    <form method="get" action="/listing">
        <div class="relative ">

            <input type="text" wire:model.debounce.500ms="search" name="search" wire:keydown="activateSearch"
                wire:keydown.escape="deactiveSearch" placeholder="{{ __('Que estas buscando?') }}"
class="w-full p-4 rounded" autocomplete="false">

<x-button type="submit"
    class="absolute top-0 right-0 m-1 bg-primary focus:ring focus:ring-primary focus:ring-opacity-50 active:bg-primary-light active:ring-red-200">
    <span class="hidden lg:inline">{{ __('Search') }}</span>
    <x-icon-search class="w-6 h-6 lg:hidden" />
</x-button>


@if($activateSearch)
<div class="absolute inset-x-0 h-auto mt-1 top-12">
    <div class="h-48 overflow-y-auto bg-white border rounded shadow max-h-48">
        @if($results)
        <div
            class="absolute inset-x-0 px-6 py-3 mx-5 mt-4 overflow-y-auto bg-white border border-gray-300 rounded-md max-h-72">
            @foreach ($results as $key => $item)

            <span href="#" class="block py-1 font-medium text-gray-700">
                <span class="">
                    {{ str_replace("-"," ",$key) }}
                </span>
            </span>

            @foreach ($item as $result)
            <a href="#" class="block py-1">
                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">{{ str_replace("-"," ",$result) }}</p>
            </a>

            @endforeach
            @endforeach
        </div>

        @else
        <h3 class="p-4">No results was found</h3>
        @endif
    </div>
</div>
@endif
</div>
</form>
</div> --}}
{{-- <div>
    <form method="get" action="/listing">
        <div class="flex flex-col items-center justify-center w-full py-2 mb-8 text-lg border rounded-md shadow-xl md:flex-row md:px-2 md:bg-white">

            <div class="relative w-full md:flex-1 md:border-r md:mb-0">
                <input type="text" wire:model="search" class="w-full px-4 focus:outline-none " name="search"
                    wire:keydown="activateSearch" placeholder="{{ __($placeholder[$productType]) }}">


<ul class="absolute left-0  w-full mt-5 overflow-y-auto bg-white @if (! $activateSearch) hidden @endif"
    style="max-height: 220px;">

    @forelse ($results as $key => $result)

    @if($loop->first)
    <li class="w-full p-4 text-sm font-bold text-left bg-gray-200">
        {{ __('Results') }} <span class="text-xs">({{ count($results) }})</span>
    </li>
    @endif

    <li class="w-full px-5 py-4 overflow-hidden text-sm text-left cursor-pointer hover:bg-gray-300 whitespace-nowrap overflow-ellipsis"
        wire:click="pickResult('{{ $result }}')">
        {{ $result }}
    </li>

    @empty

    <li class="w-full px-5 py-4 text-sm text-left">
        {{ __('No results found') }}
    </li>

    @endforelse
</ul>

</div>

<div class="self-start pl-4 md:self-center">
    <button type="submit"
        class="px-4 py-2 font-bold text-white rounded-md focus:outline-none bg-primary hover:bg-primary-light">
        {{ __('Search') }}
    </button>
</div>

</div> --}}

{{--  <div class="flex mb-10 text-white md:space-x-8 md:justify-center md:mb-16">

            <label for="share-a-coffee" class="radio-buttom">
                <input id="share-a-coffee" type="radio" name="type" value="share-a-coffee" class="hidden" checked
                    wire:model="productType" />
                <span class="block p-3 rounded-md cursor-pointer hover:opacity-75 opacity-40 w-36 bg-accent-orange">
                    {{ __('Share a coffee') }}
</span>
</label>

<label for="service" class="radio-buttom">
    <input id="service" type="radio" name="type" value="service" class="hidden" wire:model="productType" />
    <span class="block p-3 rounded-md cursor-pointer hover:opacity-75 opacity-40 w-36 bg-accent-orange">
        {{ __('Services') }}
    </span>
</label>

<label for="experience" class="radio-buttom">
    <input id="experience" type="radio" name="type" value="experience" class="hidden" wire:model="productType" />
    <span class="block p-3 rounded-md cursor-pointer hover:opacity-75 opacity-40 w-36 bg-accent-orange">
        {{ __('Experiencias') }}
    </span>
</label>


</div> --}}
{{--
    </form>
</div>
 --}}