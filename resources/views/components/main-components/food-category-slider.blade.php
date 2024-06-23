<div>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        .swiper-button-prev:after,
        .swiper-rtl .swiper-button-next:after {
            content: " " !important;
        }

        .swiper-button-next:after,
        .swiper-rtl .swiper-button-prev:after {
            content: " " !important;
        }


        .swiper-button-next,
        .swiper-button-prev {
            position: relative !important;
        }
    </style>
    <div class="relative flex items-center justify-between w-full px-4 mx-auto h- max-w-7xl sm:px-6 lg:px-8">
        <!-- Previous Button -->

        <button id="slider-button-left"
            class="swiper-button-prev group hover:text-white hidden lg:block p-2 top-[90%] group justify-center items-center border border-solid border-indigo-600 w-11 h-11 transition-all duration-500 rounded-full hover:bg-indigo-600"
            data-carousel-prev="">
            <span class="font-light group-hover:translate-x-[-2px] transition-transform duration-500 ">
                &#10094;
            </span>
        </button>



        <!-- Image -->
        <div class="flex items-center justify-center w-full h-full px-6">
            <div class="max-w-md mx-auto swiper mySwiper md:max-w-2xl lg:max-w-full">

                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <a href="#">
                            <div class="block">
                                <div class="relative border-4 border-yellow-300 rounded-full shadow-lg">
                                    <img src="{{ asset('assets\images\category\kottu.png') }}" alt="Kottu"
                                        class="object-cover p-2 mx-auto transition duration-500 rounded-full aspect-square hover:scale-110" />
                                </div>
                                <span
                                    class="block text-sm text-center text-gray-500 transition-all duration-500 ">Kottu</span>
                            </div>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#">
                            <div class="block">
                                <div class="relative border-4 border-yellow-300 rounded-full shadow-lg">
                                    <img src="{{ asset('assets\images\category\rice.jpeg') }}" alt="Rice"
                                        class="object-cover p-2 mx-auto transition duration-500 rounded-full aspect-square hover:scale-110" />
                                </div>
                                <span
                                    class="block text-sm text-center text-gray-500 transition-all duration-500 ">Rice</span>
                            </div>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#">
                            <div class="block">
                                <div class="relative border-4 border-yellow-300 rounded-full shadow-lg">
                                    <img src="{{ asset('assets\images\category\Pizza.png') }}" alt="Pizza"
                                        class="object-cover p-2 mx-auto transition duration-500 rounded-full hover:scale-110 aspect-square" />
                                </div>
                                <span
                                    class="block text-sm text-center text-gray-500 transition-all duration-500 ">Pizza</span>
                            </div>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#">
                            <div class="block">
                                <div class="relative border-4 border-yellow-300 rounded-full shadow-lg">
                                    <img src="{{ asset('assets\images\category\Burgers.png') }}" alt="Burgers"
                                        class="object-cover p-2 mx-auto transition duration-500 rounded-full hover:scale-110 aspect-square" />
                                </div>
                                <span
                                    class="block text-sm text-center text-gray-500 transition-all duration-500 ">Burger</span>
                            </div>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#">
                            <div class="block">
                                <div class="relative border-4 border-yellow-300 rounded-full shadow-lg">
                                    <img src="{{ asset('assets\images\category\Chinese.png') }}" alt="Chinese Food"
                                        class="object-cover p-2 mx-auto transition duration-500 rounded-full hover:scale-110 aspect-square" />
                                </div>
                                <span
                                    class="block text-sm text-center text-gray-500 transition-all duration-500 ">Chinese</span>
                            </div>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#">
                            <div class="block">
                                <div class="relative border-4 border-yellow-300 rounded-full shadow-lg">
                                    <img src="{{ asset('assets\images\category\Dessert.png') }}" alt="Dessert"
                                        class="object-cover p-2 mx-auto transition duration-500 rounded-full hover:scale-110 aspect-square" />
                                </div>
                                <span
                                    class="block text-sm text-center text-gray-500 transition-all duration-500 ">Dessert</span>
                            </div>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#">
                            <div class="block">
                                <div class="relative border-4 border-yellow-300 rounded-full shadow-lg">
                                    <img src="{{ asset('assets\images\category\Indian.png') }}" alt="Indian Food"
                                        class="object-cover p-2 mx-auto transition duration-500 rounded-full hover:scale-110 aspect-square" />
                                </div>
                                <span
                                    class="block text-sm text-center text-gray-500 transition-all duration-500 ">Indian</span>
                            </div>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#">
                            <div class="block">
                                <div class="relative border-4 border-yellow-300 rounded-full shadow-lg">
                                    <img src="{{ asset('assets\images\category\juice.png') }}" alt="Juice"
                                        class="object-cover p-2 mx-auto transition duration-500 rounded-full hover:scale-110 aspect-square" />
                                </div>
                                <span
                                    class="block text-sm text-center text-gray-500 transition-all duration-500 ">Juice</span>
                            </div>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#">
                            <div class="block">
                                <div class="relative border-4 border-yellow-300 rounded-full shadow-lg">
                                    <img src="{{ asset('assets\images\category\Korean.png') }}" alt="Korean Food"
                                        class="object-cover p-2 mx-auto transition duration-500 rounded-full hover:scale-110 aspect-square" />
                                </div>
                                <span
                                    class="block text-sm text-center text-gray-500 transition-all duration-500 ">Korean</span>
                            </div>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#">
                            <div class="block">
                                <div class="relative border-4 border-yellow-300 rounded-full shadow-lg">
                                    <img src="{{ asset('assets\images\category\Seafood.png') }}" alt="Seafood"
                                        class="object-cover p-2 mx-auto transition duration-500 rounded-full hover:scale-110 aspect-square" />
                                </div>
                                <span
                                    class="block text-sm text-center text-gray-500 transition-all duration-500 ">Seafood</span>
                            </div>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#">
                            <div class="block">
                                <div class="relative border-4 border-yellow-300 rounded-full shadow-lg">
                                    <img src="{{ asset('assets\images\category\FastFood.png') }}" alt="Fast Food"
                                        class="object-cover p-2 mx-auto transition duration-500 rounded-full hover:scale-110 aspect-square" />
                                </div>
                                <span class="block text-sm text-center text-gray-500 transition-all duration-500 ">Fast
                                    Food</span>
                            </div>
                        </a>
                    </div>

                </div>

            </div>
        </div>
        <!-- Next Button -->

        <button id="slider-button-right"
            class="swiper-button-next group hover:text-white hidden lg:block p-2 top-[90%] group justify-center items-center border border-solid border-indigo-600 w-11 h-11 transition-all duration-500 rounded-full hover:bg-indigo-600"
            data-carousel-next="">
            <span class="font-light group-hover:translate-x-[2px] transition-transform duration-500">&#10095;</span>
        </button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 32,
            slidesPerView: 2,

            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                320: {
                    slidesPerView: 5,
                    spaceBetween: 16,
                },
                768: {
                    slidesPerView: 8,
                    spaceBetween: 32,
                },
                1024: {
                    slidesPerView: 10,
                    spaceBetween: 32,
                },
            },
        });
    </script>
</div>
