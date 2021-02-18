<div>
    <form wire:submit.prevent="search">

        <x-input key="search" wire:model="search" type="text" placeholder="Search posts by title..." />
        <x-input key="minPrice" type="text" />
        <button type="submit" class="py-3 px-6 bg-primary my-4 rounded-md">Filtrar</button>
    </form>

    <h1>Search Results:</h1>

    <ul>
        @forelse ($results as $result)
        <li>{{ $result->name }}</li>

        @empty
        <h1>{{__('No results for your search') }}</h1>
        @endforelse

    </ul>
</div>
