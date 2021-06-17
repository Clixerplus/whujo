@extends('auth.auth-screen-layout')

@section('background-image', 'https://images.pexels.com/photos/3184423/pexels-photo-3184423.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500')

@section('form')
    <h1 class="mb-4 text-4xl text-secondary">
        {{ __('Sign in') }}
    </h1>

    <div class="px-4 mb-4">
        <x-jet-validation-errors />
    </div>

    <form method="POST" action="{{ route('login') }}" class="flex flex-col space-y-3">
        @csrf
        <div>
            <label for="email" class="text-sm font-light">Correo electrónico</label>
            <x-jet-input id="email"
                class="block w-full p-3 mt-1 border border-gray-300 focus:shadow-outline-gray transition-500" type="email"
                name="email" :value="old('email')" placeholder="{{ __('Enter your email address') }}" required autofocus />
        </div>
        <div>
            <label for="email" class="text-sm font-light">Contraseña</label>
            <x-jet-input id="password"
                class="block w-full p-3 mt-1 border border-gray-300 focus:shadow-outline-gray transition-500"
                type="password" name="password" placeholder="{{ __('Enter your password') }}" required
                autocomplete="current-password" />
        </div>
        <div class="flex justify-between py-4">
            <label for="remember_me" class="flex items-center cursor-pointer">
                <x-ui::checkbox :key="'remember'" :caption="__('Remember Me')" />
            </label>

            @if (Route::has('password.request'))
            <a class="text-sm text-blue-600 transition duration-500 ease-in-out hover:text-gray-900"
                href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
            @endif
        </div>
        <div>
            <button type="submit" class="block w-full py-4 mx-auto text-xs font-semibold tracking-widest text-white border border-transparent rounded-md lg:w-3/4 bg-primary-dark hover:bg-primary-light active:bg-primary-dark focus:outline-none focus:border-secondary focus:shadow-outline-gray disabled:opacity-25 transition-500">
                {{ __('Login') }}
            </button>
        </div>
    </form>
@endsection

@section('call-to-action')
    <span>
        {{ __('Don’t have an account?') }}
    </span>
    <a href="{{ route('register') }}"
        class="p-2 font-light border border-gray-400 rounded-md text-secondary hover:bg-primary hover:text-white active:bg-primary active:text-white transition-500">
        <span>{{ __('Get started') }}</span>
        <x-icon-arrow-forward class="inline w-4" />
    </a>
@endsection
