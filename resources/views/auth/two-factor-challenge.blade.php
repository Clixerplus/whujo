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

@push('scripts')
<script>
    const showTab = (tabId)=> {
            const activeCtrl = document.querySelector('.tab > ul li.active')
            const activeTab  = document.querySelector('.tab > div:not(.hidden)')

            const ctrlToAct = document.getElementById(tabId)
            const tabToAct  = document.getElementById(tabId + 'Tab')

            activeCtrl.classList.remove('active')
            activeTab.classList.add('hidden')
            ctrlToAct.classList.add('active')
            tabToAct.classList.remove('hidden')

            console.log(activeCtrl)
            console.log(activeTab)
            console.log(ctrlToAct)
            console.log(tabToAct)

        }
</script>
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
                    {{ __('Two Factor Challenge') }}
                </h1>
            </div>

            <div class="tab">
                <ul class="flex gap-6 mb-4">
                    <li id="recoveryCode" class="p-3 active transition ease-in-out duration-500">
                        <a onclick="showTab('recoveryCode')" type="button"
                            class=" text-gray-600 hover:text-primary cursor-pointer focus:border-none">
                            {{ __('Use a recovery code') }}
                        </a>
                    </li>

                    <li id="authCode" class="p-3 transition ease-in-out duration-500">
                        <a onclick="showTab('authCode')" type="button"
                            class=" text-gray-600 hover:text-primary cursor-pointer">
                            {{ __('Use an authentication code') }}
                        </a>
                    </li>
                </ul>

                {{-- TAB1 --}}
                <div id="recoveryCodeTab" class="p-4 transition ease-in-out duration-500">
                    <div class="mb-4 text-secondary" x-show="recovery">
                        {{ __('Please confirm access to your account by entering one of your emergency recovery codes.') }}
                    </div>

                    <form method="POST" action="/two-factor-challenge">
                        @csrf
                        <div class="my-4">
                            <x-jet-input id="recovery_code" class="block w-full focus:shadow-outline-gray py-4 transition ease-in-out duration-500" type="text" name="recovery_code"
                                autocomplete="one-time-code" placeholder="{{ __('Recovery Code') }}" />
                        </div>

                        <x-jet-button class="float-right bg-primary transition ease-in-out duration-500">
                            {{ __('Login') }}
                        </x-jet-button>
                    </form>
                </div>

                {{-- TAB2 --}}
                <div id="authCodeTab" class="hidden p-4 ">
                    <div class="mb-4 text-secondary" x-show="! recovery">
                        {{ __('Please confirm access to your account by entering the authentication code provided by your authenticator application.') }}
                    </div>
                    <form method="POST" action="/two-factor-challenge">
                        @csrf

                        <div class="my-4">
                            <x-jet-label for="code" value="" />
                            <x-jet-input id="code" class="block w-full focus:shadow-outline-gray py-4 transition ease-in-out duration-500" type="text" inputmode="numeric" name="code"
                                autofocus placeholder="{{ __('Authentication Code') }}" autocomplete="one-time-code" />
                        </div>

                        <x-jet-button class="float-right bg-primary transition ease-in-out duration-500">
                            {{ __('Login') }}
                        </x-jet-button>
                    </form>

                </div>

            </div>

    </x-slot>

</x-double-panel>
