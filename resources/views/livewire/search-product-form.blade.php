<div class="w-full p-4" x-data="SearchHandler">

    <h1 x-text="title"
        class="max-w-lg mx-auto mt-8 text-3xl font-bold leading-tight text-center text-white md:text-5xl"></h1>

    <div class="flex justify-center w-full gap-2 mt-8">
        <button @click="active = 0" :class="activate(0)" type="button"
            class="w-32 py-2 text-xs font-bold text-white bg-white bg-opacity-25 rounded-md hover:bg-opacity-50">
            Services
        </button>
        <button @click="active = 1" :class="activate(1)" type="button"
            class="w-32 py-2 text-xs font-bold text-white bg-white bg-opacity-25 rounded-md hover:bg-opacity-50">
            Experience
        </button>
        <button @click="active = 2" :class="activate(2)" type="button"
            class="w-32 py-2 text-xs font-bold text-white bg-white bg-opacity-25 rounded-md hover:bg-opacity-50">
            Share a Coffee
        </button>
    </div>

    <form action="{{ route('search') }}" class="w-full mt-8">
        <div class="flex flex-wrap w-full my-8 space-y-2 rounded-md md:divide-x lg:bg-white lg:space-y-0">

            <div class="w-full md:flex-1">
                <x-search-tag :tags="$tags" />
            </div>
            <div class="w-full md:flex-1" x-show="modality == 'onsite'">
                <x-search-locator :locations="$locations" />
            </div>

            <div class="w-full md:flex-1">
                <x-search-category :categories="$categories" />
            </div>

            <div class="flex-1 pt-4 md:flex-shrink md:flex-none lg:p-2">
                <button type="submit" class="w-full h-12 p-2 text-white rounded-md bg-primary hover:bg-primary-light"
                    placeholder="Button">
                    {{ __('Search') }}
                </button>
            </div>
            <input type="hidden" wire:model="type" name="type" />
        </div>


        <div class="flex justify-center w-full gap-2 ">
            <button x-on:class="classHandler('onsite')" x-on:click="modality = 'onsite'" type="button"
                class="flex items-center w-32 p-2 space-x-2 font-bold bg-white rounded-md btn-m group"
                :class="modality == 'onsite' && 'active'">
                <div class="w-4 h-4 p-0.5 border border-gray-300 rounded ">
                    <div class="h-full bg-success" x-show="modality == 'onsite'"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform scale-90"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-90"></div>
                </div>
                <span class="flex-1 text-sm text-left">Onsite</span>
            </button>
            <button x-on:class="classHandler('online')" x-on:click="modality = 'online'" type="button"
                class="flex items-center w-32 p-2 space-x-2 font-bold bg-white rounded-md group btn-m"
                :class="modality == 'online' && 'active'">
                <div class="w-4 h-4 p-0.5 border border-gray-300 rounded ">
                    <div class="h-full bg-success" x-show="modality == 'online'"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform scale-90"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-90"></div>
                </div>
                <style>
                    .btn-m:not(.active):hover,
                    .btn-m.active {
                        border: 1px solid black;
                        color: #444;
                        transition: color, border .5s;
                    }

                    .btn-m:not(.active) {
                        border: 1px solid black;
                        color: #444;
                    }

                </style>
                <span class="flex-1 text-sm text-left">Online</span>
            </button>

        </div>
        <script>
            const SearchHandler = () => {
                return {
                    modality: 'onsite',
                    active: 0,
                    title: '',
                    titles: [
                        @json(__('website.misc.title_service')),
                        @json(__('website.misc.title_experience')),
                        @json(__('website.misc.title_share')),
                    ],
                    init() {
                        this.title = this.titles[this.active]
                    },
                    activate(opt) {
                        console.log(opt)
                        this.title = this.titles[this.active]
                        return this.active == opt && 'bg-opacity-75 text-secondary';
                    }
                }
            }
        </script>

    </form>
</div>
