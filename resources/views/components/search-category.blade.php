<div class="w-full h-full transition-all duration-300 transform md:w-3/12 hover:shadow hover:scale-y-110 ">
    <select name="categories" wire:model="category"
        class="w-full h-full px-2 bg-gray-50 focus:outline-none">
        <option value="all" disabled selected>{{ __('All') }}</option>
        @foreach ($categories as $category)
            <option value="{{ $category->name }}">
                {{ $category->name }}
            </option>
        @endforeach
    </select>
</div>
