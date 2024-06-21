<x-layouts.user-layout>
    <link href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/keen-slider.min.css" rel="stylesheet" />
    <div class="mt-24">
        <div class="bg-gray-50">
            <div class="mx-auto max-w-[1340px] px-4 py-12 sm:px-6 lg:me-0 lg:py-16 lg:pe-0 lg:ps-8 xl:py-24">
                <div class="grid grid-cols-1 gap-8 lg:grid-cols-3 lg:items-center lg:gap-16">
                    <div class="max-w-xl sm:text-center lg:text-left ltr:sm:text-left rtl:sm:text-right">
                        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                            Explore the <span class="text-blue-500">All-time</span> Best!
                        </h2>

                        <p class="mt-4 text-gray-700">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas veritatis illo placeat
                            harum porro optio fugit a culpa sunt id!
                        </p>

                        <div class="hidden lg:mt-8 lg:flex lg:gap-4">
                            <button aria-label="Previous slide" id="keen-slider-previous-desktop"
                                class="p-3 text-blue-600 transition border border-blue-600 rounded-full hover:bg-blue-600 hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-5 rtl:rotate-180">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 19.5L8.25 12l7.5-7.5" />
                                </svg>
                            </button>

                            <button aria-label="Next slide" id="keen-slider-next-desktop"
                                class="p-3 text-blue-600 transition border border-blue-600 rounded-full hover:bg-blue-600 hover:text-white">
                                <svg class="size-5 rtl:rotate-180" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="-mx-6 lg:col-span-2 lg:mx-0">
                        <div id="keen-slider" class="keen-slider">
                            <x-sub-components.side-img-slider-card />
                            <x-sub-components.side-img-slider-card />
                            <x-sub-components.side-img-slider-card />
                            <x-sub-components.side-img-slider-card />
                            <x-sub-components.side-img-slider-card />
                            <x-sub-components.side-img-slider-card />
                            <x-sub-components.side-img-slider-card />
                            <x-sub-components.side-img-slider-card />
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center gap-4 mt-8 lg:hidden">
                <button aria-label="Previous slide" id="keen-slider-previous"
                    class="p-4 text-blue-600 transition border border-blue-600 rounded-full hover:bg-blue-600 hover:text-white">
                    <svg class="transform -rotate-180 size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                    </svg>
                </button>

                <button aria-label="Next slide" id="keen-slider-next"
                    class="p-4 text-blue-600 transition border border-blue-600 rounded-full hover:bg-blue-600 hover:text-white">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                    </svg>
                </button>
            </div>


            <script type="module">
                import KeenSlider from 'https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/+esm'

                const keenSlider = new KeenSlider(
                    '#keen-slider', {
                        loop: true,
                        slides: {
                            origin: 'center',
                            perView: 2.25,
                            spacing: 16,
                        },
                        breakpoints: {
                            '(min-width: 1024px)': {
                                slides: {
                                    origin: 'auto',
                                    perView: 2.5,
                                    spacing: 32,
                                },
                            },
                        },
                    },
                    []
                )

                const keenSliderPrevious = document.getElementById('keen-slider-previous')
                const keenSliderNext = document.getElementById('keen-slider-next')

                const keenSliderPreviousDesktop = document.getElementById('keen-slider-previous-desktop')
                const keenSliderNextDesktop = document.getElementById('keen-slider-next-desktop')

                keenSliderPrevious.addEventListener('click', () => keenSlider.prev())
                keenSliderNext.addEventListener('click', () => keenSlider.next())

                keenSliderPreviousDesktop.addEventListener('click', () => keenSlider.prev())
                keenSliderNextDesktop.addEventListener('click', () => keenSlider.next())
            </script>

        </div>

    </div>
</x-layouts.user-layout>
