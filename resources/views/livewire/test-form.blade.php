<div>
    <div class="relative h-screen w-screen">
        <div class="absolute container mx-auto top-0 inset-x-0">
            <form wire:submit.prevent="prueba" class="p-8 flex flex-col rounded-lg mx-auto border space-y-4 w-1/2">
                <x-input key="search" class="border w-full"   />
                <button type="submit" class="p-3 rounded-md bg-twitter text-white">Enviar</button>
                <input wire:model="description" type="text" class="border rounded-md py-8 px-4" name="description"/>
            </form>

            {{ $description }}
        </div>

        <div class="absolute container mx-auto bottom-0 inset-x-0">
            <form method="POST" action="/testform" class="p-8 flex flex-col rounded-lg mx-auto border space-y-4 w-1/2">
                @csrf
                <x-input key="page" class="border w-full" />
                <input type="text" class="border rounded-md py-8 px-4" name="description" />
                <button type="submit" class="p-3 rounded-md bg-twitter text-white">Enviar</button>
            </form>

        </div>
    </div>
</div>
