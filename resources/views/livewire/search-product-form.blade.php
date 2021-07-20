<div class="w-full">
    <form action="{{ route('search') }}" class="w-full">

        <div class="flex flex-wrap md:h-12 space-y-2 md:bg-white rounded-md md:space-y-0 p-1 w-full">
            <x-search-tag :tags="$tags" :model="$model" />

            <x-search-locator :locations="$locations" :model="$model" />

            <x-search-category :categories="$categories" :model="$model" />

            <button type="submit" class="w-full h-10 text-white md:w-1/12 bg-primary rounded-md px-1" placeholder="Button">
                {{ __('Search') }}
            </button>
        </div>

        <input type="hidden" wire:model="type" />


        <div class="flex justify-center w-full gap-4 pt-4">
            <button wire:click="changeType(0)" type="button" class="w-32 py-2 text-white bg-white bg-opacity-25">
                Services
            </button>
            <button wire:click="changeType(1)" type="button" class="w-32 py-2 text-white bg-white bg-opacity-25">
                Experience
            </button>
            <button wire:click="changeType(2)" type="button" class="w-32 py-2 text-white bg-white bg-opacity-25">
                Share a Coffee
            </button>
        </div>
        
    </form>
</div>
