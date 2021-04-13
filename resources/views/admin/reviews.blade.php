<x-admin-layout>
    <div class="flex flex-col lg:flex-row lg:justify-between items-center space-y-2  px-6 py-8 mt-16">

        <h1 class="text-3xl ">Reseñas</h1>
        <ul class="flex items-center space-x-1 text-gray-500 text-sm">
            <li><a href="{{ route('account.dashboard')}}" class="hover:text-gray-900">Dahsboard</a></li>
            <li>
                <x-icon-chevron-forward class="h-3 w-auto" />
            </li>
            <li>Notificaciones</li>
        </ul>

    </div>
    <div class="px-4">
        <ul class="bg-white rounded shadow p-4 md:px-12 text-sm">
            <li class="flex flex-col md:flex-row py-4 my-4 shadow-w1 p-4 ">
                <div class="flex-none w-full md:w-28 p-4">
                    <img class="w-20 h-20 object-cover rounded-full mx-auto"
                        src="//images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80" />
                </div>
                <div class="w-full md:flex-grow">
                    <div class="flex pb-2 justify-between border-b">
                        <div class="">
                            <div class="font-semibold text-lg">Nombre de Usuario</div>
                            <div class="text-sm">Fecha: 17/12/2020</div>
                        </div>
                        <div
                            class="flex flex-col lg:flex-row items-center justify-start mt-1 lg:mt-0 font-bold leading-6 text-xl mr-6">
                            <x-icon-star class="text-yellow-400 fill-current h-auto w-6 md:mr-2" />
                            {{ rand(1,4)}}.{{ rand(0,9)}}
                        </div>
                    </div>
                    <div class="py-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. In eaque, quae libero
                        aspernatur
                        officia
                        sint. A saepe quasi magni laborum accusamus. Commodi minima at quis ullam, autem
                        voluptates
                        perferendis? Ipsam blanditiis quisquam deserunt natus necessitatibus deleniti,
                        esse
                        aliquid,
                        harum
                        autem sunt dicta nemo culpa facere earum unde quaerat animi molestiae?
                    </div>
                </div>
            </li>
            <li class="flex flex-col md:flex-row py-4 my-4 shadow-w1 p-4 ">
                <div class="flex-none w-full md:w-28 p-4">
                    <img class="w-20 h-20 object-cover rounded-full mx-auto"
                        src="//images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80" />
                </div>
                <div class="w-full md:flex-grow">
                    <div class="flex pb-2 justify-between border-b">
                        <div class="">
                            <div class="font-semibold text-lg">Nombre de Usuario</div>
                            <div class="text-sm">Fecha: 17/12/2020</div>
                        </div>
                        <div
                            class="flex flex-col lg:flex-row items-center justify-start mt-1 lg:mt-0 font-bold leading-6 text-xl mr-6">
                            <x-icon-star class="text-yellow-400 fill-current h-auto w-6 md:mr-2" />
                            {{ rand(1,4)}}.{{ rand(0,9)}}
                        </div>
                    </div>
                    <div class="py-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. In eaque, quae libero
                        aspernatur
                        officia
                        sint. A saepe quasi magni laborum accusamus. Commodi minima at quis ullam, autem
                        voluptates
                        perferendis? Ipsam blanditiis quisquam deserunt natus necessitatibus deleniti,
                        esse
                        aliquid,
                        harum
                        autem sunt dicta nemo culpa facere earum unde quaerat animi molestiae?
                    </div>
                </div>
            </li>
            <li class="flex flex-col md:flex-row py-4 my-4 shadow-w1 p-4 ">
                <div class="flex-none w-full md:w-28 p-4">
                    <img class="w-20 h-20 object-cover rounded-full mx-auto"
                        src="//images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80" />
                </div>
                <div class="w-full md:flex-grow">
                    <div class="flex pb-2 justify-between border-b">
                        <div class="">
                            <div class="font-semibold text-lg">Nombre de Usuario</div>
                            <div class="text-sm">Fecha: 17/12/2020</div>
                        </div>
                        <div
                            class="flex flex-col lg:flex-row items-center justify-start mt-1 lg:mt-0 font-bold leading-6 text-xl mr-6">
                            <x-icon-star class="text-yellow-400 fill-current h-auto w-6 md:mr-2" />
                            {{ rand(1,4)}}.{{ rand(0,9)}}
                        </div>
                    </div>
                    <div class="py-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. In eaque, quae libero
                        aspernatur
                        officia
                        sint. A saepe quasi magni laborum accusamus. Commodi minima at quis ullam, autem
                        voluptates
                        perferendis? Ipsam blanditiis quisquam deserunt natus necessitatibus deleniti,
                        esse
                        aliquid,
                        harum
                        autem sunt dicta nemo culpa facere earum unde quaerat animi molestiae?
                    </div>
                </div>
            </li>
            <li class="flex flex-col md:flex-row py-4 my-4 shadow-w1 p-4 ">
                <div class="flex-none w-full md:w-28 p-4">
                    <img class="w-20 h-20 object-cover rounded-full mx-auto"
                        src="//images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80" />
                </div>
                <div class="w-full md:flex-grow">
                    <div class="flex pb-2 justify-between border-b">
                        <div class="">
                            <div class="font-semibold text-lg">Nombre de Usuario</div>
                            <div class="text-sm">Fecha: 17/12/2020</div>
                        </div>
                        <div
                            class="flex flex-col lg:flex-row items-center justify-start mt-1 lg:mt-0 font-bold leading-6 text-xl mr-6">
                            <x-icon-star class="text-yellow-400 fill-current h-auto w-6 md:mr-2" />
                            {{ rand(1,4)}}.{{ rand(0,9)}}
                        </div>
                    </div>
                    <div class="py-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. In eaque, quae libero
                        aspernatur
                        officia
                        sint. A saepe quasi magni laborum accusamus. Commodi minima at quis ullam, autem
                        voluptates
                        perferendis? Ipsam blanditiis quisquam deserunt natus necessitatibus deleniti,
                        esse
                        aliquid,
                        harum
                        autem sunt dicta nemo culpa facere earum unde quaerat animi molestiae?
                    </div>
                </div>
            </li>
        </ul>
    </div>
</x-admin-layout>
