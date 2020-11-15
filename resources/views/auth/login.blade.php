<x-auth>

    <x-slot name="link">
        <span>
            {{ __('Don’t have an account?') }}
        </span>
        <a href="{{ route('register') }}"
            class="rounded-full px-4 py-2 border border-primary text-primary hover:bg-primary hover:text-white  transition ease-in-out duration-500">
            {{ __('Get started') }}
            <x-icon-chevron-forward-outline class="inline w-4" />
        </a>
    </x-slot>


    <x-slot name="title">
        {{ __('Sign in to') }} <span class="text-primary font-whujo">Whujo</span>
    </x-slot>

    <x-slot name="body">
        <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-4">
            @csrf
            <div>
                <x-jet-input id="email"
                    class="block w-full focus:shadow-outline-gray py-4 transition ease-in-out duration-500" type="email"
                    name="email" :value="old('email')" placeholder="{{ __('Enter your email address') }}" required
                    autofocus />
            </div>
            <div>
                <x-jet-input id="password"
                    class="block w-full focus:shadow-outline-gray py-4 transition ease-in-out duration-500"
                    type="password" name="password" placeholder="{{ __('Enter your password') }}" required
                    autocomplete="current-password" />
            </div>
            <div class="flex justify-between my-4">
                <label for="remember_me" class="flex items-center cursor-pointer">
                    <input id="remember_me" type="checkbox" class="form-checkbox cursor-pointer duration-500"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember Me') }}</span>
                </label>

                @if (Route::has('password.request'))
                <a class="text-sm  text-blue-600 hover:text-gray-900 transition ease-in-out duration-500"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif
            </div>
            <div>
                <button type="submit"
                    class="block w-full lg:w-3/4 mx-auto py-4 bg-primary border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-secondary focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-500">
                    {{ __('Login') }}
                </button>
            </div>
        </form>
    </x-slot>

</x-auth>
