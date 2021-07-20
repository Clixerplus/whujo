<div class="md:w-3/12 w-full">
    <x-ui::select name="" id="" class="h-10 bg-white">
        @foreach ($categories as $category)
        <option value="{{ $category->name }}">
            {{ $category->name }}
        </option>
        @endforeach
    </x-ui::select>
    {{--  <select name="categories" wire:model="category"
        class="w-full h-full px-2 bg-gray-50 ">
        <option value="all" disabled selected>{{ __('All') }}</option>
    @foreach ($categories as $category)
    <option value="{{ $category->name }}">
        {{ $category->name }}
    </option>
    @endforeach
    </select> --}}
</div>
