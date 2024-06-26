<x-layouts.user-layout>
    <div class="mt-20">
        <nav class="flex pb-4 border-b-2" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="#"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-3 h-3 mx-1 text-gray-400 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="#"
                            class="text-sm font-medium text-gray-700 ms-1 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Hotels</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="w-3 h-3 mx-1 text-gray-400 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="text-sm font-medium text-gray-500 ms-1 md:ms-2 dark:text-gray-400">ABC Hotel</span>
                    </div>
                </li>
            </ol>
        </nav>

        <div class="max-w-screen-xl mx-auto bg-white md:py-2 xl:py-4 dark:bg-gray-900">
            <x-hotel-title>{{ $hotel?->category?->name }}</x-hotel-title>

            <div class="justify-between border-b-2 lg:flex">

                <div class="px-8 md:mb-4">
                    <x-image-grid :images="$hotel->images" />

                    <!--Start - Hotel Name-->
                    <div class="max-w-md mx-auto mb-4 lg:max-w-none">
                        <h2 class="my-2 text-4xl font-bold tracking-tight text-gray-900 capitalize dark:text-white">
                            {{ $hotel->name }}
                        </h2>
                    </div>
                    <!--End - Hotel Name-->

                    <x-hotel-nav></x-hotel-nav>

                    <!--Start - Contact-->
                    <div class="flex items-center justify-center max-w-md mx-auto mb-4 bg-red-700 h-44 lg:max-w-none">
                        <h2 class="my-2 text-4xl font-bold tracking-tight text-gray-900 capitalize dark:text-white">
                            Contact Details
                        </h2>
                    </div>
                    <!--End - Contact-->
                </div>

                <div class="w-full px-2 mt-2 lg:max-w-sm lg:mt-0 shrink-0">
                    <div
                        class="p-4 border border-gray-200 rounded-lg sm:p-6 lg:p-8 bg-gray-50 dark:bg-gray-800 dark:border-gray-700">

                        <!--Start - Sample description-->
                        <h1 class="font-semibold text-gray-900 dark:text-white">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </h1>
                        <!--End - Sample description-->

                        <x-hotel-rating></x-hotel-rating>

                        <!--Start - Address and Charges-->
                        <div class="flex items-center gap-1 mt-4 ">
                            <svg class="w-5 h-5 text-purple-950 dark:text-purple-100" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M17.8 13.938h-.011a7 7 0 1 0-11.464.144h-.016l.14.171c.1.127.2.251.3.371L12 21l5.13-6.248c.194-.209.374-.429.54-.659l.13-.155Z" />
                            </svg>
                            <a href="#"
                                class="text-sm font-medium text-purple-700 dark:text-purple-50 hover:underline ">
                                Lorem, ipsum dolor sit rd, consectetur.
                            </a>
                        </div>

                        <div class="flex items-center justify-between gap-4 my-4 md:mt-6">
                            <span
                                class="flex items-start space-x-2 text-2xl font-extrabold text-primary sm:text-3xl dark:text-white">
                                <p>$1,249.99 </p>
                                <p class="text-sm font-semilight "> per night</p>
                            </span>

                            <span class="p-2 text-xs bg-purple-200 rounded-md">10% off</span>
                        </div>
                        <!--End - Address and Charges-->

                        <x-check-form></x-check-form>

                    </div>

                    <x-map-card></x-map-card>
                </div>
            </div>

            <div>
                <livewire:RoomReservation :hotelID="$hotel->id" />
            </div>

            <div class="mt-2">
                <livewire:comment-section :hotelID="$hotel->id" />
            </div>

            <div class="p-8 mt-5">
                <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4">
                    {{-- <x-hotel-card></x-hotel-card>
                    <x-hotel-card></x-hotel-card>
                    <x-hotel-card></x-hotel-card>
                    <x-hotel-card></x-hotel-card> --}}
                </div>
            </div>


            <x-main-components.side-img-slider />
        </div>


    </div>


</x-layouts.user-layout>
