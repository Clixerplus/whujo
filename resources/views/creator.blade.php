<x-guest-layout>
    <div class="w-screen h-screen overflow-hidden ">

        {{--mask--}}
        <div id="mask" class="absolute hidden w-screen h-screen bg-black opacity-75 transition ease-in-out duration-1000 z-10">
        </div>

        <div class="h-full w-full lg:flex">


            {{-- steps --}}
            <div id="steps" class="absolute lg:static w-5/6 lg:w-2/12 h-full bg-white z-10 transform -translate-x-full lg:translate-x-0 transition ease-in-out duration-700">
                <div class="flex flex-col min-h-screen h-full">

                    <div class="flex items-center justify-between h-20 px-4 text-secondary bg-gray-100">
                        <h1 class="whujo-brand text-2xl">whujo</h1>
                        <button onclick="toggleSteps()" class="text-3xl text-gray-400 opacity-75 lg:hidden">X</button>
                    </div>

                    <div class="flex-grow overflow-y-auto">
                        <ul class="text-sm">
                            <li>
                                <a href="" class="flex items-center px-4 py-6 border-b border-t">
                                    <button
                                        class="w-6 h-6 text-sm rounded-full bg-green-500 ring ring-green-400  text-white">1
                                    </button>

                                    <h1 class="ml-4 text-sm font-semibold text-gray-900">Lorem, ipsum dolor</h1>
                                </a>
                            </li>
                            <li>
                                <a href="" class="flex items-center px-4 py-6 border-b">
                                    <button
                                        class="w-6 h-6 text-sm rounded-full bg-green-100 ring ring-green-300 text-green-600">2
                                    </button>

                                    <h1 class="ml-4 text-sm font-semibold text-gray-900">Lorem, ipsum dolor</h1>
                                </a>
                            </li>
                            <li>
                                <a href="" class="flex items-center px-4 py-6 border-b">
                                    <button
                                        class="w-6 h-6 text-sm rounded-full bg-gray-100 ring ring-gray-300 text-gray-400">3
                                    </button>

                                    <h1 class="ml-4 text-sm font-semibold text-gray-900">Lorem, ipsum dolor</h1>
                                </a>
                            </li>
                            <li>
                                <a href="" class="flex items-center px-4 py-6 border-b">
                                    <button
                                        class="w-6 h-6 text-sm rounded-full bg-gray-100 ring ring-gray-300 text-gray-400">4
                                    </button>

                                    <h1 class="ml-4 text-sm font-semibold text-gray-900">Lorem, ipsum dolor</h1>
                                </a>
                            </li>
                            <li>
                                <a href="" class="flex items-center px-4 py-6 border-b">
                                    <button
                                        class="w-6 h-6 text-sm rounded-full bg-gray-100 ring ring-gray-300 text-gray-400">5
                                    </button>

                                    <h1 class="ml-4 text-sm font-semibold text-gray-900">Lorem, ipsum dolor</h1>
                                </a>
                            </li>
                            <li>
                                <a href="" class="flex items-center px-4 py-6 border-b">
                                    <button
                                        class="w-6 h-6 text-sm rounded-full bg-gray-100 ring ring-gray-300 text-gray-400">6
                                    </button>

                                    <h1 class="ml-4 text-sm font-semibold text-gray-900">Lorem, ipsum dolor</h1>
                                </a>
                            </li>
                            <li>
                                <a href="" class="flex items-center px-4 py-6 border-b">
                                    <button
                                        class="w-6 h-6 text-sm rounded-full bg-gray-100 ring ring-gray-300 text-gray-400">7
                                    </button>

                                    <h1 class="ml-4 text-sm font-semibold text-gray-900">Lorem, ipsum dolor</h1>
                                </a>
                            </li>
                            <li>
                                <a href="" class="flex items-center px-4 py-6 border-b">
                                    <button
                                        class="w-6 h-6 text-sm rounded-full bg-gray-100 ring ring-gray-300 text-gray-400">8
                                    </button>

                                    <h1 class="ml-4 text-sm font-semibold text-gray-900">Lorem, ipsum dolor</h1>
                                </a>
                            </li>
                            <li>
                                <a href="" class="flex items-center px-4 py-6 border-b">
                                    <button class="w-6 h-6 text-sm rounded-full bg-gray-100 ring ring-gray-300 text-gray-400">9
                                    </button>

                                    <h1 class="ml-4 text-sm font-semibold text-gray-900">Lorem, ipsum dolor</h1>
                                </a>
                            </li>
                            <li>
                                <a href="" class="flex items-center px-4 py-6 border-b">
                                    <button class="w-6 h-6 text-sm rounded-full bg-gray-100 ring ring-gray-300 text-gray-400">10
                                    </button>

                                    <h1 class="ml-4 text-sm font-semibold text-gray-900">Lorem, ipsum dolor</h1>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>


            {{-- center --}}
            <div id="content" class="absolute lg:relative w-full lg:w-7/12 h-full z-0 lg:border-l-2 lg:border-r-2">
                <div class="flex flex-col h-full">

                    <div class="flex items-center w-full h-24 white pl-4 pr-8">

                        <button onclick="toggleSteps()" aria-label="Open Menu" title="Open Menu"
                            class="w-12 h-12 p-2 -mr-1 transition duration-200 bg-secondary border rounded focus:outline-none focus:ring lg:hidden">
                            <x-icon-menu-outline class="w-full text-gray-600" />
                        </button>

                        <h1 class="font-bold ml-4">{{ $stepName ?? 'Step Name'}}</h1>

                        <button onclick="toggleAdvices()"
                            class="w-10 h-10 ml-auto bg-white text-info rounded-full ring ring-info lg:hidden ">
                            <x-icon-information-circle class="w-full" />
                        </button>


                    </div>

                    <div class="flex-grow py-6 px-8 lg:px-16 leading-relaxed overflow-y-auto">
                        <h1 class="font-bold text-3xl ">Dónde Estaremos</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda, qui perspiciatis placeat
                            ducimus dolorem.</p>

                        <h2 class="py-6 font-semibold">Describe el lugar dónde se lleva a cabo la experiencia</h2>
                        <ul class="list-inside list-disc">
                            <li><span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur velit dolorem
                                    facilis.</span>
                            </li>
                            <li><span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo obcaecati numquam
                                    doloremque blanditiis. Vitae odio culpa fuga eligendi.</span>
                            </li>
                            <li><span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo quam dolores delectus
                                    maiores voluptatum numquam eius porro fugiat repudiandae et, quasi, fuga rem maxime
                                    beatae sequi sunt ipsam odio voluptatibus!</span>
                            </li>
                        </ul>

                    </div>

                    <div class="w-full h-20 py-4 px-8 text-center bg-gray-200 border-t shadow-2xl ">
                        <div class="flex items-center justify-between ">
                            <a href="#" class="btn w-20 lg:w-24  text-white bg-secondary hover:opacity-75">{{ __('Previous') }}</a>
                            <span class="font-bold text-xs ">@livewire('prueba')</span>
                            <a href="#" class="btn w-20 lg:w-24 text-white bg-success hover:opacity-75">{{ __('Next') }}</a>
                        </div>
                    </div>

                </div>
            </div>


            {{-- advices --}}
            <div id="advices" class="absolute lg:static w-full lg:w-3/12 h-full bg-white z-10 transform -translate-y-full lg:translate-y-0 transition ease-in-out duration-700">
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


</x-guest-layout>
