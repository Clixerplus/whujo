<div class="relative w-auto mx-4" x-data="{lang:@entangle('lang'), show:false}">
    <button @click="show=!show" @click.away="show=false"
        class="flex items-center px-4 space-x-1 text-gray-200 transition-colors duration-500 ease-in-out rounded hover:bg-white hover:text-secondary hover:bg-opacity-50">
        <x-icon-world class="w-auto h-4" />
        <span x-text="lang"></span>
    </button>
    <div class="absolute right-0 w-auto mt-1 text-xs text-gray-500 bg-white rounded top-full" x-show="show">
        <p @click="lang='es'; show:false; location.reload()" class="px-3 py-2 cursor-pointer hover:bg-gray-200 hover:rounded-t">espanol
        </p>
        <p @click="lang='en'; show:false; location.reload()" class="px-3 py-2 cursor-pointer hover:bg-gray-200 hover:rounded-b">english
        </p>
    </div>
</div>
