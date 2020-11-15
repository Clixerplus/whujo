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

<x-auth>


    <x-slot name="title">

        {{ __('Two Factor Challenge') }}
    </x-slot>

    <x-slot name="body">

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
                        <x-jet-input id="recovery_code"
                            class="block w-full focus:shadow-outline-gray py-4 transition ease-in-out duration-500"
                            type="text" name="recovery_code" autocomplete="one-time-code"
                            placeholder="{{ __('Recovery Code') }}" />
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
                        <x-jet-input id="code"
                            class="block w-full focus:shadow-outline-gray py-4 transition ease-in-out duration-500"
                            type="text" inputmode="numeric" name="code" autofocus
                            placeholder="{{ __('Authentication Code') }}" autocomplete="one-time-code" />
                    </div>

                    <x-jet-button class="float-right bg-primary transition ease-in-out duration-500">
                        {{ __('Login') }}
                    </x-jet-button>
                </form>

            </div>

        </div>
    </x-slot>


</x-auth>