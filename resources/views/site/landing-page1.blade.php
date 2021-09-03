<x-guest-layout>

    {{-- hero --}}
    <div class="flex h-screen overflow-hidden ">
        <div class="w-1/2 h-full bg-secondary">
            <div class="flex flex-col items-center justify-center h-full">
                <div>
                    <h2 class="text-5xl font-bold leading-tight text-white">
                        Creamos Momentos
                    </h2>
                    <x-ui::button class="mt-8 bg-primary">Descubre</x-ui::button>
                </div>
            </div>>
        </div>
        <div class="relative w-1/2 h-full">
            <img src="{{ asset('images/bg/section-bg-share-a-coffe.jpeg') }}"
                alt="valores whujo -Humanidad, Diversidad, Innovación y Transparencia" class="object-cover h-full" />
            <div class="absolute inset-0 bg-gradient-to-r from-secondary via-transparent to-transparent"></div>
        </div>
    </div>

    <div class="py-24 bg-gray-100">
        <x-section-container class="text-center ">
            <x-section-title :separator="false">
                ¿Que es comparte un momento?
                <x-slot name="subtitle">
                    Hagamos de lo comun algo divertido
                </x-slot>
            </x-section-title>

            <div class="flex gap-4 mt-12">
                <div class="w-1/2">
                    <img src="{{ asset('images/bg/section-bg-share-a-coffe.jpeg') }}"
                        alt="valores whujo -Humanidad, Diversidad, Innovación y Transparencia"
                        class="object-cover rounded-md shadow-xl" />
                </div>
                <div class="flex flex-col items-center justify-around w-1/2">
                    <ul class="space-y-4 text-2xl text-left list-disc list-inside">
                        <li>¿Quieres aprender algo nuevo?</li>
                        <li>¿Quieres compartir unos mates?</li>
                        <li>¿Quieres conversar?</li>
                        <li>¿Estás aburrido?</li>
                        <li>¿Quieres compartir lo que sabes?</li>
                        <li>¿Necesitas debatir?</li>
                    </ul>

                    <x-ui::button class="text-white bg-primary">
                        Unete a whujo
                    </x-ui::button>
                </div>
            </div>
        </x-section-container>
    </div>

    <x-section-container class="flex h-screen py-16 gap-x-12">
        <x-section-title class="flex flex-col justify-center w-1/2 ">
            Por qué <br> unirte a <span class="text-primary font-whujo">whujo?</span>
            <x-slot name="subtitle">
                Nuestra plataforma ofrece servicios, experiencias y algo mas... <strong class="font-bold">"Comparte
                    un momento"</strong>.
                Queremos devolverle la importancia a la simplicidad y hacer de lo complejo algo facil.
                Somos experiencias, somos servicios, somos momentos, somos <span
                    class="font-bold text-whujo font-whujo">whujo</span>.
                <br><br><span class="font-medium">Devolviendole la importancia a la presencialidad sin olvidar
                    adaptarnos a lo que necesites!!!</span>
            </x-slot>
        </x-section-title>

        <div class="relative w-1/2 h-full overflow-hidden">
            <div class="flex h-full gap-x-4">
                <div class="flex flex-col -translate-y-1/2 gap-y-4">
                    <div class="w-full shadow-lg h-90">
                        <img src="https://images.pexels.com/photos/4869876/pexels-photo-4869876.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                            class="object-cover object-top rounded-md max-h-90">
                    </div>
                    <div class="w-full shadow-lg h-90">
                        <img src="https://images.pexels.com/photos/139829/pexels-photo-139829.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260"
                            class="object-cover rounded-md">
                    </div>
                    <div class="w-full shadow-lg h-90">
                        <img src="https://images.pexels.com/photos/3760958/pexels-photo-3760958.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                            class="object-cover rounded-md max-h-90">
                    </div>
                </div>
                <div class="flex flex-col gap-y-4">
                    <div class="w-full shadow-lg h-90">
                        <img src="https://images.pexels.com/photos/5414000/pexels-photo-5414000.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                            class="object-cover rounded-md max-h-90">
                    </div>
                    <div class="w-full shadow-lg h-90">
                        <img src="{{ asset('images/service-category-03.jpeg') }}"
                            class="object-cover rounded-md max-h-90">
                    </div>
                </div>
            </div>
        </div>
    </x-section-container>
</x-guest-layout>
