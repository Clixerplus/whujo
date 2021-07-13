<section>
    <form action="{{ route('search') }}" class="flex flex-wrap h-12 space-y-4 bg-white rounded-md md:space-y-0">

        <input type="hidden" wire:model="type" />

        <livewire:search.tag :type="$activeType">

        <input wire:model="location" class="w-full h-full px-2 bg-gray-100 md:w-4/12" placeholder="Location" />

        <livewire:search.category :type="$activeType"/>

        <button type="submit" class="w-full h-full text-white md:w-1/12 bg-primary" placeholder="Button">
            {{ __('Search') }}
        </button>
    </form>
</section>
