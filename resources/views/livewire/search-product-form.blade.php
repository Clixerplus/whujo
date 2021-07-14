<div>
    <form action="{{ route('search') }}" class="flex flex-wrap h-12 space-y-4 bg-white rounded-md md:space-y-0">

        <input type="hidden" wire:model="type" />

        <livewire:search.tag :type="$activeType">

            <input wire:model="location" class="w-full h-full px-2 bg-gray-100 md:w-4/12" placeholder="Location" />

            <livewire:search.category :type="$activeType" />

            <button type="submit" class="w-full h-full text-white md:w-1/12 bg-primary" placeholder="Button">
                {{ __('Search') }}
            </button>


            <div class="flex justify-center w-full gap-4 pt-4">
                <input wire:model="activeType" />
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
    </section>
