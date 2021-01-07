
<x-app-nonav-layout>

    <livewire:search-product/>

    <script>
        function selectSortOption(text) {
            document.getElementById('sort').value= text;
            document.getElementById('sortOptions').classList.toggle('scale-0');
        }
    </script>
</x-app-nonav-layout>
