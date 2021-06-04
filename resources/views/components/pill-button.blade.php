<span class="flex items-center justify-between px-2 py-1 space-x-4 text-sm font-light text-gray-500 bg-gray-100 border rounded hover:border-secondary hover:text-secondary">

    <span>{{ $slot }}</span>

    <button {{ $attributes->whereStartsWith('wire:click') }} class="outline-none">
        <x-icon-close class="w-4 h-4" />
    </button>
</span>
