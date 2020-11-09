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
        <div class="w-full md:w-2/3 h-48 mt-48 mx-auto">


            {{-- TITLE --}}
            <div class="text-left ">
                <h1 class="text-secondary font-bold text-3xl">
                    {{ __('Verify email address') }}
                </h1>
            </div>

            <div class="mb-4 text-sm text-gray-600">
                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
            </div>

            @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
            @endif

            <div class="mt-4 flex items-center justify-between">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div>
                        <x-jet-button type="submit" class="bg-primary transition ease-in-out duration-500">
                            {{ __('Resend Verification Email') }}
                        </x-jet-button>
                    </div>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                        {{ __('Logout') }}
                    </button>
                </form>
            </div>
        </div>
    </x-slot>

</x-double-panel>
