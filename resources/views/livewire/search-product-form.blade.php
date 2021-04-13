@php
$placeholder = [
'service'=> 'Make your life easier',
'experience'=> 'Discover a new world',
'share-a-coffee'=> 'Share amazing moments'
];
@endphp
<div>
    <form method="get" action="/listing">
        <div
            class="flex flex-col items-center justify-center w-full py-2 mb-8 text-lg border rounded-md shadow-xl md:flex-row md:px-2 md:bg-white">

            <div class="relative w-full md:flex-1 md:border-r md:mb-0">
                <input type="text" wire:model="search" class="w-full px-4 focus:outline-none " name="search"
                    wire:keydown="activeSearch" placeholder="{{ __($placeholder[$productType]) }}">

                @if (count($results))
                <ul class="absolute left-0 z-10 w-full mt-5 overflow-y-auto bg-white" style="max-height: 220px;">

                    @forelse ($results as $key => $result)

                    @if($loop->first)
                    <li class="w-full p-4 text-sm font-bold text-left bg-gray-200">
                        {{ __('Results') }}
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
                @endif
            </div>

            <div class="self-start pl-4 md:self-center">
                <button type="submit"
                    class="px-4 py-2 font-bold text-white rounded-md bg-primary hover:bg-primary-light">
                    {{ __('Search') }}
                </button>
            </div>

        </div>

        <div class="flex mb-10 text-white md:space-x-8 md:justify-center md:mb-16">

            <label for="share-a-coffee" class="radio-buttom">
                <input id="share-a-coffee" type="radio" name="type" value="share-a-coffee" class="hidden" checked
                    wire:model="productType" />
                <span class="block p-3 rounded-full cursor-pointer hover:opacity-75 opacity-40 w-36 bg-accent-orange">
                    {{ __('Share a coffee') }}
                </span>
            </label>

            <label for="service" class="radio-buttom">
                <input id="service" type="radio" name="type" value="service" class="hidden" wire:model="productType" />
                <span class="block p-3 rounded-full cursor-pointer hover:opacity-75 opacity-40 w-36 bg-accent-orange">
                    {{ __('Services') }}
                </span>
            </label>

            <label for="experience" class="radio-buttom">
                <input id="experience" type="radio" name="type" value="experience" class="hidden"
                    wire:model="productType" />
                <span class="block p-3 rounded-full cursor-pointer hover:opacity-75 opacity-40 w-36 bg-accent-orange">
                    {{ __('Experiencias') }}
                </span>
            </label>


        </div>

    </form>
</div>