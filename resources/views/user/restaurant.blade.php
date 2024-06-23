<x-layouts.user-layout>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


    <div class="mt-20">

        <div class="px-8 py-2 -ml-12">
            <x-main-components.food-category-slider />
        </div>

        <!--HTML CODE-->
        <div class="relative w-full my-8">
            <div class="relative swiper multiple-slide-carousel swiper-container">
                <div class="mb-12 swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center w-full bg-indigo-200 h-44 rounded-2xl">
                            <span class="text-2xl font-semibold text-indigo-600">
                                <img src="" alt="">
                            </span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center w-full bg-indigo-200 h-44 rounded-2xl">
                            <span class="text-2xl font-semibold text-indigo-600">Slide 2</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center w-full bg-indigo-200 h-44 rounded-2xl">
                            <span class="text-2xl font-semibold text-indigo-600">Slide 3</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center w-full bg-indigo-200 h-44 rounded-2xl">
                            <span class="text-2xl font-semibold text-indigo-600">Slide 4</span>
                        </div>
                    </div>
                </div>
                <div class="absolute left-0 right-0 flex items-center justify-center m-auto w-fit -bottom-2 p-2">
                    <button id="slider-button-left"
                        class="swiper-button-prev group !p-2  flex justify-center items-center  !w-10 !h-10 transition-all duration-300 rounded-full hover:bg-indigo-300 hover:bg-opacity-70 !-translate-x-16"
                        data-carousel-prev>
                        <svg class="w-5 h-5 text-indigo-600 group-hover:text-blue-900"
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                            fill="none">
                            <path d="M10.0002 11.9999L6 7.99971L10.0025 3.99719" stroke="currentColor"
                                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <button id="slider-button-right"
                        class="swiper-button-next group !p-2 flex justify-center  items-center  !w-10 !h-10 transition-all duration-300 rounded-full hover:bg-indigo-300 hover:bg-opacity-70 !translate-x-16"
                        data-carousel-next>
                        <svg class="w-5 h-5 text-indigo-600 group-hover:text-blue-900"
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                            fill="none">
                            <path d="M5.99984 4.00012L10 8.00029L5.99748 12.0028" stroke="currentColor"
                                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div>
            <x-header>Best Resturent in Area</x-header>
        </div>

        <div class="mt-5">
            <div class="grid items-center justify-center gap-6 sm:grid-cols-2 md:grid-cols-2 xl:grid-cols-4">
                @forelse ($locations as $location)
                    <x-hotel-card :location="$location" />
                @empty
                    <div
                        class="flex items-center justify-center col-span-4 border-2 border-gray-700 border-dashed bg-primary-100 dark:bg-gray-700 rounded-xl dark:border-gray-500">
                        <div class="text-center">
                            <p class="py-16 text-gray-800 dark:text-white ">No resturent found to your criteria</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>

    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".multiple-slide-carousel", {
            loop: true, // Enable infinite loop
            slidesPerView: 3,
            spaceBetween: 20,
            autoplay: {
                delay: 1000, // 1 seconds for demo purposes; change as needed
            },
            navigation: {
                nextEl: ".multiple-slide-carousel .swiper-button-next",
                prevEl: ".multiple-slide-carousel .swiper-button-prev",
            },
            breakpoints: {
                1920: {
                    slidesPerView: 3,
                    spaceBetween: 30
                },
                1028: {
                    slidesPerView: 3,
                    spaceBetween: 16
                },
                990: {
                    slidesPerView: 2,
                    spaceBetween: 8
                },
                528: {
                    slidesPerView: 1,
                    spaceBetween: 0
                },

                320: {
                    slidesPerView: 1,
                    spaceBetween: 0
                }
            }
        });

        // Stop autoplay on hover
        document.querySelector('.multiple-slide-carousel').addEventListener('mouseenter', function() {
            swiper.autoplay.stop();
        });

        // Start autoplay on mouse leave
        document.querySelector('.multiple-slide-carousel').addEventListener('mouseleave', function() {
            swiper.autoplay.start();
        });
    </script>



</x-layouts.user-layout>
