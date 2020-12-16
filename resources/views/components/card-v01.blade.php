<div class="relative overflow-hidden duration-300 bg-primary " style="border-radius: 50px 0 50px 0;">
    <div class="group">
        {{ $slot }}
        <div
            class="absolute inset-0 h-64 bg-secondary bg-opacity-60 flex items-center justify-center transition transform -translate-y-64 group-hover:translate-y-0 duration-300">
            <a href="#" class="bg-primary leading-6 px-4 py-2 rounded-md text-white ">Contratar</a>
        </div>
    </div>

    <div class="bg-white p-5 border border-t-0">
        <div class="flex items-center justify-between mb-3">
            <a href="/" aria-label="Category" title="Nombre de Servicio"
                class=" w-full leading-6  text-2xl font-bold  transition-colors duration-200 hover:text-primary">
                Nombre de Servicio
            </a>
            <span class="flex  items-center font-bold leading-6 text-xl">
                <x-icon-star class="text-yellow-400 fill-current h-auto w-6 mr-2" />
                4.8
            </span>
        </div>
        <div class="flex items-center mb-3">
            <span class="leading-6 flex mr-4">
                <x-icon-warning class="text-secondary fill-current h-auto w-6 mr-2" />
                Buenos Aires
            </span>
            <span class="leading-6 flex">
                <x-icon-search class="text-secondary fill-current h-auto w-6 mr-2" />
                $ 2.500,00
            </span>
        </div>
        <p class="mb-2 text-gray-700">
            Sed ut perspiciatis unde omnis iste natus error sit sed quia consequuntur magni
            voluptatem
            doloremque.
        </p>
    </div>
    <div class="h-20 flex items-center justify-center text-white">
        <a href="/" aria-label=""
            class="bg-primary inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Category</a>

    </div>
</div>
