@include('layouts.main')
@include('layouts.navigation_main')
@include('layouts.side_navigation')


<main class="h-auto p-8 pt-16 bg-white p dark:bg-gray-900 md:ml-64">

    <x-travel-img-slider></x-travel-img-slider>
    {{-- <x-banner-slider> </x-banner-slider> --}}

    <div class="mb-4">
        <div class="mb-12">
            <x-heading heading="Best Restaurant in Area" />

            <div class="grid items-center justify-center gap-4 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4">
                <x-hotel-card></x-hotel-card>
                <x-hotel-card></x-hotel-card>
                <x-hotel-card></x-hotel-card>
                <x-hotel-card></x-hotel-card>
            </div>
        </div>


        <div class="mb-12">
            <x-heading heading="Best of All Time" />

            <div class="grid items-center justify-center gap-4 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4">
                <x-hotel-card></x-hotel-card>
                <x-hotel-card></x-hotel-card>
                <x-hotel-card></x-hotel-card>
                <x-hotel-card></x-hotel-card>
            </div>
        </div>


        <div class="mb-12">
            <x-heading heading="Guest Favourite" />

            <div class="grid items-center justify-center gap-4 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4">
                <x-hotel-card></x-hotel-card>
                <x-hotel-card></x-hotel-card>
                <x-hotel-card></x-hotel-card>
                <x-hotel-card></x-hotel-card>
            </div>
        </div>
    </div>

    <!-- component -->
    <!-- This is an example component -->
    <div class="container mx-auto my-5 ">

        <div
            class="relative flex flex-col items-center my-4 border-2 border-black rounded-lg md:flex-row md:shadow-xl md:h-72">

            <div
                class="relative z-0 order-1 w-full overflow-hidden rounded-lg md:order-2 md:w-2/5 h-80 md:h-full md:rounded-none md:rounded-r-lg">
                <div class="absolute inset-0 object-fill object-center w-full h-full">
                    <img class="object-cover w-full h-full bg-blend-multiply"
                        src="https://images.unsplash.com/photo-1525302220185-c387a117886e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80"
                        alt="">
                </div>

                <div
                    class="absolute inset-0 flex flex-col-reverse items-start justify-start h-full p-6 pb-6 md:hidden bg-gradient-to-b from-transparent via-transparent to-gray-900">
                    <h3 class="w-full mb-2 text-2xl font-bold leading-tight text-white">HOTEL AMANEE</h3>
                    <h4 class="w-full text-xl leading-tight text-gray-100">Bienvenido a</h4>
                </div>
                <svg class="absolute inset-y-0 hidden w-24 h-full -ml-12 text-white fill-current md:block"
                    viewBox="0 0 100 100" preserveAspectRatio="none">
                    <polygon points="50,0 100,0 50,100 0,100" />
                </svg>
            </div>

            <div class="z-10 flex items-center order-2 w-full h-full -mt-6 md:order-1 md:w-3/5 md:mt-0">
                <div
                    class="h-full p-8 mx-2 bg-white rounded-lg shadow-xl md:pr-18 md:pl-14 md:py-12 md:mx-0 md:rounded-none md:rounded-l-lg md:shadow-none">
                    <h4 class="hidden text-xl text-gray-400 md:block">Bienvenido a</h4>
                    <h3 class="hidden text-2xl font-bold text-gray-700 md:block">HOTEL AMANEE</h3>
                    <p class="text-justify text-gray-600">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Ratione itaque perspiciatis quod sapiente quidem. Lorem ipsum dolor, sit amet consectetur
                        adipisicing elit. Quidem, et consequuntur!</p>
                    <a class="flex items-baseline mt-3 text-blue-600 hover:text-blue-900 focus:text-blue-900"
                        href="">
                        <span>Conocer más de Amanee</span>
                        <span class="ml-1 text-xs">&#x279c;</span>
                    </a>
                </div>
            </div>

        </div>

        <div
            class="relative flex flex-col items-center my-4 border-2 border-black rounded-lg md:flex-row md:shadow-xl md:h-72">

            <div class="z-10 flex items-center order-2 w-full h-full -mt-6 md:order-2 md:w-3/5 md:mt-0">
                <div
                    class="h-full p-8 mx-2 bg-white rounded-lg shadow-xl md:pr-18 md:pl-14 md:py-12 md:mx-0 md:rounded-none md:rounded-r-lg md:shadow-none">
                    <h4 class="hidden text-xl text-gray-400 md:block">Bienvenido a</h4>
                    <h3 class="hidden text-2xl font-bold text-gray-700 md:block">HOTEL AMANEE</h3>
                    <p class="text-justify text-gray-600">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Ratione itaque perspiciatis quod sapiente quidem.</p>
                    <a class="flex items-baseline mt-3 text-blue-600 hover:text-blue-900 focus:text-blue-900"
                        href="#">
                        <span>Conocer más de Amanee</span>
                        <span class="ml-1 text-xs">&#x279c;</span>
                    </a>
                </div>
            </div>

            <div
                class="relative z-0 order-1 w-full overflow-hidden rounded-lg md:order-1 md:w-2/5 h-80 md:h-full md:rounded-none md:rounded-l-lg md:shadow-none">
                <div
                    class="absolute inset-0 object-fill object-center w-full h-full bg-gray-200 bg-bottom bg-cover bg-opacity-30">

                    <img class="object-cover w-full h-full bg-blend-multiply"
                        src="https://images.unsplash.com/photo-1525302220185-c387a117886e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80"
                        alt="">


                </div>
                <div
                    class="absolute inset-0 flex flex-col-reverse items-start justify-start h-full p-6 pb-6 md:hidden bg-gradient-to-b from-transparent via-transparent to-gray-900">
                    <h3 class="w-full mb-2 text-2xl font-bold leading-tight text-white">HOTEL AMANEE</h3>
                    <h4 class="w-full text-xl leading-tight text-gray-100">Bienvenido a</h4>
                </div>
                <svg class="absolute inset-y-0 right-0 hidden w-24 h-full -mr-12 text-white fill-current md:block"
                    viewBox="0 0 100 100" preserveAspectRatio="none">
                    <polygon points="0,0 50,0 100,100 50,100" />
                </svg>


            </div>


        </div>

    </div>



</main>
