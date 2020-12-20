<div class="embla py-2" id="embla">
    <div class="embla__container ">
        @foreach ($items as $item)
            <div class="flex-grow bg-transparent mx-2 w-auto mr-4" >
                <x-card-v01 class="embla__slide "  :model="$item"/>
            </div>
        @endforeach
    </div>
</div>
