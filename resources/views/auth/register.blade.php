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

    <x-slot name="body">
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
