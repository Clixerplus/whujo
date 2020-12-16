<div id="modal" class="fixed inset-0 z-50 bg-gray-900 bg-opacity-75 flex items-center justify-center p-3">
    <div class="bg-white max-w-lg rounded-lg overflow-hidden px-3 lg:px-6 py-4 space-y-4">
        <div class="flex justify-center">
            <span
                {{ $attributes->merge([ 'class'=>'inline-flex justify-center p-1 items-center bg-opacity-75 rounded-full p-2' ])}}>
                <x-dynamic-component :component="$icon" class="h-10 w-auto fill-current" />
            </span>
        </div>
        <div class="flex flex-col items-center space-y-2">
            <h1 class="font-semibold">{{ $title ?? 'Title Modal'}}</h1>
            <div>
                <p class="leading-tight text-sm lg:text-base">
                    {{ $slot }}
                </p>
            </div>
        </div>
        <div class="flex justify-center pt-4">
            <x-button class="bg-secondary" onclick="document.getElementById('modal').classList.add('hidden')">
                {{ $button ?? 'Button'}} </x-button>
        </div>
    </div>
</div>
