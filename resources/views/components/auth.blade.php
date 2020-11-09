<x-double-panel>

    <x-slot name="left">

        <div class="fixed top-0 left-0">
            <h1 class="text-5xl flex m-4">
                <x-icon-whujo class="w-12 text-primary lg:text-white" />
            </h1>
        </div>

        {{ $left ?? '' }}

    </x-slot>

    <x-slot name="right">

        {{-- TOP LINK --}}
        <div class="mt-6 px-4 text-sm text-right">
            {{ $links ?? '' }}
        </div>

        <div class="w-full md:w-2/3 m-auto">

            {{-- TITLE --}}
            <div class="text-left px-4 mt-8">
                <h1 class="text-secondary font-bold text-3xl">
                    {{ $title }}
                </h1>
            </div>

            {{-- VALIDATION --}}
            <div class="px-4">
                <x-jet-validation-errors />
            </div>

            {{-- SESSION STATUS --}}
            @if (session('status'))
            <div class=" font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
            @endif

            {{-- FORM --}}
            <div>
                {{ $form ?? '' }}
            </div>

            {{-- BUTTONS SOCIALAUTH --}}
            <div>

                <div class="text-center my-8">- O continua con -</div>

                <div>
                    {{ $socialAuth ?? '' }}
                </div>

            </div>

            {{-- LEGAL LINKS --}}
            <div class="mt-6 mb-4">
                <ul class="flex justify-center text-sm text-secondary">
                    <li>
                        <a class="hover:text-blue-600 hover:underline transition ease-in-out duration-500" href="#">
                            {{ __('Terms of Service') }}
                        </a>
                    </li>
                    <li class="mx-2">|</li>
                    <li>
                        <a class="hover:text-blue-600 hover:underline transition ease-in-out duration-500" href="#">
                            {{ __('Privacy Policy') }}
                        </a>
                    </li>
                </ul>
            </div>

        </div>

    </x-slot>

</x-double-panel>
