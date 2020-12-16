<div class="relative overflow-hidden duration-300 bg-primary w-72" style="border-radius: 50px 0 50px 0;">
    <div class="group">
        <img src="{{ $model->photos }}" class="object-cover w-full h-64" alt="" />
        <div class="absolute inset-0 h-64 bg-secondary bg-opacity-60 flex items-center justify-center transition transform -translate-y-64 group-hover:translate-y-0 duration-300">
            <a href="{{ route('product', $model->id) }}" class="bg-primary leading-6 px-4 py-2 rounded-md text-white ">Contratar</a>
        </div>
    </div>

    <div class="bg-white p-5 border border-t-0">
        <div class="flex items-center justify-between mb-3">
            <a href="/" aria-label="Category" title="{{ $model->name }}"
                class="w-full mr-4 leading-6 text-lg font-bold transition-colors duration-200 hover:text-primary">
                {{ $model->name }}
            </a>
            <span class="flex  items-center font-bold leading-6 text-xl">
                <x-icon-star class="text-yellow-400 fill-current h-auto w-6 mr-2" />
                {{ rand(1,4)}}.{{ rand(0,9)}}
            </span>
        </div>
        <div class="flex items-center mb-3">
            <span class="leading-6 flex mr-4">
                <x-icon-warning class="text-secondary fill-current h-auto w-6 mr-2" />
                {{ $model->city_id }}
            </span>
            <span class="leading-6 flex">
                <x-icon-search class="text-secondary fill-current h-auto w-6 mr-2" />
                 {{ $model->price }}
            </span>
        </div>
        <p class="mb-2 text-gray-700 text-sm">
            {{ $model->toDo }}
        </p>
    </div>

</div>
