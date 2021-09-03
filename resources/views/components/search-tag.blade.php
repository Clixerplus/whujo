<div class="relative w-full p-2 bg-gray-200 rounded hover:bg-white group" x-data="{
    open:false,
    placeholder(){
        let placeholder = 'What are you looking for?  ';
        if($wire.activeType === 0){
            placeholder = 'ej. Contaduría';
        }else if ($wire.activeType === 1){
            placeholder = 'ej. Aprende cocina tailandesa';
        }else if ($wire.activeType === 2){
            placeholder = 'ej. Conversemos de emprendimiento';
        }
        return placeholder;
    }
}">
    <input wire:model="search" name="search" x-on:keydown="$nextTick(()=> open = $refs.search.value.length > 0 )"
        x-on:click="$nextTick(()=> open = $refs.search.value.length > 0 )" x-on:click.away="open=false" x-ref="search"
        class="w-full h-12 px-3 placeholder-gray-600 bg-gray-200 outline-none group-hover:bg-white" autocomplete="error"
        x-bind:placeholder="placeholder()" />
    <x-icon-search class="absolute top-0 right-0 w-auto h-16 p-4 text-gray-600 bg-gray-200 group-hover:bg-white lg:p-5" />

    <div class="absolute inset-x-0 z-10 -mt-1 overflow-y-auto bg-gray-200 border-t rounded-b shadow-xl top-full max-h-64 lg:max-h-48"
        x-cloak x-show="$refs.search.value.length > 0 && open" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100"
        x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100"
        x-transition:leave-end="opacity-0 transform scale-90">

        <div wire:loading.delay class="w-full p-4">
            <x-icon-spinner class="w-6 h-6 mx-auto text-gray-400 animate-spin " />
        </div>

        <ul wire:loading.remove class="w-full">
            @forelse ($tags as $tag )
                <li class="p-4 text-left text-gray-600 transition-colors duration-500 ease-in-out hover:bg-gray-200 hover:cursor-pointer"
                    data-value="{{ $tag }}"
                    @click="$wire.chooseResult($event.target.getAttribute('data-value')); open = false">
                    {{ $tag }}
                </li>
            @empty
                <li class="p-4 text-gray-600">There isn't results</li>
            @endforelse
        </ul>
    </div>
</div>
