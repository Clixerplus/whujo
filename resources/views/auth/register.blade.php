
@extends('auth.auth-screen-layout')

@section('background-image', 'https://images.pexels.com/photos/4349784/pexels-photo-4349784.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500')

@section('form')
    <h1 class="mb-4 text-4xl text-secondary">
        {{ __('Sign up for an account') }}
    </h1>

    <div class="px-4 mb-4">
        <x-jet-validation-errors />
    </div>

    <form method="POST" action="{{ route('register') }}" class="flex flex-col space-y-2">
        @csrf

        <div>
            <x-jet-input id="name" class="block w-full p-3 border border-gray-300 focus:shadow-outline-gray transition-500"
                type="text" name="name" :value="old('name')" required autofocus autocomplete="name"
                placeholder="{{__('Enter your name')}}" />
        </div>

        <div>
            <x-jet-input id="email" class="block w-full p-3 border border-gray-300 focus:shadow-outline-gray transition-500"
                type="email" name="email" :value="old('email')" required placeholder="{{__('Enter your email address')}}" />
        </div>

        <div>
            <x-jet-input id="password"
                class="block w-full p-3 border border-gray-300 focus:shadow-outline-gray transition-500" type="password"
                name="password" required autocomplete="new-password" placeholder="{{__('Create a password')}}" />
        </div>

        <div>
            <x-jet-input id="password_confirmation"
                class="block w-full p-3 border border-gray-300 focus:shadow-outline-gray transition-500" type="password"
                name="password_confirmation" required autocomplete="new-password"
                placeholder="{{__('Confirm Password')}}" />
        </div>

        <div class="py-6">
        <x-jet-checkbox name="terms" id="terms"/>
            <p class="text-xs">
                Al registrarme, acepto las <a href="#"
                    class="font-semibold text-blue-600 hover:underline">{{ __('Terms of Service') }}</a>
                y su <a href="#" class="font-semibold text-blue-600 hover:underline ">{{ __('Privacy Policy') }}</a>
                y declaro mi conformidad con lo establecido.
            </p>
        </div>
        <div>
            <button type="submit"
                    class="block w-full py-4 mx-auto text-xs font-semibold tracking-widest text-white border border-transparent rounded-md lg:w-3/4 bg-primary-dark hover:bg-primary-light active:bg-primary-dark focus:outline-none focus:border-secondary focus:shadow-outline-gray disabled:opacity-25 transition-500">
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
    class="p-2 font-light border border-gray-400 rounded-md text-secondary hover:bg-primary hover:text-white active:bg-primary active:text-white transition-500">
    <span>{{ __('Sign in') }}</span>
    <x-icon-arrow-forward class="inline w-4" />
</a>
@endsection
