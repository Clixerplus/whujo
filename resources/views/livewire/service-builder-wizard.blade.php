<div class="relative w-screen h-screen overflow-hidden">
    <div class="flex w-full h-full">

        {{-- stepPanel --}}
        <div id="stepsPanel" class="fixed z-10 flex-shrink-0 h-full transform -translate-x-full bg-gray-100 shadow lg:static w-96 lg:w-64 lg:border-r-4 lg:border-gray-200 lg:transform-none lg:shadow-none transition-500">

            <div class="flex flex-col h-full">

                {{-- Barra de Titulo --}}
                <div class="flex-shrink-0 h-20 px-4 border-b lg:border-b-0">
                    <div class="flex items-center justify-between h-full">
                        <div>
                            <x-logo-brand class="text-2xl text-primary" />
                        </div>
                        <button class="focus:outline-none lg:hidden">
                            <x-icon-close class="w-6 h-6 text-gray-400"
                                onclick="document.getElementById('stepsPanel').classList.toggle('-translate-x-full')" />
                        </button>
                    </div>
                </div>

                {{-- Listado de Pasos --}}
                <div class="flex-grow px-4 py-4 overflow-y-auto">
                    <button class="mb-8 underline hover:text-secondary hover:font-semibold transition-300">
                        Guardar y salir
                    </button>

                    <ul class="mb-8 step-list">

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
                    <div class="flex items-center h-20 px-6 border-b">

                        {{-- Boton de Menu | Steps --}}
                        <x-ui::button class="w-10 h-10 p-1 mr-4 bg-gray-100 border rounded-md lg:hidden text-secondary"
                            onclick="document.getElementById('stepsPanel').classList.toggle('-translate-x-full')">
                            <x-icon-menu-outline class="w-full h-full" />
                        </x-ui::button>

                        {{-- Titulo del Formulario --}}
                        <h1 class="text-lg font-semibold">
                            {{ $title }}
                        </h1>

                        {{-- Boton de Sugerencias --}}

                        <x-ui::button class="w-10 h-10 p-1 ml-auto bg-gray-100 border rounded-full lg:hidden text-info"
                            onclick="document.getElementById('suggestPanel').classList.toggle('translate-y-full')">
                            <x-icon-alert-circle-outline class="w-full h-full" />
                        </x-ui::button>


                    </div>
                    {{-- Barra de Titulo --}}

                    {{-- Formulario --}}
                    <div class="max-w-2xl mx-auto">
                        <div class="p-6 ">
                            
                            @include($component,['product' => $product])

                        </div>
                    </div>
                    {{-- Formulario --}}

                </div>

                @yield('barra')

                {{-- Barra Inferior | Botones - Contador de Pasos --}}
                <div class="flex-shrink-0 h-16 px-4 bg-gray-50 lg:border-t-4 lg:border-gray-200">
                    <div class="flex items-center justify-between p-3">
                        <x-ui::button wire:click="previous"
                                  class="px-4 py-1 text-sm border border-secondary text-secondary hover:bg-secondary hover:text-white active:bg-secondary active:text-white">

                            Anterior</x-ui::button>


                        <p>{{ $step }}/{{ $totalSteps }}</p>
                        <x-ui::button wire:click="next" class="py-1.5 px-4 text-sm border
                                            border-primary-light text-white bg-primary
                                            hover:bg-primary-light active:bg-primary-light">
                            Siguiente</x-ui::button>
                    </div>
                </div>
                {{-- Barra Inferior | Botones - Contador de Pasos --}}

            </div>
        </div>
        {{-- formPanel --}}

        {{-- suggestPanel --}}
        @hasSection('suggestPanel')
        <div id="suggestPanel" class="fixed z-10 flex-shrink-0 w-screen h-full transform translate-y-full lg:static lg:w-96 bg-gray-50 lg:border-l-4 lg:border-gray-200 lg:transform-none transition-500">

            <div class="flex flex-col h-full">

                {{-- Barra de Superior | Titulo y Boton de Cierre --}}
                <div class="flex-shrink-0 h-20 px-4 bg-white border-b lg:border-b-0">
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
                <div class="flex-grow px-8 py-4 overflow-y-auto">

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
