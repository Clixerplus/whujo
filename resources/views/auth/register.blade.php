@push('styles')
<style>
    .lside {
        background-color: #eee;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4' viewBox='0 0 4 4'%3E%3Cpath fill='%23e32a2e' fill-opacity='1' d='M1 3h1v1H1V3zm2-2h1v1H3V1z'%3E%3C/path%3E%3C/svg%3E"), linear-gradient(rgba(26, 32, 46, .7), rgba(255, 46, 49, .7)), url('images/backgrounds/bg06.jpg');
        background-size: auto, contain, cover;
        background-repeat: repeat, repeat, no-repeat;
        background-attachment: fixed;
        background-attachment: fixed;
    }
</style>
@endpush

<x-auth>

    <x-slot name="link">
        <span>
            {{ __('Already registered?') }}
        </span>
        <a href="{{ route('login') }}"
            class="rounded-full px-4 py-2 border border-primary text-primary hover:bg-primary hover:text-white  transition ease-in-out duration-500">
            {{ __('Sign in') }}
        </a>
    </x-slot>

    <x-slot name="title">
        {{ __('Sign up for an account') }} <span class="text-primary font-whujo">Whujo</span>
    </x-slot>

    <x-slot name="form">
        <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-4">
            @csrf

            <div>
                <x-jet-input id="name"
                    class="block w-full focus:shadow-outline-gray py-4 transition ease-in-out duration-500" type="text"
                    name="name" :value="old('name')" required autofocus autocomplete="name"
                    placeholder="{{__('Enter your name')}}" />
            </div>

            <div>
                <x-jet-input id="email"
                    class="block w-full focus:shadow-outline-gray py-4 transition ease-in-out duration-500" type="email"
                    name="email" :value="old('email')" required placeholder="{{__('Enter your email address')}}" />
            </div>

            <div>
                <x-jet-input id="password"
                    class="block w-full focus:shadow-outline-gray py-4 transition ease-in-out duration-500"
                    type="password" name="password" required autocomplete="new-password"
                    placeholder="{{__('Create a password')}}" />
            </div>

            <div>
                <x-jet-input id="password_confirmation"
                    class="block w-full focus:shadow-outline-gray py-4 transition ease-in-out duration-500"
                    type="password" name="password_confirmation" required autocomplete="new-password"
                    placeholder="{{__('Confirm Password')}}" />
            </div>

            <div class="my-6">
                <p class="text-xs">
                    Al registrarme, acepto las <a href="#"
                        class="text-blue-600 font-semibold hover:underline">{{ __('Terms of Service') }}</a>
                    y su <a href="#" class="text-blue-600 font-semibold hover:underline ">{{ __('Privacy Policy') }}</a>
                    y declaro mi conformidad con lo establecido.
                </p>
            </div>
            <div class="mb-6">
                <button type="submit"
                    class="block w-full lg:w-3/4 mx-auto py-4 bg-primary border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-secondary focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-500">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </x-slot>

</x-auth>
