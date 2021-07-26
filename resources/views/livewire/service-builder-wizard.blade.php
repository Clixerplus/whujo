<div class="relative w-screen h-screen overflow-hidden bg-gray-50">
    <div class="flex w-full h-full">

        {{-- stepPanel --}}
        <div id="stepsPanel"
            class="fixed z-10 flex-shrink-0 h-full transform -translate-x-full shadow lg:border-r lg:static w-96 lg:w-64 lg:transform-none lg:shadow-none transition-500">

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

                        @foreach ($stepsMenu as $stepItem)
                            <li class="step-list-item cursor-pointer h-16 @if ($step==$loop->
                                iteration) active @endif">
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
        <div id="formPanel" class="flex-grow h-screen ">

            <div class="flex flex-col h-full">
                <div class="flex-grow overflow-y-auto">

                    {{-- Barra de Superior | Titulo y Botones --}}
                    <div class="flex items-center h-20 px-6 border-b">

                        {{-- Boton de Menu | Steps --}}
                        <x-ui::button class="w-10 h-10 p-1 mr-4 border rounded-md lg:hidden text-secondary"
                            onclick="document.getElementById('stepsPanel').classList.toggle('-translate-x-full')">
                            <x-icon-menu-outline class="w-full h-full" />
                        </x-ui::button>

                        {{-- Titulo del Formulario --}}
                        <h1 class="text-lg font-semibold">
                            {{ $title }}
                        </h1>

                        {{-- Boton de Sugerencias --}}

                        <x-ui::button class="w-10 h-10 p-1 ml-auto border rounded-full lg:hidden text-info"
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
                <div class="flex-shrink-0 h-16 px-4 border-t bg-gray-50 ">
                    <div class="flex items-center justify-between p-3">
                        <x-ui::button wire:click="previous" :disabled="$currentStep==0"
                            @class([ 'text-sm border border-secondary text-secondary active:bg-secondary active:text-white'
                            , 'hover:bg-secondary hover:text-white'=> true
                            ])
                            >
                            Anterior
                        </x-ui::button>

                        <p>{{ $currentStep + 1 }}/{{ $totalSteps }}</p>

                        <x-ui::button wire:click="next"
                            class="text-sm text-white border border-primary-light bg-primary hover:bg-primary-light active:bg-primary-light">
                            Siguiente
                        </x-ui::button>
                    </div>
                </div>
                {{-- Barra Inferior | Botones - Contador de Pasos --}}

            </div>
        </div>
        {{-- formPanel --}}

        {{-- suggestPanel --}}
        @hasSection('suggestPanel')
            <div id="suggestPanel"
                class="fixed z-10 flex-shrink-0 w-screen h-full transform translate-y-full lg:static lg:w-96 bg-gray-50 lg:border-l lg:transform-none transition-500">

                <div class="flex flex-col h-full">

                    {{-- Barra de Superior | Titulo y Boton de Cierre --}}
                    <div class="flex-shrink-0 h-20 px-4 bg-white border-b lg:border-b-0">
                        <div class="flex items-center justify-between h-full">

                            {{-- Titulo --}}
                            <h2 class="font-semibold">Sugerencias</h2>

                            {{-- Boton de Cierre --}}
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
