@php
$styles = [
'completed' => 'bg-green-500 ring-green-400 text-white',
'incomplete' => 'bg-gray-100 ring-gray-300 text-gray-400',
'current' => 'bg-gray-100 ring-yellow-300 text-gray-700'
];

@endphp

<div class="w-screen h-screen overflow-hidden ">

    {{--mask--}}
    <div id="mask"
        class="absolute hidden w-screen h-screen bg-black opacity-75 transition ease-in-out duration-1000 z-10">
    </div>

    <div class="h-full w-full lg:flex">


        {{-- steps --}}
        <div id="steps"
            class="absolute lg:static w-5/6 lg:w-4/12 h-full bg-white z-10 transform -translate-x-full lg:translate-x-0 transition ease-in-out duration-700">
            <div class="flex flex-col min-h-screen h-full">

                <div class="flex items-center justify-between h-20 px-4 text-secondary">
                    <h1 class="whujo-brand text-2xl">whujo</h1>
                    <button onclick="toggleSteps()" class="text-3xl text-gray-400 opacity-75 lg:hidden">X</button>
                </div>

                <div class="flex-grow overflow-y-auto">
                    <ul class="text-sm">

                        @foreach ($steps as $step)
                        <li @if ($currentStep == $loop->index) class="bg-gray-200" @else class="hover:bg-gray-50" @endif>
                            <a href="" class="flex items-center pl-4 py-6 border-b border-t">
                                <button class="w-6 h-6 text-sm rounded-full ring
                                    @if ($currentStep == $loop->index) {{ $styles['current'] }}
                                    @elseif ($step->status == 'complete') {{ $styles['completed'] }}
                                    @else {{ $styles['incomplete'] }}  @endif">
                                    {{ $loop->iteration }}
                                </button>

                                <h1 class="ml-3 text-sm font-semibold text-gray-900">{{ $step->name }}</h1>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>


        {{-- center --}}
        <div id="content"
            class="absolute lg:relative w-full lg:flex-grow h-full bg-white z-0 lg:border-l-2 lg:border-r-2">
            <div class="flex flex-col h-full">

                <div class="flex items-center w-full h-24 white pl-4 pr-8">

                    <button onclick="toggleSteps()" aria-label="Open Menu" title="Open Menu"
                        class="w-12 h-12 p-2 -mr-1 transition duration-200 border rounded focus:outline-none focus:ring lg:hidden">
                        <x-icon-menu-outline class="w-full text-gray-600" />
                    </button>

                    <h1 class="font-bold ml-4 text-success">{{ $testAttr ?? ''}}</h1>

                    <button onclick="toggleAdvices()"
                        class="w-10 h-10 ml-auto bg-white text-info rounded-full ring ring-info lg:hidden ">
                        <x-icon-information-circle class="w-full" />
                    </button>


                </div>

                <div class="flex-grow leading-relaxed overflow-y-auto">
                    {{ $currentStep }}

                    <div class="@if ($currentStep != 0) hidden @endif px-8 lg:px-24 py-6 w-full h-full">
                        @livewire('wizard.' . $steps[0]->view, [$product->{$steps[0]->field}])
                    </div>


                    <div class="@if ($currentStep != 1) hidden @endif px-8 lg:px-24 py-6 w-full h-full">
                        @livewire('wizard.' . $steps[1]->view, [$product->{$steps[1]->field}])
                    </div>

                    <div class="@if ($currentStep != 2) hidden @endif px-8 lg:px-24 py-6 w-full h-full">
                        @livewire('wizard.' . $steps[2]->view, [$product->{$steps[2]->field}])
                    </div>

                    <div class="@if ($currentStep != 3) hidden @endif px-8 lg:px-24 py-6 w-full h-full">
                        @livewire('wizard.' . $steps[3]->view, [$product->{$steps[3]->field}])
                    </div>

                    <div class="@if ($currentStep != 4) hidden @endif px-8 lg:px-24 py-6 w-full h-full">
                        @livewire('wizard.' . $steps[4]->view, [$product->{$steps[4]->field}])
                    </div>

                    <div class="@if ($currentStep != 5) hidden @endif px-8 lg:px-24 py-6 w-full h-full">
                        @livewire('wizard.' . $steps[5]->view, [$product->{$steps[5]->field}])
                    </div>

                    <div class="@if ($currentStep != 6) hidden @endif px-8 lg:px-24 py-6 w-full h-full">
                        @livewire('wizard.' . $steps[6]->view, [$product->{$steps[6]->field}])
                    </div>

                </div>

                <div class="w-full h-20 px-8 text-center bg-gray-200 border-t shadow-2xl ">
                    <div class="flex items-center justify-between h-full">
                        <x-button class="bg-gray-700 p-3 lg:p-4" wire:click="previous">{{ __('Previous') }}</x-button>
                        <span class="font-bold text-xs ">1/10</span>
                        <x-button class="bg-success p-3 lg:p-4" wire:click="next">{{ __('Next') }}</x-button>
                    </div>
                </div>

            </div>
        </div>


        {{-- advices --}}
        <div id="advices"
            class="absolute lg:static w-full lg:w-6/12 h-full bg-white z-10 transform -translate-y-full lg:translate-y-0 transition ease-in-out duration-700">
            <div class="flex flex-col h-full">

                <div class="flex items-center h-36 p-4 bg-info lg:bg-transparent">
                    <button onclick="toggleAdvices()"
                        class="w-8 h-8 text-info  bg-white  rounded-full ring-2 ring-info lg:hidden">
                        <x-icon-information-circle class="w-full" />
                    </button>
                    <h1 class="text-xl lg:text-base text-white lg:text-secondary font-bold ml-4 ">Sugerencias</h1>
                </div>

                <div class="flex-grow py-4 px-8 text-sm overflow-y-auto leading-relaxed">

                    <p class="my-2">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum ea aliquid soluta.
                        Corrupti rem.</p>

                    <ol class="my-2">
                        <li>Lorem, ipsum dolor.</li>
                        <li>Lorem ipsum dolor sit amet consectetur.</li>
                        <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</li>
                        <li>Lorem, ipsum.</li>
                        <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos iusto voluptate
                            obcaecati.</li>
                    </ol>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste excepturi nisi aliquid nobis
                        libero, saepe, enim hic eius tempora voluptas nemo ipsa asperiores nostrum ea. Iste earum
                        illo
                        adipisci ex!</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel quos harum nulla in impedit
                        officia sapiente praesentium corporis, voluptas corrupti autem tempora rerum dignissimos
                        iusto est. Natus animi non sapiente reiciendis iste itaque ab, excepturi porro ipsum rem
                        iusto omnis neque corporis fugiat maiores quasi unde modi soluta, officia facilis minima
                        mollitia nobis dolore amet. Fugiat, facere? Quaerat atque recusandae pariatur corporis
                        aperiam ducimus laboriosam natus culpa, ut magnam, consequuntur iusto, tempore porro. Est
                        tempora repellat, iste tenetur quam quidem non corporis nesciunt doloremque officiis ratione
                        similique incidunt repellendus minus. Earum autem sunt nisi hic quasi minima laudantium
                        ipsam enim ut? Asperiores aperiam minus ea beatae aliquid doloribus, illum ipsa ipsum. Saepe
                        vel, officiis necessitatibus distinctio ipsum, illum quam aliquam molestias, mollitia
                        pariatur optio maxime suscipit facere omnis hic praesentium reprehenderit beatae voluptatem
                        quidem aperiam nesciunt alias consequatur! Accusamus quod quis laboriosam ipsum nemo saepe,
                        totam veniam. Laborum, tenetur aperiam? Non, dolores! Dolore est sit ea facilis, pariatur
                        vel assumenda voluptas, exercitationem tempore eveniet laudantium error dolor autem ducimus
                        nobis nostrum magnam sapiente atque debitis blanditiis. Molestias in ipsum fuga dolorem
                        porro. Alias, rerum nesciunt! Modi minima consequatur unde itaque doloremque fugit
                        exercitationem vitae ipsum id eum, ullam eius, laboriosam consectetur eaque iusto, laborum
                        blanditiis quasi quidem cumque nulla. Delectus magni odio quo ad, aspernatur fuga nam, sit
                        voluptates aut voluptas reprehenderit quia neque. Cum distinctio et nesciunt quas,
                        voluptatibus corporis harum. Omnis quis, eos obcaecati earum fugit similique optio modi
                        animi explicabo magnam minus natus voluptas amet ab delectus nam ipsa aliquam. Dolorum
                        aliquam sapiente veniam asperiores laborum commodi et, eveniet, fuga magnam a consequatur
                        temporibus dolore tenetur doloremque ad fugiat? Molestias minima sapiente molestiae, officia
                        consectetur quasi doloremque, deleniti velit impedit illo exercitationem! Reprehenderit, nam
                        sint laborum ut vero eum, possimus nemo, sit eaque dolorum est magnam quis?</p>

                </div>

                <div class="h-20 border-t py-4 text-center lg:hidden">
                    <button onclick="toggleAdvices()"
                        class="btn-circle p-3 ring-2 ring-gray-300">{{ __('Close') }}</button>
                </div>

            </div>
        </div>

    </div>

</div>


<script>
    const toggleSteps = ()=> {
            showMask()
            const steps = document.getElementById('steps')
            steps.classList.toggle('-translate-x-full')
        }

        const toggleAdvices= () => {
            showMask()
            const advices = document.getElementById('advices')
            advices.classList.toggle('-translate-y-full')
        }

        const showMask = () => {
            const maskMenu = document.getElementById('mask')
            mask.classList.toggle('hidden')
        }
</script>
