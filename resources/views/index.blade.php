<x-app-nonav-layout>
    <x-navbar />

    <div class="relative h-auto max-w-screen">
        <img src="https://images.pexels.com/photos/3184419/pexels-photo-3184419.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
            class="absolute inset-0 object-cover w-full h-full" alt="" />

        <div class="relative bg-secondary bg-opacity-75 w-full h-full overflow-x-hidden">
            <div class="px-4 py-24 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:pt-36">
                <div class="max-w-2xl mx-auto sm:max-w-xl md:max-w-4xl">
                    <div class="text-center pt-4">

                        <div class="max-w-xl mb-10 md:mx-auto text-left md:text-center lg:max-w-2xl md:mb-12">
                            <h2 class="max-w-full mb-6 font-sans text-4xl font-bold text-white sm:text-5xl md:mx-auto">
                                <span class="relative inline-block">
                                    <svg viewBox="0 0 52 24" fill="currentColor"
                                        class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-deep-purple-accent-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                                        <defs>
                                            <pattern id="700c93bf-0068-4e32-aafe-ef5b6a647708" x="0" y="0" width=".135"
                                                height=".30">
                                                <circle cx="1" cy="1" r=".7"></circle>
                                            </pattern>
                                        </defs>
                                        <rect fill="url(#700c93bf-0068-4e32-aafe-ef5b6a647708)" width="52" height="24">
                                        </rect>
                                    </svg>
                                    <span class="relative">Un Modo</span>
                                </span>
                                <span
                                    class="block w-full text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-primary lg:inline">
                                    Seguro y Rápido</span>
                                de encontrar soluciones.
                            </h2>

                            <p class="text-base text-gray-200 md:text-lg">
                                Servicios, experiencias y actividades, hechas por gente como tú!!
                            </p>
                        </div>

                        <form method="get" action="/search"
                            class="flex flex-col md:flex-row items-center w-full mb-8 justify-center md:rounded-full md:px-2 py-2 md:bg-white text-lg">
                            <div class="w-full md:flex-1 md:border-r mb-2 md:mb-0">
                                <input name="search" placeholder="Que estas buscando?"
                                    class="w-full p-4 md:py-2 rounded-sm md:rounded-full text-gray-600 placeholder-gray-600" />
                            </div>

                            <div class="w-full md:flex-1 md:border-r mb-2 md:mb-0">
                                <input name="location" placeholder="Ubicación"
                                    class="w-full p-4 md:py-2 rounded-sm md:rounded-full text-gray-600 placeholder-gray-600" />
                            </div>

                            <div class="w-full md:flex-1 mb-2 md:mb-0">
                                <select
                                    class=" appearance-none w-full p-4 md:py-2 rounded-sm md:rounded-full text-gray-600 ">
                                    <option disabled selected>Elige una categoría</option>
                                    @foreach (App\Models\Category::all() as $category)
                                    <option value="{{$category->id}}" class=" text-secondary">{{$category->name}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="self-start md:self-center mb-2 md:mb-0 ">
                                <button type="submit"
                                    class="mt-4 md:mt-0 md:ml-2 py-2 md:py-2 px-8 bg-primary font-bold text-white rounded-full">Buscar</button>
                            </div>

                        </form>

                        <p class="max-w-md text-left md:text-center md:mx-auto mb-4 text-lg text-white font-semibold">
                            O escoge una categoría:
                        </p>
                        <div class="flex flex-wrap md:justify-center mb-10 md:mb-16">
                            <a href="#"
                                class="flex rounded-full  text-white leading-7 bg-gray-300 text-sm bg-opacity-30 py-1 px-4 mr-2 mb-3">
                                <x-icon-search class="w-4 h-auto text-gray-100 fill-current mr-2" />
                                Life-style
                            </a>
                            <a href="#"
                                class="flex rounded-full  text-white leading-7 bg-gray-300 text-sm bg-opacity-30 py-1 px-4 mr-2 mb-3">
                                <x-icon-search class="w-4 h-auto text-gray-100 fill-current mr-2" />
                                Life-style
                            </a>
                            <a href="#"
                                class="flex rounded-full  text-white leading-7 bg-gray-300 text-sm bg-opacity-30 py-1 px-4 mr-2 mb-3">
                                <x-icon-search class="w-4 h-auto text-gray-100 fill-current mr-2" />
                                Life-style
                            </a>
                            <a href="#"
                                class="flex rounded-full  text-white leading-7 bg-gray-300 text-sm bg-opacity-30 py-1 px-4 mr-2 mb-3">
                                <x-icon-search class="w-4 h-auto text-gray-100 fill-current mr-2" />
                                Life-style
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-16"
            style="height: 80px; transform: translateZ(0px);">
            <svg class="absolute bottom-0 overflow-hidden bg-transparent fill-current"
                xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0"
                y="0">
                <polygon class="text-gray-50 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>
    <section class="relative py-20 max-w-screen bg-gray-50 -mt-0.5">
        <div class="container mx-auto px-4 ">
            <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                <div class="flex flex-col mb-6 lg:justify-between lg:flex-row md:mb-8">
                    <h2 class="max-w-lg mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-5 md:mb-6 group">
                        <span class="inline-block mb-1 sm:mb-4">
                            Los mejores profesionales <br class="hidden md:block" />
                            todos a tu disposición
                        </span>
                        <div class="h-1 ml-auto duration-300 origin-left transform bg-primary rounded-full scale-x-30 group-hover:scale-x-100"></div>
                    </h2>
                    <p class="text-gray-700 lg:text-sm lg:max-w-md">
                        "Sed ut perspiciatis unde omnis iste natus error sit iste voluptatem accusantium doloremque rem aperiam, ipsa eaque quae. Sed ut perspiciatis unde omnis iste."
                    </p>
                </div>
                <div class="w-full mb-8">

                    @php
                        $model = DB::table('experiences')->where('user_id','>', 1)->get();
                    @endphp

                    <x-embla-carousel :model="$model"/>

                </div>

            </div>
        </div>
    </section>
    <section class="pt-20 pb-48 max-w-screen">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-center text-center mb-24">
                <div class="w-full lg:w-6/12 px-4">
                    <h2 class="text-4xl font-semibold">Here are our heroes</h2>
                    <p class="text-lg leading-relaxed m-4 text-gray-600">
                        According to the National Oceanic and Atmospheric
                        Administration, Ted, Scambos, NSIDClead scentist, puts the
                        potentially record maximum.
                    </p>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                    <div class="px-6">
                        <img alt="..." src="./assets/img/team-1-800x800.jpg"
                            class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px;" />
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold">Ryan Tompson</h5>
                            <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                Web Developer
                            </p>
                            <div class="mt-6">
                                <button
                                    class="bg-blue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                    type="button">
                                    <i class="fab fa-twitter"></i></button><button
                                    class="bg-blue-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                    type="button">
                                    <i class="fab fa-facebook-f"></i></button><button
                                    class="bg-pink-500 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                    type="button">
                                    <i class="fab fa-dribbble"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                    <div class="px-6">
                        <img alt="..." src="./assets/img/team-2-800x800.jpg"
                            class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px;" />
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold">Romina Hadid</h5>
                            <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                Marketing Specialist
                            </p>
                            <div class="mt-6">
                                <button
                                    class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                    type="button">
                                    <i class="fab fa-google"></i></button><button
                                    class="bg-blue-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                    type="button">
                                    <i class="fab fa-facebook-f"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                    <div class="px-6">
                        <img alt="..." src="./assets/img/team-3-800x800.jpg"
                            class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px;" />
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold">Alexa Smith</h5>
                            <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                UI/UX Designer
                            </p>
                            <div class="mt-6">
                                <button
                                    class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                    type="button">
                                    <i class="fab fa-google"></i></button><button
                                    class="bg-blue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                    type="button">
                                    <i class="fab fa-twitter"></i></button><button
                                    class="bg-gray-800 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                    type="button">
                                    <i class="fab fa-instagram"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                    <div class="px-6">
                        <img alt="..." src="./assets/img/team-4-470x470.png"
                            class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px;" />
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold">Jenna Kardi</h5>
                            <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                Founder and CEO
                            </p>
                            <div class="mt-6">
                                <button
                                    class="bg-pink-500 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                    type="button">
                                    <i class="fab fa-dribbble"></i></button><button
                                    class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                    type="button">
                                    <i class="fab fa-google"></i></button><button
                                    class="bg-blue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                    type="button">
                                    <i class="fab fa-twitter"></i></button><button
                                    class="bg-gray-800 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                                    type="button">
                                    <i class="fab fa-instagram"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pb-20 relative block bg-gray-900 max-w-screen">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
            style="height: 80px; transform: translateZ(0px);">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-gray-900 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <div class="container mx-auto px-4 lg:pt-24 lg:pb-64">
            <div class="flex flex-wrap text-center justify-center">
                <div class="w-full lg:w-6/12 px-4">
                    <h2 class="text-4xl font-semibold text-white">Build something</h2>
                    <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                        Put the potentially record low maximum sea ice extent tihs year
                        down to low ice. According to the National Oceanic and
                        Atmospheric Administration, Ted, Scambos.
                    </p>
                </div>
            </div>
            <div class="flex flex-wrap mt-12 justify-center">
                <div class="w-full lg:w-3/12 px-4 text-center">
                    <div
                        class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                        <i class="fas fa-medal text-xl"></i>
                    </div>
                    <h6 class="text-xl mt-5 font-semibold text-white">
                        Excelent Services
                    </h6>
                    <p class="mt-2 mb-4 text-gray-500">
                        Some quick example text to build on the card title and make up
                        the bulk of the card's content.
                    </p>
                </div>
                <div class="w-full lg:w-3/12 px-4 text-center">
                    <div
                        class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                        <i class="fas fa-poll text-xl"></i>
                    </div>
                    <h5 class="text-xl mt-5 font-semibold text-white">
                        Grow your market
                    </h5>
                    <p class="mt-2 mb-4 text-gray-500">
                        Some quick example text to build on the card title and make up
                        the bulk of the card's content.
                    </p>
                </div>
                <div class="w-full lg:w-3/12 px-4 text-center">
                    <div
                        class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                        <i class="fas fa-lightbulb text-xl"></i>
                    </div>
                    <h5 class="text-xl mt-5 font-semibold text-white">Launch time</h5>
                    <p class="mt-2 mb-4 text-gray-500">
                        Some quick example text to build on the card title and make up
                        the bulk of the card's content.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="relative block py-24 lg:pt-0 bg-gray-900 max-w-screen">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">
                <div class="w-full lg:w-6/12 px-4">
                    <div
                        class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300">
                        <div class="flex-auto p-5 lg:p-10">
                            <h4 class="text-2xl font-semibold">Want to work with us?</h4>
                            <p class="leading-relaxed mt-1 mb-4 text-gray-600">
                                Complete this form and we will get back to you in 24 hours.
                            </p>
                            <div class="relative w-full mb-3 mt-8">
                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="full-name">Full
                                    Name</label><input type="text"
                                    class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                    placeholder="Full Name" style="transition: all 0.15s ease 0s;" />
                            </div>
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                    for="email">Email</label><input type="email"
                                    class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                    placeholder="Email" style="transition: all 0.15s ease 0s;" />
                            </div>
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                    for="message">Message</label><textarea rows="4" cols="80"
                                    class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                    placeholder="Type a message..."></textarea>
                            </div>
                            <div class="text-center mt-6">
                                <button
                                    class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                                    type="button" style="transition: all 0.15s ease 0s;">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-nonav-layout>
