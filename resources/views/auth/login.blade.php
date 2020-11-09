@push('styles')
<style>
    #left {
        background-color: #eee;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4' viewBox='0 0 4 4'%3E%3Cpath fill='%23e32a2e' fill-opacity='1' d='M1 3h1v1H1V3zm2-2h1v1H3V1z'%3E%3C/path%3E%3C/svg%3E"), linear-gradient(rgba(26, 32, 46, .7), rgba(255, 46, 49, .7)), url('images/backgrounds/bg01.jpg');
        background-size: auto, contain, contain;
        background-repeat: repeat, repeat, no-repeat;
        background-attachment: fixed;
        background-attachment: fixed;
    }
</style>
@endpush

<x-auth>

    <x-slot name="links">
        <span class="mr-2">
            {{ __('Don’t have an account?') }}
        </span>
        <a href="{{ route('register') }}"
            class="rounded-md px-4 py-2 bg-primary hover:bg-secondary text-white transition ease-in-out duration-500">
            {{ __('Get started') }}
        </a>
    </x-slot>

    <x-slot name="title">
        {{ __('Sign in to') }} Whujo
    </x-slot>

    <x-slot name="form">

        <div class="px-4 my-2">
            <p class="">{{ __('Enter your details below') }}</p>
        </div>

        <form method="POST" action="{{ route('login') }}" class="px-4 my-4">
            @csrf

            <div>
                <x-jet-input id="email" class="block w-full focus:shadow-outline-gray py-4 transition ease-in-out duration-500" type="email" name="email"
                    :value="old('email')" placeholder="{{ __('Enter your email address') }}" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-input id="password" class="block w-full focus:shadow-outline-gray py-4 transition ease-in-out duration-500" type="password"
                    name="password" placeholder="{{ __('Enter your password') }}" required
                    autocomplete="current-password" />
            </div>

            <div class="flex justify-between my-6 ">
                <label for="remember_me" class="flex items-center cursor-pointer">
                    <input id="remember_me" type="checkbox" class="form-checkbox cursor-pointer duration-500" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember Me') }}</span>
                </label>

                @if (Route::has('password.request'))
                <a class="text-sm  text-blue-600 hover:text-gray-900 transition ease-in-out duration-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif

            </div>
            <div class="text-center mt-4">
                <button type="submit"
                    class="w-full mx-auto p-4 bg-primary border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-secondary focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-500">
                    {{ __('Login') }}
                </button>
            </div>

        </form>
    </x-slot>

    <x-slot name="socialAuth">
        <ul class="flex justify-center align-center gap-3 px-4">
            <li>
                <x-btn-social-auth href="#" :icon="'icon-logo-google'">
                    Google
                </x-btn-social-auth>
            </li>
            <li>
                <x-btn-social-auth href="#" :icon="'icon-logo-facebook'">
                    Facebook
                </x-btn-social-auth>
            </li>
            <li>
                <x-btn-social-auth href="#" :icon="'icon-logo-linkedin'">
                    LinkedIn
                </x-btn-social-auth>
            </li>
        </ul>
    </x-slot>



</x-auth>
