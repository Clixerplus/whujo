<div id="modal"
    class="fixed inset-0 z-50 bg-gray-900 bg-opacity-75  flex hidden opacity-0 flex-col  items-center justify-center p-3 transition ease-out duration-700">
    <div
        class="bg-white w-full md:w-3/4 max-h-modal rounded-lg overflow-hidden overflow-y-scroll px-3 lg:px-6 py-4 space-y-4">
        <div class="flex justify-center">
            <span
                {{-- $attributes->merge([ 'class'=>'inline-flex justify-center items-center bg-opacity-75 rounded-full p-2' ])--}}>
                {{--<x-dynamic-component :component="$icon" class="h-10 w-auto fill-current" />--}}
            </span>
        </div>
        <div class="flex flex-col items-center space-y-2">
            <h1 class="font-semibold">{{ $title }}</h1>
            <div>
                <p class="leading-tight text-sm lg:text-base">
                    {{ $slot }}
                </p>
            </div>
        </div>
    </div>
    <div class="flex justify-center my-6">
        <x-button class="bg-white text-gray-600 rounded-full w-12 h-12"
            onclick="document.getElementById('modal').classList.add('hidden','opacity-0')">
            <x-icon-close class="w-8 h-8" />
        </x-button>
    </div>
</div>
