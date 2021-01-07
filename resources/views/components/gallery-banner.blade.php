<div id="gallery"
     class="fixed w-screen h-screen top-0 z-50
            transform scale-0 overflow-hidde
            transition-colors ease-in-out duration-300">
    <div onclick="hiddeGallery()" class="absolute inset-0 bg-secondary bg-opacity-80 h-full w-full"></div>
    <div class="absolute top-4 right-12">
        <button onclick="hiddeGallery()"
                class="w-12 h-12 text-gray-800 hover:text-white
                       transition-colors ease-in-out duration-300">
            <x-icon-close class="" />
        </button>

    </div>
    <div class="flex items-center justify-center w-full h-full space-x-4">
        <button onclick="change(-1)"
                class="bg-white opacity-30 hover:opacity-100 w-24 h-24 p-4
                         rounded-full transition ease-in-out duration-100 z-10">
            <x-icon-chevron-forward class="h-full w-full transform rotate-180" />
        </button>
        <div class="relative bg-white"
             style="width: 40rem; height:40rem;">
            <img id="img1"
                 src="https://images.pexels.com/photos/737586/pexels-photo-737586.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                 class="absolute inset-0 object-cover w-full h-full opacity-0 transition-opacity ease-in-out duration-200"
                 alt="" />

            <img id="img2"
                 src="https://images.pexels.com/photos/1475234/pexels-photo-1475234.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                 class="absolute inset-0 object-cover w-full h-full opacity-0 transition-opacity ease-in-out duration-200"
                 alt="" />

            <img id="img3"
                 src="https://images.pexels.com/photos/2437293/pexels-photo-2437293.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                 class="absolute inset-0 object-cover w-full h-full opacity-0 transition-opacity ease-in-out duration-200"
                 alt="" />

            <img id="img4"
                 src="https://images.pexels.com/photos/3148498/pexels-photo-3148498.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                 class="absolute inset-0 object-cover w-full h-full opacity-0 transition-opacity ease-in-out duration-200"
                 alt="" />
        </div>
        <button onclick="change(1)"
                class="bg-white opacity-30 hover:opacity-100 w-24 h-24
                         p-4 rounded-full transition ease-in-out duration-100 z-10">
            <x-icon-chevron-forward class="h-full w-full transform " />
        </button>
    </div>
</div>
<div class="min-w-screen bg-secondary">
    <div class="flex overflow-x-hidden bg-yellow-300 h-96">
        <div class="w-screen lg:-ml-48 lg:w-4/12  ">
            <img onclick="showGallery(0)"
                 src="https://images.pexels.com/photos/737586/pexels-photo-737586.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                 class="object-cover w-full h-full cursor-pointer" alt="" />
        </div>
        <div class="hidden lg:inline-flex lg:w-4/12 ">
            <img onclick="showGallery(1)"
                 src="https://images.pexels.com/photos/1475234/pexels-photo-1475234.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                 class="object-cover w-full h-full cursor-pointer" alt="" />
        </div>
        <div class="hidden lg:inline-flex lg:w-4/12 ">
            <img onclick="showGallery(2)"
                 src="https://images.pexels.com/photos/2437293/pexels-photo-2437293.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                 class="object-cover w-full h-full cursor-pointer" alt="" />
        </div>
        <div class="hidden lg:inline-flex lg:-mr-48 lg:w-4/12 ">
            <img onclick="showGallery(3)"
                 src="https://images.pexels.com/photos/3148498/pexels-photo-3148498.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                 class="object-cover w-full h-full cursor-pointer" alt="" />
        </div>
    </div>
</div>

<script>

    var img = []
    img[0] = document.getElementById('img1')
    img[1] = document.getElementById('img2')
    img[2] = document.getElementById('img3')
    img[3] = document.getElementById('img4')
    var active  = 0

    function change(step)
    {
        img[active].classList.remove('opacity-100')
        img[active].classList.add('opacity-0')

        if (active == 3 && step == 1 )
            active = 0
        else if (active == 0 && step == -1 )
            active = 3
        else
            active += step

        img[active].classList.add('opacity-100')
        img[active].classList.remove('opacity-0')
        console.log('entra')
    }

    function hiddeGallery()
    {
        const gallery = document.getElementById('gallery')
        gallery.classList.remove('opacity-100')
        gallery.classList.add('transform', 'scale-0', 'overflow-hidde')
    }

    function showGallery(index)
    {
        const gallery = document.getElementById('gallery')
        gallery.classList.remove('transform', 'scale-0', 'overflow-hidde')
        gallery.classList.add('opacity-100')

        active = index
        img[active].classList.add('opacity-100')
        img[active].classList.remove('opacity-0')
    }
</script>
