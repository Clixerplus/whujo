@props([
'link' => '#',
'img' => '',
'alt' => '',

])

<div class="relative w-full h-full rounded-md group">
    {{-- <a href="{{ $link }}">
        <vs-card type="5" >

            @isset ($title)
                <template #title> {{ $title }} </template>
            @endif

            @isset ($img)
                <template #img>
                    <div class="relative">
                        <img src="{{ $img }}" alt="{{ $alt }}">
                        <div class="absolute inset-0 from-secondary bg-gradient-to-t group-hover:from-transparent"></div>
                    </div>
                </template>
            @endif

            @isset ($text)
                <template #text> {{ $text }} </template>
            @endif

            @isset ($interactions)
                <template #interactions> {{ $interactions }} </template>
            @endif

        </vs-card>
    </a> --}}
    <img src="{{ $img }}"
    class="absolute inset-0 object-cover w-full h-full transition-opacity ease-in-out rounded-xl group-hover:opacity-90"
    alt="{{ $alt }}" />

    <a href="{{ $link }}"
        {{ $attributes->merge(['class'=>'absolute inset-0 flex flex-col justify-end w-full h-full p-4 rounded-xl md:p-4 hover:shadow-2xl ']) }}
        class="">
        {{ $slot }}
    </a>

</div>
