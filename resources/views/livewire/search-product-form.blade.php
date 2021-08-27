<div class="w-full">
    <form action="{{ route('search') }}" class="w-full" x-data="SearchHandler">

        <div class="flex flex-wrap w-full my-8 space-y-2 rounded-md lg:bg-white lg:space-y-0">
            <x-search-tag :tags="$tags" />
            <x-search-locator :locations="$locations" />
            <x-search-category :categories="$categories" />
            <div class="w-full pt-4 lg:w-1/12 lg:p-2">
                <button type="submit" class="w-full h-12 text-white rounded-md bg-primary" placeholder="Button">
                    {{ __('Search') }}
                </button>
            </div>
            <input type="hidden" wire:model="type" name="type" />
        </div>

        <div class="flex justify-center hidden w-full gap-2">
            <button wire:click="changeType(0)" type="button"
                class="w-32 py-2 text-xs text-white bg-white bg-opacity-25 rounded-md">
                Services
            </button>
            <button wire:click="changeType(1)" type="button"
                class="w-32 py-2 text-xs text-white bg-white bg-opacity-25 rounded-md">
                Experience
            </button>
            <button wire:click="changeType(2)" type="button"
                class="flex w-32 p-2 space-x-2 text-xs text-white bg-white bg-opacity-25 rounded-md">
                <x-icon-coffee class="w-3 h-3" />
                <span>Share a Coffee</span>
            </button>
        <div class="flex justify-center w-full gap-2 ">
            <button x-on:class="classHandler('onsite')" x-on:click="modality = 'onsite'" type="button"
                class="w-32 py-2 text-xs font-bold text-white rounded-md bg-twitter hover:bg-twitter">
                Onsite
            </button>
            <button x-on:class="classHandler('online')" x-on:click="modality = 'online'" type="button"
                class="w-32 py-2 text-xs font-bold text-white bg-opacity-25 rounded-md bg-duolingo hover:bg-duolingo">
                Online
            </button>
        </div>
        <script>
            const SearchHandler = () => {
                return {
                    modality: 'onsite',
                    classHandler(modality) {
                        return (modality === this.modality) ?
                            'bg-opacity-100' :
                            'bg-opacity-25 bg-white';
                    }

                }
            }
        </script>

    </form>
</div>
