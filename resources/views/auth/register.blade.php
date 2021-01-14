
@extends('auth.auth-screen-layout')

@section('background-image', 'https://images.pexels.com/photos/4349784/pexels-photo-4349784.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500')

@section('form')
    <h1 class="text-4xl  text-secondary mb-4">
        {{ __('Sign up for an account') }}
    </h1>

    <div class="px-4 mb-4">
        <x-jet-validation-errors />
    </div>

    <form method="POST" action="{{ route('register') }}" class="flex flex-col space-y-2">
        @csrf

        <div>
            <x-jet-input id="name" class="block w-full focus:shadow-outline-gray p-3 border border-gray-300 transition-500"
                type="text" name="name" :value="old('name')" required autofocus autocomplete="name"
                placeholder="{{__('Enter your name')}}" />
        </div>

        <div>
            <x-jet-input id="email" class="block w-full focus:shadow-outline-gray p-3 border border-gray-300 transition-500"
                type="email" name="email" :value="old('email')" required placeholder="{{__('Enter your email address')}}" />
        </div>

        <div>
            <x-jet-input id="password"
                class="block w-full focus:shadow-outline-gray p-3 border border-gray-300 transition-500" type="password"
                name="password" required autocomplete="new-password" placeholder="{{__('Create a password')}}" />
        </div>

        <div>
            <x-jet-input id="password_confirmation"
                class="block w-full focus:shadow-outline-gray p-3 border border-gray-300 transition-500" type="password"
                name="password_confirmation" required autocomplete="new-password"
                placeholder="{{__('Confirm Password')}}" />
        </div>

        <div class="py-6">
            <p class="text-xs">
                Al registrarme, acepto las <a href="#"
                    class="text-blue-600 font-semibold hover:underline">{{ __('Terms of Service') }}</a>
                y su <a href="#" class="text-blue-600 font-semibold hover:underline ">{{ __('Privacy Policy') }}</a>
                y declaro mi conformidad con lo establecido.
            </p>
        </div>
        <div>
            <button type="submit"
                    class="block w-full lg:w-3/4 mx-auto py-4
                        bg-primary-dark hover:bg-primary-light
                        border border-transparent rounded-md
                        font-semibold text-xs text-white tracking-widest
                        active:bg-primary-dark focus:outline-none
                        focus:border-secondary focus:shadow-outline-gray
                        disabled:opacity-25 transition-500">
                {{ __('Register') }}
            </button>
        </div>
        </div>
    </form>
@endsection

@section('call-to-action')
<span>
    {{ __('Already registered?') }}
</span>
<a href="{{ route('login') }}"
    class="rounded-md p-2
           border border-gray-400 font-light
           text-secondary hover:bg-primary
           hover:text-white active:bg-primary
           active:text-white transition-500">
    <span>{{ __('Sign in') }}</span>
    <x-icon-arrow-forward class="w-4 inline" />
</a>
@endsection
