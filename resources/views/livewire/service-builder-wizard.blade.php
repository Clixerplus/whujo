<div class="relative h-screen w-screen overflow-hidden">
    <div class="flex h-full w-full">

        {{-- stepPanel --}}
        <div id="stepsPanel" class="fixed lg:static
                    flex-shrink-0 w-96 lg:w-64 h-full
                    bg-gray-100 lg:border-r-4 lg:border-gray-200
                    transform lg:transform-none -translate-x-full
                    shadow lg:shadow-none transition-500 z-10">

            <div class="flex flex-col h-full">

                {{-- Barra de Titulo --}}
                <div class="flex-shrink-0 h-20 px-4 border-b lg:border-b-0">
                    <div class="flex items-center justify-between h-full">
                        <div>
                            <x-logo-brand class="text-primary text-2xl" />
                        </div>
                        <button class="focus:outline-none lg:hidden">
                            <x-icon-close class="w-6 h-6 text-gray-400"
                                onclick="document.getElementById('stepsPanel').classList.toggle('-translate-x-full')" />
                        </button>
                    </div>
                </div>

                {{-- Listado de Pasos --}}
                <div class="flex-grow overflow-y-auto py-4 px-4">
                    <button class="mb-8 underline hover:text-secondary hover:font-semibold transition-300">
                        Guardar y salir
                    </button>

                    <ul class="step-list mb-8">

                        @foreach($stepsMenu as $stepItem)
                        <li class="step-list-item cursor-pointer h-16 @if($step == $loop->iteration) active @endif">
                            <a wire:click="goto({{ $loop->iteration }})" wire:key="goto-{{ $loop->iteration }}">
                                <span class="pt-1">

                                    <x-icon-square-outline class="icon" />

                                    {{-- <x-icon-checkboxclass="icontext-useful"/> --}}

                                </span>
                                <span class="text-sm">{{ $loop->iteration }}. {{ $stepItem['title'] }}</span>
                            </a>
                        </li>
                        @endforeach
                    </ul>

                </div>

            </div>
        </div>
        {{-- stepPanel --}}

        {{-- formPanel --}}
        <div id="formPanel" class="flex-grow h-screen bg-white">

            <div class="flex flex-col h-full">
                <div class="flex-grow overflow-y-auto">

                    {{-- Barra de Superior | Titulo y Botones --}}
                    <div class="flex items-center h-20 px-6 ">

                        {{-- Boton de Menu | Steps --}}
                        <x-button class="lg:hidden border rounded-md bg-gray-100 w-10 h-10 p-1 text-secondary mr-4"
                            onclick="document.getElementById('stepsPanel').classList.toggle('-translate-x-full')">
                            <x-icon-menu-outline class="h-full w-full" />
                        </x-button>

                        {{-- Titulo del Formulario --}}
                        <h1 class="text-lg font-semibold">
                            {{ $title }}
                        </h1>

                        {{-- Boton de Sugerencias --}}
                        @hasSection('suggestPanel')
                        <x-button class="lg:hidden border rounded-full bg-gray-100 text-info w-10 h-10 p-1 ml-auto"
                            onclick="document.getElementById('suggestPanel').classList.toggle('translate-y-full')">
                            <x-icon-alert-circle-outline class="h-full w-full" />
                        </x-button>
                        @endif

                    </div>
                    {{-- Barra de Titulo --}}

                    {{-- Formulario --}}
                    <div class="p-12">
                        <div class="max-w-xl mx-auto">

                            @include($component)

                        </div>
                    </div>
                    {{-- Formulario --}}

                </div>

                @yield('barra')
                {{-- Barra Inferior | Botones - Contador de Pasos --}}
                <div class="flex-shrink-0 h-16 px-4 bg-gray-50 lg:border-t-4 lg:border-gray-200">
                    <div class="flex items-center p-3 justify-between">
                        <x-button wire:click="previous" class="py-1 px-4 border border-secondary
                                            text-secondary text-sm
                                            hover:bg-secondary hover:text-white
                                            active:bg-secondary active:text-white">

                            Anterior</x-button>


                        <p>{{ $step }}/{{ $totalSteps }}</p>
                        <x-button wire:click="next" class="py-1.5 px-4 text-sm border
                                            border-primary-light text-white bg-primary
                                            hover:bg-primary-light active:bg-primary-light">
                            Siguiente</x-button>
                    </div>
                </div>
                {{-- Barra Inferior | Botones - Contador de Pasos --}}

            </div>
        </div>
        {{-- formPanel --}}

        {{-- suggestPanel --}}
        @hasSection('suggestPanel')
        <div id="suggestPanel" class="fixed lg:static flex-shrink-0
                    w-screen lg:w-96 h-full
                    bg-gray-50 lg:border-l-4 lg:border-gray-200
                    transform translate-y-full lg:transform-none
                    transition-500 z-10">

            <div class="flex flex-col h-full">

                {{-- Barra de Superior | Titulo y Boton de Cierre --}}
                <div class="flex-shrink-0 h-20 px-4 border-b lg:border-b-0 bg-white">
                    <div class="flex items-center justify-between h-full">

                        {{-- Titulo --}}
                        <h2 class="font-semibold">Sugerencias</h2>

                        {{--  Boton de Cierre --}}
                        <button class="focus:outline-none lg:hidden">
                            <x-icon-close class="w-6 h-6 text-gray-400"
                                onclick="document.getElementById('suggestPanel').classList.toggle('translate-y-full')" />
                        </button>

                    </div>
                </div>
                {{-- Barra de Superior | Titulo y Boton de Cierre --}}

                {{-- Contenido --}}
                <div class="flex-grow overflow-y-auto py-4 px-8">

                    @yield('suggestPanel')

                </div>
                {{-- Contenido --}}

            </div>
        </div>
        @endif
        {{-- suggestPanel --}}

    </div>
</div>


@push('scripts')


@endpush
