<x-main-layout>
    <div class="relative h-screen bg-black" x-data="handler">
        <img src="{{ asset('images/bg/section-bg-experience-cta.jpeg') }}" alt="multi-experiences collage"
                class="absolute inset-0 object-cover w-full h-full" />
        <div class="absolute inset-0 bg-opacity-75 bg-secondary">
            <div class="flex h-20 bg-white bg-opacity-0">
                <ul class="flex items-center h-full mx-auto space-x-8 text-white">
                    <li @click="title = 'Encuentra la ayuda que necesites' " class="cursor-pointer">Services</li>
                    <li @click="title = 'Descubre un mundo de cosas nuevas' " class="cursor-pointer">Experience</li>
                    <li @click="title = 'Comparte y disfruta valiosos momentos' " class="cursor-pointer">Share a moment</li>
                </ul>
            </div>
            <div class="flex flex-col items-center justify-center h-full max-w-5xl mx-auto " >
                <h1 x-text="title" class="max-w-lg text-5xl font-bold text-center text-white "></h1>
                <livewire:search-product-form />
            </div>
        </div>
    </div>
    <script>
        const handler = () => {
            return {
                title : 'Creamos Momentos y Soluciones'
            }
        }
    </script>
</x-main-layout>
