@props([
'image' => '',
'alt' => null
])
<div class="relative min-h-screen overflow-x-hidden max-w-screen">

    {{-- Image Mask --}}
    <img src="{{ $image ?? '' }}" alt="{{ $alt ?? 'alt missing' }}" class="absolute inset-0 object-cover w-full h-full" />

    {{-- container --}}
    <div class="relative flex items-center justify-center w-full min-h-screen bg-gray-900 bg-opacity-75">
        <div class="w-full p-4">
            {{ $slot }}
        </div>
    </div>
</div>
