<div class="relative w-auto mx-4" x-data="handlerLocale">
    <a @click="show=!show" @click.away="show=false"
        class="flex items-center px-4 space-x-1  transition-colors duration-500 ease-in-out rounded hover:bg-white hover:text-secondary hover:bg-opacity-50 cursor-pointer link">
        <x-icon-world class="w-auto h-4" />
        <span x-text="lang"></span>
    </a>
    <div class="absolute right-0 w-auto mt-1 text-xs  bg-white rounded top-full bg-opcacity-25" x-show="show">
        <a href="{{ route('change-lang', 'es') }}" class="px-3 py-2 cursor-pointer hover:rounded-t text-gray-500 block hover:bg-gray-100">
            espanol
        </a>
        <a href="{{ route('change-lang', 'en') }}" class="px-3 py-2 cursor-pointer hover:rounded-b text-gray-500 block hover:bg-gray-100">
            english
        </a>
    </div>
    <script>
        const handlerLocale = () => {
            return {
                show:false,
                lang:@entangle('lang')
            }
        }
    </script>
</div>
