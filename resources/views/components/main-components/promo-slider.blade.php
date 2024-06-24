<div>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <div class="relative w-full my-8">
        <div class="relative swiper multiple-slide-carousel swiper-container">
            <div class="mb-12 swiper-wrapper">
                <div class="swiper-slide">
                    <div class="flex items-center justify-center w-full bg-indigo-200 h-44 rounded-2xl">
                        <span class="text-2xl font-semibold text-indigo-600">Slide 1</span>
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
            <div class="hidden lg:block">
                <div class="absolute left-0 right-0 flex items-center justify-center m-auto w-fit -bottom-2 p-2">
                    <button id="slider-button-left"
                        class="swiper-button-prev  group !p-2  flex justify-center items-center  !w-10 !h-10 transition-all duration-300 rounded-full hover:bg-indigo-300 hover:bg-opacity-70 !-translate-x-16"
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
    </div>


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".multiple-slide-carousel", {
            loop: true, // Enable infinite loop
            slidesPerView: 3,
            spaceBetween: 20,
            autoplay: {
                delay: 2000, // 1 seconds for demo purposes; change as needed
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

                768: {
                    slidesPerView: 2,
                    spaceBetween: 8
                },

                320: {
                    slidesPerView: 1,
                    spaceBetween: 4
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

</div>
