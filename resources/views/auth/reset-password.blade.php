<x-auth>
    {{-- TITLE --}}
    <x-tittle class="text-left ">

        {{__('Restablecer contraseña')}}

        <p class="mb-4">
            Introduce la nueva contraseña. De ahora en adelante usarás esta contraseña
            para accesar a la plataforma
        </p>
    </x-tittle>


    <x-slot name=body>
        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-jet-input id="email"
                    class="block w-full focus:shadow-outline-gray py-4 transition ease-in-out duration-500" type="email"
                    name="email" :value="old('email', $request->email)"
                    placeholder="{{ __('Enter your email address') }}" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-input id="password"
                    class="block w-full focus:shadow-outline-gray py-4 transition ease-in-out duration-500"
                    type="password" name="password" placeholder="{{ __('Enter your password') }}" required
                    autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-input id="password_confirmation"
                    class="block w-full focus:shadow-outline-gray py-4 transition ease-in-out duration-500"
                    type="password" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required
                    autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button
                    class="mx-auto p-4 bg-primary border border-transparent rounded-md font-semibold text-xs
                        text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none
                        focus:border-secondary focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-500">
                    {{ __('Reset Password') }}
                </x-jet-button>
            </div>
        </form>
    </x-slot>


</x-auth>
