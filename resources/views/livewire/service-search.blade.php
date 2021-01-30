<div>
    <input wire:model="search" type="text" placeholder="Search posts by title...">

    <h1>Search Results:</h1>

    <ul>
        @forelse ($results as $result)
        <li>{{ $result->name }}</li>

        @empty
        <h1>{{__('No results for your search') }}</h1>
        @endforelse

    </ul>
</div>
