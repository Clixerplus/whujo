<x-main-layout>
    <div class="relative h-screen" x-data="handlerOption">
        <img src="{{ asset('images/bg/section-bg-experience-cta.jpeg') }}" alt="multi-experiences collage"
            class="absolute inset-0 object-cover w-full h-full" />
        <div class="absolute inset-0 bg-opacity-75 bg-secondary ">
                <style>
                    .nav-link {
                        font-weight: 600;
                        color: rgb(175, 175, 175);
                        height: 100%;
                        line-height: 100%;
                        text-align: center;
                    }


                    .nav-link:hover,
                    .nav-link.active {
                        color: red;
                        transition: color .3s;
                    }

                    .nav-link:after {
                        content: "";
                        display: block;
                        border: 1px solid transparent;
                        width: 33%;
                        margin: 0 auto;
                        margin-top: 4px;
                    }

                    .nav-link.active:after {
                        background-color: red;
                    }

                    .blur_effect {
                        background: rgba(0, 0, 0, 0.8);
                        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
                        backdrop-filter: blur(5px);
                        -webkit-backdrop-filter: blur(5px);
                        border-radius: 10px;
                        border: 1px solid rgba(255, 255, 255, 0.1);
                    }

                </style>


            <div class="p-2">
                <div class="flex flex-col items-center justify-center max-w-6xl p-4 mx-auto mt-2 md:mt-20 md:p-8 blur_effect">

                    {{-- <h1 x-text="title" class="max-w-lg mt-8 text-3xl font-bold leading-tight text-white md:text-center md:text-5xl"></h1> --}}
                    {{-- <ul class="flex justify-center w-full h-full mt-12 gap-x-8">
                        <li @click="active = 0" :class="activate(0)" class="cursor-pointer nav-link">
                            Services</li>

                        <li @click="active = 1" :class="activate(1)" class="cursor-pointer nav-link">
                            Experiences</li>

                        <li @click="active = 2" :class="activate(2)" class="cursor-pointer nav-link">
                            Share a moment</li>

                    </ul> --}}
                    <livewire:search-product-form />
                </div>
            </div>
        </div>
    </div>
    <script>
        const handlerOption = () => {
            return {
                active: 0,
                title: '',
                titles: [
                    "Encuentra la ayuda que necesites",
                    "Descubre un mundo de cosas nuevas",
                    "Comparte y disfruta valiosos momentos"
                ],
                init() {
                    this.title = this.titles[this.active]
                },
                activate(opt) {
                    this.title = this.titles[this.active]
                    return this.active == opt && 'active';
                }
            }
        }
    </script>
</x-main-layout>
