<div class="w-full">
    <form action="{{ route('search') }}" class="w-full">

        <div class="flex flex-wrap w-full space-y-2 rounded-md lg:bg-white lg:space-y-0">
            <x-search-tag :tags="$tags"  />
            <x-search-locator :locations="$locations"  />
            <x-search-category :categories="$categories"  />
            <div class="w-full pt-4 lg:w-1/12 lg:p-2">
                <button type="submit" class="w-full h-12 text-white rounded-md bg-primary"
                    placeholder="Button">
                    {{ __('Search') }}
                </button>
            </div>
        </div>

        <input type="hidden" wire:model="type" name="type"/>


        <div class="flex justify-center w-full gap-2 pt-4 md:pt-6">
            <button wire:click="changeType(0)" type="button" class="w-32 py-2 text-xs text-white bg-white bg-opacity-25 rounded-md">
                Services
            </button>
            <button wire:click="changeType(1)" type="button" class="w-32 py-2 text-xs text-white bg-white bg-opacity-25 rounded-md">
                Experience
            </button>
            <button wire:click="changeType(2)" type="button" class="w-32 py-2 text-xs text-white bg-white bg-opacity-25 rounded-md">
                Share a Coffee
            </button>
        </div>

    </form>
</div>
