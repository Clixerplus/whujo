@push('styles')
<style>
    #left {
        background-color: #eee;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4' viewBox='0 0 4 4'%3E%3Cpath fill='%23e32a2e' fill-opacity='1' d='M1 3h1v1H1V3zm2-2h1v1H3V1z'%3E%3C/path%3E%3C/svg%3E"), linear-gradient(rgba(26, 32, 46, .7), rgba(255, 46, 49, .7)), url('images/backgrounds/bg06.jpg');
        background-size: auto, contain, cover;
        background-repeat: repeat, repeat, no-repeat;
        background-attachment: fixed;
        background-attachment: fixed;
    }
</style>
@endpush

<x-double-panel>

    <x-slot name="left">

        <div class="fixed top-0 left-0">
            <h1 class="text-5xl flex m-4">
                <x-icon-whujo class="w-12 text-primary lg:text-white" />
            </h1>
        </div>

    </x-slot>


    <x-slot name="right">
        <div class="w-full md:w-2/3 px-4 h-48 mt-48 mx-auto">


            {{-- TITLE --}}
            <div class="text-left ">
                <h1 class="text-secondary font-bold text-3xl my-4">
                    {{__('Restablecer contraseña')}}
                </h1>

                <p class="mb-4">
                    Introduce la nueva contraseña. De ahora en adelante usarás esta contraseña
                    para accesar a la plataforma
                </p>
            </div>

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <div class="block">
                    <x-jet-input id="email"
                        class="block w-full focus:shadow-outline-gray py-4 transition ease-in-out duration-500"
                        type="email" name="email" :value="old('email', $request->email)"
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
        </div>
    </x-slot>

</x-double-panel>
