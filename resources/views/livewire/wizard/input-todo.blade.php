<div class="pb-8">

    <h1 class="font-extrabold text-3xl mb-2">Que haremos en tu actividad</h1>

    <p class="text-sm mb-4 px-1">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis pariatur dolor deleniti quisquam soluta
        libero
        excepturi, mollitia atque, aperiam officia ab cumque dicta rem suscipit.
    </p>


    <div>

        <label for="todo" class="font-semibold px-1">Describe brevemente tu actividad</label>
        <x-ui.textarea wire:model="todo" class="resize-none mt-1 text-sm" id="todo" name="todo"
            placeholder="Describe aqui tu actividad" cols="30" rows="8" min="{{$minChars}}" max="{{$maxChars}}" />
        <span class="text-xs float-right px-1 mt-2 " wire:model="counter">{{ $counter }}/{{ $maxChars }}</span>
    </div>

    <h2 class="font-semibold text-xl">Lorem ipsum dolor sit.</h2>
    <div class="px-1">
        <ol class="list-decimal list-inside text-sm">
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui at eius cum aliquid iure cumque!</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem quo nulla in impedit. Tempora earum
                debitis
                aperiam eveniet, animi commodi.</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et veniam labore debitis.</li>
        </ol>
    </div>

</div>
