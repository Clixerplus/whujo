<section x-data="{ isSearchActive: @entangle('isSearchActive') }" class="relative w-full mx-auto rounded-md">

    {{-- btn set focus --}}
    <div class="fixed z-40 w-12 h-12 right-4 bottom-4">
        <button class="w-full h-full p-3 rounded-full focus:outline-none bg-primary hover:bg-primary-light"
            x-on:click="$refs.search.focus()">
            <x-icon-search class="w-full h-auto text-white" />
        </button>
    </div>

    {{-- search form --}}
    <form action="/listing">

        <div class="flex flex-auto h-12" x-data="tabHandler()">
            <button type="button"
                class="w-1/3 py-2 text-xs transition-colors duration-300 ease-in-out rounded-t md:px-8 focus:outline-none md:w-auto"
                :class="applyTabStyles(0)" @click="tabActive = 0">
                <span>{{ __('Services') }}</span>
            </button>

            <button type="button"
                class="w-1/3 py-2 text-xs transition-colors duration-300 ease-in-out rounded-t md:px-8 focus:outline-none md:w-auto"
                :class="applyTabStyles(1)" @click="tabActive = 1">
                <span>{{ __('Experience') }}</span>
            </button>

            <button type="button"
                class="w-1/3 py-2 text-xs transition-colors duration-300 ease-in-out rounded-t md:px-8 focus:outline-none md:w-auto"
                :class="applyTabStyles(2)" @click="tabActive = 2">
                <span>{{ __('Share a coffee') }}</span>
            </button>
        </div>

        <div class="relative p-1 -mt-1 bg-white md:flex rounded-b-md">

            <div class="flex-1 px-2 my-4 md:my-0">
                <input type="text" required placeholder="Buscar..." title="buscar" spellcheck="false" x-ref="search"
                    list="results" wire:model.debounce.1000ms="search" name="search" autocomplete="off"
                    class="w-full py-2 pl-4 text-gray-700 border-b focus:outline-none md:border-none">
            </div>
            <div>
                <x-ui::button type="submit"
                    class="flex items-center justify-center w-full h-12 space-x-2 bg-primary focus:ring focus:ring-primary focus:ring-opacity-50 active:bg-primary-light active:ring-red-200">
                    <x-icon-search class="w-5 h-5 md:hidden" />
                    <span class="inline-flex">{{ __('Search') }}</span>
                </x-ui::button>
            </div>
        </div>

        <datalist id="results" class="mt-4">
            @foreach ($results as $result)
                <option value="{{ $result }}" @click="$refs.productTag.value = 'algo'">
            @endforeach
        </datalist>
        <input type="hidden" wire:model.debounce.500ms="type" name="type" class="border" />
        <input type="hidden" x-ref="productTag" name="category" class="border" />
    </form>

    <script>
        const tabHandler = () => {
            return {
                tabActive: @entangle('tabActive'),
                activeClass: ' bg-white ',
                deactiveClass: ' bg-gray-100 bg-opacity-75 border border-gray-400   ',
                applyTabStyles(index) {
                    return this.tabActive == index ? this.activeClass : this.deactiveClass
                },
            }
        }
    </script>

</section>
