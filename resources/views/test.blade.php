<link href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/keen-slider.min.css" rel="stylesheet" />


<x-layouts.user-layout>
    <form id="upload-form" class="p-4 md:p-5" method="POST" action="{{ route('addreview') }}" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-2 gap-4 mb-4">
            <!-- Star rating and description fields -->
            <div class="col-span-2">
                <div class="flex space-x-1">
                    <input type="hidden" name="rating" id="rating-input" value="">

                    <!-- Star SVGs for rating -->
                    @for ($i = 1; $i <= 5; $i++)
                        <svg aria-hidden="true" class="w-8 h-8 text-gray-400 star" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-value="{{ $i }}">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        Home
                        </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-3 h-3 mx-1 text-gray-400 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <a href="#"
                                    class="text-sm font-medium text-gray-700 ms-1 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Hotels</a>
                            </div>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="w-3 h-3 mx-1 text-gray-400 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="text-sm font-medium text-gray-500 ms-1 md:ms-2 dark:text-gray-400">ABC
                                    Hotel</span>
                            </div>
                        </li>
                        </ol>
                        </nav>

                        <div class="max-w-screen-xl mx-auto bg-white md:py-2 xl:py-4 dark:bg-gray-900">
                            <x-hotel-title>Name</x-hotel-title>

                            <x-travel-image-grid></x-travel-image-grid>

                            <div class="justify-between lg:flex ">
                                <div class="px-8 md:mb-4 ">

                                    <x-travel-name-card></x-travel-name-card>

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
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 22 20">
                                                    <path
                                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 22 20">
                                                    <path
                                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 22 20">
                                                    <path
                                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 22 20">
                                                    <path
                                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-gray-300 me-1 dark:text-gray-500"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 22 20">
                                                    <path
                                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                </svg>
                                                <p class="text-sm font-medium text-gray-500 ms-1 dark:text-gray-400">
                                                    4.95</p>
                                                <p class="text-sm font-medium text-gray-500 ms-1 dark:text-gray-400">out
                                                    of</p>
                                                <p class="text-sm font-medium text-gray-500 ms-1 dark:text-gray-400">5
                                                </p>
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
                                                    <span
                                                        class="text-sm font-medium text-gray-500 dark:text-gray-400">70%</span>
                                                </div>
                                                <div class="flex items-center mt-4">
                                                    <a href="#"
                                                        class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">4
                                                        star</a>
                                                    <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                                                        <div class="h-5 bg-yellow-300 rounded" style="width: 17%"></div>
                                                    </div>
                                                    <span
                                                        class="text-sm font-medium text-gray-500 dark:text-gray-400">17%</span>
                                                </div>
                                                <div class="flex items-center mt-4">
                                                    <a href="#"
                                                        class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">3
                                                        star</a>
                                                    <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                                                        <div class="h-5 bg-yellow-300 rounded" style="width: 8%">
                                                        </div>
                                                    </div>
                                                    <span
                                                        class="text-sm font-medium text-gray-500 dark:text-gray-400">8%</span>
                                                </div>
                                                <div class="flex items-center mt-4">
                                                    <a href="#"
                                                        class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">2
                                                        star</a>
                                                    <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                                                        <div class="h-5 bg-yellow-300 rounded" style="width: 4%">
                                                        </div>
                                                    </div>
                                                    <span
                                                        class="text-sm font-medium text-gray-500 dark:text-gray-400">4%</span>
                                                </div>
                                                <div class="flex items-center mt-4">
                                                    <a href="#"
                                                        class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">1
                                                        star</a>
                                                    <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                                                        <div class="h-5 bg-yellow-300 rounded" style="width: 1%">
                                                        </div>
                                                    </div>
                                                    <span
                                                        class="text-sm font-medium text-gray-500 dark:text-gray-400">1%</span>
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

                        <x-main-components.side-img-slider />



                </div>


            </div>

</x-layouts.user-layout>
