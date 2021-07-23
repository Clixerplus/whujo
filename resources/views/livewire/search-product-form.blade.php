<div class="w-full">
    <form action="{{ route('search') }}" class="w-full">

        <div class="flex flex-wrap w-full my-8 space-y-2 rounded-md lg:bg-white lg:space-y-0">
            <x-search-tag :tags="$tags"  />
            <x-search-locator :locations="$locations"  />
            <x-search-category :categories="$categories"  />
            <div class="w-full pt-4 lg:w-1/12 lg:p-2">
                <button type="submit" class="w-full h-12 text-white rounded-md bg-primary"
                    placeholder="Button">
                    {{ __('Search') }}
                </button>
            </div>
            <input type="hidden" wire:model="type" name="type"/>
        </div>

        <div class="flex justify-center w-full gap-2 ">
            <button wire:click="changeType(0)" type="button" class="w-32 py-2 text-xs text-white bg-white bg-opacity-25 rounded-md">
                Services
            </button>
            <button wire:click="changeType(1)" type="button" class="w-32 py-2 text-xs text-white bg-white bg-opacity-25 rounded-md">
                Experience
            </button>
            <button wire:click="changeType(2)" type="button" class="flex w-32 p-2 space-x-2 text-xs text-white bg-white bg-opacity-25 rounded-md">
                <x-icon-coffee class="w-3 h-3"/>
                <span>Share a Coffee</span>
            </button>
        </div>

    </form>
</div>
