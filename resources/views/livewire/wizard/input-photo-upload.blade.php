<div class="flex flex-wrap">

    @foreach ($photos as $image)
    <div class="relative w-48 h-48 m-1 rounded-md border">
        <img src="{{ Storage::url($image) }}" class="w-full h-full absolute object-cover rounded-md"/>
    </div>
    @endforeach



    @if (count($photos) < 6)
    <div class="relative h-48 w-48 m-1">
        @if ($photo)
        <img id="upload_preview" src="{{ $photo->temporaryUrl() }}" class="w-full h-full absolute object-cover rounded-md z-0">
        @endif
        <form wire:submit.prevent="save" class="h-full w-full z-10">
        <label for="photo_upload"
               class="flex justify-center items-center
                      h-full w-full border rounded-md
                      cursor-pointer text-gray-200
                    hover:border-gray-400 hover:text-gray-400
                      transition-300">
            <x-icon-camera  class="w-12 h-12"/>
            <input id="photo_upload" type="file" wire:model="photo" class="hidden">

        </label>
        <div class="absolute flex inset-x-0 bottom-0 h-10 rounded-b-md bg-gray-600">

            <button class="w-full h-full  text-white">guardar</button>

        </div>
        </form>

    </div>
    @endif
</div>
