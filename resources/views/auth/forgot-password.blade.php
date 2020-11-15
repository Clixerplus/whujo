<x-auth>

    {{-- TITLE --}}
    <x-slot name="title">
        {{__('Forgot your password?')}}
        <p class="mt-4 text-cool-gray-700 text-sm font-normal">
            {{ __('No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </p>
    </x-slot>

    <x-slot name="body">
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-input id="email"
                    class="block w-full focus:shadow-outline-gray py-4 transition ease-in-out duration-500" type="email"
                    name="email" :value="old('email')" required autofocus
                    placeholder="{{ __('Enter your email address') }}" />
            </div>

            <div class="flex mt-4">
                <x-jet-button
                    class="mx-auto p-4 bg-primary border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-secondary focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-500">
                    {{ __('Send Password Reset Link') }}
                </x-jet-button>
            </div>
        </form>
    </x-slot>


</x-auth>
