<link href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/keen-slider.min.css" rel="stylesheet" />


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
            <x-hotel-title>Name</x-hotel-title>



            <div class="justify-between lg:flex ">
                <div class="px-8 md:mb-4 ">

      

                    <x-hotel-nav></x-hotel-nav>
                </div>
                <div class="w-full px-2 mt-2 mr-6 lg:max-w-sm lg:mt-1 shrink-0">
                    <div
                        class="p-3 border border-gray-200 rounded-lg sm:p-6 lg:p-4 bg-gray-50 dark:bg-gray-800 dark:border-gray-700">

                        <!--Start - Sample description-->
                        <h1 class="font-semibold text-gray-900 dark:text-white">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </h1>

                        <!--Start - Ratings-->
                        <div>
                            <div class="flex items-center my-2">
                                <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-gray-300 me-1 dark:text-gray-500" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <p class="text-sm font-medium text-gray-500 ms-1 dark:text-gray-400">4.95</p>
                                <p class="text-sm font-medium text-gray-500 ms-1 dark:text-gray-400">out of</p>
                                <p class="text-sm font-medium text-gray-500 ms-1 dark:text-gray-400">5</p>
                            </div>
                            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">178+
                                <a href="#" class="underline">reviews</a>
                            </span>

                            <div
                                class="items-center justify-center hidden h-48 md:block sm:items-center md:items-center md:h-auto">
                                <div class="flex items-center mt-4">
                                    <a href="#"
                                        class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">5
                                        star</a>
                                    <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                                        <div class="h-5 bg-yellow-300 rounded" style="width: 70%"></div>
                                    </div>
                                    <span class="text-sm font-medium text-gray-500 dark:text-gray-400">70%</span>
                                </div>
                                <div class="flex items-center mt-4">
                                    <a href="#"
                                        class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">4
                                        star</a>
                                    <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                                        <div class="h-5 bg-yellow-300 rounded" style="width: 17%"></div>
                                    </div>
                                    <span class="text-sm font-medium text-gray-500 dark:text-gray-400">17%</span>
                                </div>
                                <div class="flex items-center mt-4">
                                    <a href="#"
                                        class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">3
                                        star</a>
                                    <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                                        <div class="h-5 bg-yellow-300 rounded" style="width: 8%"></div>
                                    </div>
                                    <span class="text-sm font-medium text-gray-500 dark:text-gray-400">8%</span>
                                </div>
                                <div class="flex items-center mt-4">
                                    <a href="#"
                                        class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">2
                                        star</a>
                                    <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                                        <div class="h-5 bg-yellow-300 rounded" style="width: 4%"></div>
                                    </div>
                                    <span class="text-sm font-medium text-gray-500 dark:text-gray-400">4%</span>
                                </div>
                                <div class="flex items-center mt-4">
                                    <a href="#"
                                        class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">1
                                        star</a>
                                    <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                                        <div class="h-5 bg-yellow-300 rounded" style="width: 1%"></div>
                                    </div>
                                    <span class="text-sm font-medium text-gray-500 dark:text-gray-400">1%</span>
                                </div>
                            </div>
                        </div>
                        <!--End - Ratings-->


                    </div>

                    <x-map-card></x-map-card>
                </div>
                <!--End - Side card-->
            </div>
        </div>

        {{-- <div class="my-4 bg-white border-t-2 border-gray-300">

            <ul class="grid items-start grid-cols-1 p-8 xl:grid-cols-3 gap-y-10 gap-x-6">
                <a href="#">
                    <li class="relative flex flex-col items-start sm:flex-row xl:flex-col">
                        <div class="flex-1 order-1 px-1 sm:ml-4 xl:ml-4 ">
                            <span class="block mb-4 font-semibold leading-6 text-indigo-800 text-md">Type</span>


                            <div class="flex items-center justify-between ">

                                <h3 class="mb-1 text-xl font-bold text-slate-900">
                                    Place name
                                </h3>

                                <div class="flex items-center">

                                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <p class="text-sm font-bold text-gray-900 ms-1 dark:text-white">4.6</p>

                                </div>

                            </div>
                            <div class="pblue pblue-md pblue-slate text-slate-600">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, facilis.</p>
                            </div>

                            <div class="flex flex-row items-center justify-between py-3 ">
                                <span href="#"
                                    class="flex flex-row items-center py-1 mr-1 text-xs text-gray-900 font-regular">
                                    <svg height="13px" width="13px" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" viewBox="0 0 512 512"
                                        style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path
                                                    d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256 c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128 c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="ml-1">6 miles away</span>
                                </span>

                                <span href="#"
                                    class="flex flex-row items-center py-1 mr-1 text-xs text-gray-900 font-regular">
                                    <svg class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                        </path>
                                    </svg>
                                    <span class="ml-1">74 Reviews</span>
                                </span>
                            </div>
                        </div>

                        <img src="https://tailwindcss.com/_next/static/media/heropatterns@75.82a09697.jpg"
                            alt=""
                            class="mb-6 shadow-md rounded-lg bg-slate-50 w-full sm:w-[17rem] sm:mb-0 xl:mb-6 xl:w-full"
                            width="1216" height="640">
                    </li>
                </a>
                <a href="#">
                    <li class="relative flex flex-col items-start sm:flex-row xl:flex-col">
                        <div class="flex-1 order-1 px-1 sm:ml-4 xl:ml-4 ">
                            <span class="block mb-4 font-semibold leading-6 text-indigo-800 text-md">Type</span>


                            <div class="flex items-center justify-between ">

                                <h3 class="mb-1 text-xl font-bold text-slate-900">
                                    Place name
                                </h3>

                                <div class="flex items-center">

                                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <p class="text-sm font-bold text-gray-900 ms-1 dark:text-white">4.6</p>

                                </div>

                            </div>
                            <div class="pblue pblue-md pblue-slate text-slate-600">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, facilis.</p>
                            </div>

                            <div class="flex flex-row items-center justify-between py-3 ">
                                <span href="#"
                                    class="flex flex-row items-center py-1 mr-1 text-xs text-gray-900 font-regular">
                                    <svg height="13px" width="13px" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" viewBox="0 0 512 512"
                                        style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path
                                                    d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256 c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128 c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="ml-1">6 miles away</span>
                                </span>

                                <span href="#"
                                    class="flex flex-row items-center py-1 mr-1 text-xs text-gray-900 font-regular">
                                    <svg class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                        </path>
                                    </svg>
                                    <span class="ml-1">74 Reviews</span>
                                </span>
                            </div>
                        </div>

                        <img src="https://tailwindcss.com/_next/static/media/heropatterns@75.82a09697.jpg"
                            alt=""
                            class="mb-6 shadow-md rounded-lg bg-slate-50 w-full sm:w-[17rem] sm:mb-0 xl:mb-6 xl:w-full"
                            width="1216" height="640">
                    </li>
                </a>
                <a href="#">
                    <li class="relative flex flex-col items-start sm:flex-row xl:flex-col">
                        <div class="flex-1 order-1 px-1 sm:ml-4 xl:ml-4 ">
                            <span class="block mb-4 font-semibold leading-6 text-indigo-800 text-md">Type</span>


                            <div class="flex items-center justify-between ">

                                <h3 class="mb-1 text-xl font-bold text-slate-900">
                                    Place name
                                </h3>

                                <div class="flex items-center">

                                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <p class="text-sm font-bold text-gray-900 ms-1 dark:text-white">4.6</p>

                                </div>

                            </div>
                            <div class="pblue pblue-md pblue-slate text-slate-600">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, facilis.</p>
                            </div>

                            <div class="flex flex-row items-center justify-between py-3 ">
                                <span href="#"
                                    class="flex flex-row items-center py-1 mr-1 text-xs text-gray-900 font-regular">
                                    <svg height="13px" width="13px" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" viewBox="0 0 512 512"
                                        style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path
                                                    d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256 c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128 c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="ml-1">6 miles away</span>
                                </span>

                                <span href="#"
                                    class="flex flex-row items-center py-1 mr-1 text-xs text-gray-900 font-regular">
                                    <svg class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                        </path>
                                    </svg>
                                    <span class="ml-1">74 Reviews</span>
                                </span>
                            </div>
                        </div>

                        <img src="https://tailwindcss.com/_next/static/media/heropatterns@75.82a09697.jpg"
                            alt=""
                            class="mb-6 shadow-md rounded-lg bg-slate-50 w-full sm:w-[17rem] sm:mb-0 xl:mb-6 xl:w-full"
                            width="1216" height="640">
                    </li>
                </a>

            </ul>
        </div> --}}

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
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="size-5 rtl:rotate-180">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                                </svg>
                            </button>

                            <button aria-label="Next slide" id="keen-slider-next-desktop"
                                class="p-3 text-blue-600 transition border border-blue-600 rounded-full hover:bg-blue-600 hover:text-white">
                                <svg class="size-5 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="-mx-6 lg:col-span-2 lg:mx-0">
                        <div id="keen-slider" class="keen-slider">
                            <div>
                                <a href="#">
                                    <div class="keen-slider__slide">
                                        <blockquote class="flex flex-col justify-between h-full p-2 bg-gray-200 shadow-sm rounded-xl sm:p-8 lg:p-2">
                                            <div>
                                                <div class="relative pt-[50%] sm:pt-[70%] rounded-xl overflow-hidden aspect-square">
                                                    <img class="absolute top-0 object-cover transition-transform duration-500 ease-in-out aspect-square start-0 group-hover:scale-105 rounded-xl"
                                                        src="https://plus.unsplash.com/premium_photo-1661676056771-f6c2711249e0?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        alt="Image Description">
                                                    <div class="absolute bottom-0 left-0 w-full p-2 bg-black bg-opacity-60 h-1/4">
                                                        <h1 class="text-xl font-bold text-white">Hotel ABC</h1>
                                                        <div class="flex items-center justify-between">
                                                            <div class="flex items-center justify-center gap-x-1">

                                                                <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                                    <path
                                                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                                </svg>
                                                                <h1 class="text-sm font-light text-white">
                                                                    4.6
                                                                </h1>
                                                            </div>
                                                            <h1 class="text-sm font-extrabold text-green-400">
                                                                $23000
                                                            </h1>
                                                        </div>
                                                    </div>
                                                    <span
                                                        class="absolute top-0 end-0 rounded-se-xl rounded-es-xl text-xs font-medium bg-gray-800 text-white py-1.5 px-3 dark:bg-neutral-900">
                                                        Sponsored
                                                    </span>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                </a>

                            </div>
                            <div>
                                <a href="#">
                                    <div class="keen-slider__slide">
                                        <blockquote class="flex flex-col justify-between h-full p-2 bg-gray-200 shadow-sm rounded-xl sm:p-8 lg:p-2">
                                            <div>
                                                <div class="relative pt-[50%] sm:pt-[70%] rounded-xl overflow-hidden aspect-square">
                                                    <img class="absolute top-0 object-cover transition-transform duration-500 ease-in-out aspect-square start-0 group-hover:scale-105 rounded-xl"
                                                        src="https://plus.unsplash.com/premium_photo-1661676056771-f6c2711249e0?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        alt="Image Description">
                                                    <div class="absolute bottom-0 left-0 w-full p-2 bg-black bg-opacity-60 h-1/4">
                                                        <h1 class="text-xl font-bold text-white">Hotel ABC</h1>
                                                        <div class="flex items-center justify-between">
                                                            <div class="flex items-center justify-center gap-x-1">

                                                                <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                                    <path
                                                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                                </svg>
                                                                <h1 class="text-sm font-light text-white">
                                                                    4.6
                                                                </h1>
                                                            </div>
                                                            <h1 class="text-sm font-extrabold text-green-400">
                                                                $23000
                                                            </h1>
                                                        </div>
                                                    </div>
                                                    <span
                                                        class="absolute top-0 end-0 rounded-se-xl rounded-es-xl text-xs font-medium bg-gray-800 text-white py-1.5 px-3 dark:bg-neutral-900">
                                                        Sponsored
                                                    </span>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                </a>

                            </div>
                            <div>
                                <a href="#">
                                    <div class="keen-slider__slide">
                                        <blockquote class="flex flex-col justify-between h-full p-2 bg-gray-200 shadow-sm rounded-xl sm:p-8 lg:p-2">
                                            <div>
                                                <div class="relative pt-[50%] sm:pt-[70%] rounded-xl overflow-hidden aspect-square">
                                                    <img class="absolute top-0 object-cover transition-transform duration-500 ease-in-out aspect-square start-0 group-hover:scale-105 rounded-xl"
                                                        src="https://plus.unsplash.com/premium_photo-1661676056771-f6c2711249e0?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        alt="Image Description">
                                                    <div class="absolute bottom-0 left-0 w-full p-2 bg-black bg-opacity-60 h-1/4">
                                                        <h1 class="text-xl font-bold text-white">Hotel ABC</h1>
                                                        <div class="flex items-center justify-between">
                                                            <div class="flex items-center justify-center gap-x-1">

                                                                <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                                    <path
                                                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                                </svg>
                                                                <h1 class="text-sm font-light text-white">
                                                                    4.6
                                                                </h1>
                                                            </div>
                                                            <h1 class="text-sm font-extrabold text-green-400">
                                                                $23000
                                                            </h1>
                                                        </div>
                                                    </div>
                                                    <span
                                                        class="absolute top-0 end-0 rounded-se-xl rounded-es-xl text-xs font-medium bg-gray-800 text-white py-1.5 px-3 dark:bg-neutral-900">
                                                        Sponsored
                                                    </span>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                </a>

                            </div>
                            <div>
                                <a href="#">
                                    <div class="keen-slider__slide">
                                        <blockquote class="flex flex-col justify-between h-full p-2 bg-gray-200 shadow-sm rounded-xl sm:p-8 lg:p-2">
                                            <div>
                                                <div class="relative pt-[50%] sm:pt-[70%] rounded-xl overflow-hidden aspect-square">
                                                    <img class="absolute top-0 object-cover transition-transform duration-500 ease-in-out aspect-square start-0 group-hover:scale-105 rounded-xl"
                                                        src="https://plus.unsplash.com/premium_photo-1661676056771-f6c2711249e0?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        alt="Image Description">
                                                    <div class="absolute bottom-0 left-0 w-full p-2 bg-black bg-opacity-60 h-1/4">
                                                        <h1 class="text-xl font-bold text-white">Hotel ABC</h1>
                                                        <div class="flex items-center justify-between">
                                                            <div class="flex items-center justify-center gap-x-1">

                                                                <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                                    <path
                                                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                                </svg>
                                                                <h1 class="text-sm font-light text-white">
                                                                    4.6
                                                                </h1>
                                                            </div>
                                                            <h1 class="text-sm font-extrabold text-green-400">
                                                                $23000
                                                            </h1>
                                                        </div>
                                                    </div>
                                                    <span
                                                        class="absolute top-0 end-0 rounded-se-xl rounded-es-xl text-xs font-medium bg-gray-800 text-white py-1.5 px-3 dark:bg-neutral-900">
                                                        Sponsored
                                                    </span>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                </a>

                            </div>
                            <div>
                                <a href="#">
                                    <div class="keen-slider__slide">
                                        <blockquote class="flex flex-col justify-between h-full p-2 bg-gray-200 shadow-sm rounded-xl sm:p-8 lg:p-2">
                                            <div>
                                                <div class="relative pt-[50%] sm:pt-[70%] rounded-xl overflow-hidden aspect-square">
                                                    <img class="absolute top-0 object-cover transition-transform duration-500 ease-in-out aspect-square start-0 group-hover:scale-105 rounded-xl"
                                                        src="https://plus.unsplash.com/premium_photo-1661676056771-f6c2711249e0?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        alt="Image Description">
                                                    <div class="absolute bottom-0 left-0 w-full p-2 bg-black bg-opacity-60 h-1/4">
                                                        <h1 class="text-xl font-bold text-white">Hotel ABC</h1>
                                                        <div class="flex items-center justify-between">
                                                            <div class="flex items-center justify-center gap-x-1">

                                                                <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                                    <path
                                                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                                </svg>
                                                                <h1 class="text-sm font-light text-white">
                                                                    4.6
                                                                </h1>
                                                            </div>
                                                            <h1 class="text-sm font-extrabold text-green-400">
                                                                $23000
                                                            </h1>
                                                        </div>
                                                    </div>
                                                    <span
                                                        class="absolute top-0 end-0 rounded-se-xl rounded-es-xl text-xs font-medium bg-gray-800 text-white py-1.5 px-3 dark:bg-neutral-900">
                                                        Sponsored
                                                    </span>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                </a>

                            </div>
                            <div>
                                <a href="#">
                                    <div class="keen-slider__slide">
                                        <blockquote class="flex flex-col justify-between h-full p-2 bg-gray-200 shadow-sm rounded-xl sm:p-8 lg:p-2">
                                            <div>
                                                <div class="relative pt-[50%] sm:pt-[70%] rounded-xl overflow-hidden aspect-square">
                                                    <img class="absolute top-0 object-cover transition-transform duration-500 ease-in-out aspect-square start-0 group-hover:scale-105 rounded-xl"
                                                        src="https://plus.unsplash.com/premium_photo-1661676056771-f6c2711249e0?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        alt="Image Description">
                                                    <div class="absolute bottom-0 left-0 w-full p-2 bg-black bg-opacity-60 h-1/4">
                                                        <h1 class="text-xl font-bold text-white">Hotel ABC</h1>
                                                        <div class="flex items-center justify-between">
                                                            <div class="flex items-center justify-center gap-x-1">

                                                                <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                                    <path
                                                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                                </svg>
                                                                <h1 class="text-sm font-light text-white">
                                                                    4.6
                                                                </h1>
                                                            </div>
                                                            <h1 class="text-sm font-extrabold text-green-400">
                                                                $23000
                                                            </h1>
                                                        </div>
                                                    </div>
                                                    <span
                                                        class="absolute top-0 end-0 rounded-se-xl rounded-es-xl text-xs font-medium bg-gray-800 text-white py-1.5 px-3 dark:bg-neutral-900">
                                                        Sponsored
                                                    </span>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                </a>

                            </div>
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


    </div>

</x-layouts.user-layout>
