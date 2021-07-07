<div class="embla">
    <div class="embla__viewport">
        <div class="embla__container">
            @foreach ($photos as $photo)
                <div class="embla__slide">
                    <div class="embla__slide__inner">
                        <img class="embla__slide__img" src="{{ $photo }}" />
                    </div>
                </div>
            @endforeach
            <div class="embla__slide">
                <div class="embla__slide__inner">
                    <img class="embla__slide__img" src="{{ $photos[1] }}" />
                </div>
            </div>
            <div class="embla__slide">
                <div class="embla__slide__inner">
                    <img class="embla__slide__img" src="{{ $photos[0] }}" />
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div id="gallery"
    class="fixed top-0 z-50 w-screen h-screen transition-colors duration-300 ease-in-out transform scale-0 overflow-hidde">
    <div onclick="hiddeGallery()" class="absolute inset-0 w-full h-full bg-secondary bg-opacity-80"></div>
    <div class="absolute top-4 right-12">
        <button onclick="hiddeGallery()"
            class="w-12 h-12 text-gray-800 transition-colors duration-300 ease-in-out hover:text-white">
            <x-icon-close class="" />
        </button>

    </div>
    <div class="flex items-center justify-center w-full h-full space-x-4">
        <button onclick="change(-1)"
            class="z-10 w-24 h-24 p-4 transition duration-100 ease-in-out bg-white rounded-full opacity-30 hover:opacity-100">
            <x-icon-chevron-forward class="w-full h-full transform rotate-180" />
        </button>
        <div class="relative bg-white" style="width: 40rem; height:40rem;">
            @foreach ($photos as $photo)
                <img src="{{ $photo }}"
                    class="absolute inset-0 object-cover w-full h-full transition-opacity duration-200 ease-in-out opacity-0"
                    alt="{{ $photo }}" />
            @endforeach
        </div>
        <button onclick="change(1)"
            class="z-10 w-24 h-24 p-4 transition duration-100 ease-in-out bg-white rounded-full opacity-30 hover:opacity-100">
            <x-icon-chevron-forward class="w-full h-full transform " />
        </button>
    </div>
</div>
<div class="min-w-screen bg-secondary">
    <div class="flex overflow-x-hidden bg-yellow-300 h-96">
        @foreach ($photos as $photo)
            @if ($loop->first)
                <div class="flex-initial w-screen lg:w-4/12 ">
                    <img onclick="showGallery({{ $loop->iteration }})" src="{{ $photo }}"
                        class="object-cover w-full h-full cursor-pointer" alt="" />
                </div>
            @endif

            @if ($loop->iteration > 1 && $loop->iteration < 4)
                <div class="flex-initial w-screen lg:w-4/12 ">
                    <img onclick="showGallery({{ $loop->iteration }})" src="{{ $photo }}"
                        class="object-cover w-full h-full cursor-pointer" alt="" />
                </div>
            @endif

            @if ($loop->last)
                <div class="flex-initial hidden lg:inline-flex lg:w-4/12 ">
                    <img onclick="showGallery({{ $loop->iteration }})" src="{{ $photo }}"
                        class="object-cover w-full h-full cursor-pointer" alt="" />
                </div>
            @endif
        @endforeach

    </div>
</div>

<script>
    var img = []
    img[0] = document.getElementById('img1')
    img[1] = document.getElementById('img2')
    img[2] = document.getElementById('img3')
    img[3] = document.getElementById('img4')
    var active = 0

    function change(step) {
        img[active].classList.remove('opacity-100')
        img[active].classList.add('opacity-0')

        if (active == 3 && step == 1)
            active = 0
        else if (active == 0 && step == -1)
            active = 3
        else
            active += step

        img[active].classList.add('opacity-100')
        img[active].classList.remove('opacity-0')
        console.log('entra')
    }

    function hiddeGallery() {
        const gallery = document.getElementById('gallery')
        gallery.classList.remove('opacity-100')
        gallery.classList.add('transform', 'scale-0', 'overflow-hidde')
    }

    function showGallery(index) {
        const gallery = document.getElementById('gallery')
        gallery.classList.remove('transform', 'scale-0', 'overflow-hidde')
        gallery.classList.add('opacity-100')

        active = index
        img[active].classList.add('opacity-100')
        img[active].classList.remove('opacity-0')
    }
</script> --}}
