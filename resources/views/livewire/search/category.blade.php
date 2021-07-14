<div class="w-full h-full px-2 transition-all duration-300 transform bg-gray-100 md:w-3/12 focus:outline-none hover:shadow hover:bg-gray-50 hover:scale-105 ">
    <select name="categories" wire:model="category"
        class="w-full h-full">
        <option value="all">{{ $model }}</option>
        <option value="all">{{ __('All') }}</option>
        @foreach ($categories as $category)
            <option value="{{ $category->name }}">
                {{ $category->name }}
            </option>
        @endforeach
    </select>
</div>
