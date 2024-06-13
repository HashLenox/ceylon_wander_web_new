<x-layouts.user-layout>
    <div class="mt-20 ">
        <x-travel-img-slider></x-travel-img-slider>


        {{-- <div class="container px-4 py-6 mx-auto mt-4">
            <ul class="grid items-start grid-cols-2 md:grid-cols-2 xl:grid-cols-2 gap-y-6 gap-x-4">

                <a href="#">
                    <li
                        class="relative flex flex-col items-start bg-red-500 rounded-lg sm:flex sm:flex-row xl:flex-row">

                        <div class="relative max-w-xs overflow-hidden bg-no-repeat bg-cover rounded-lg ">
                            <img src="https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?q=80&w=1948&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt=""
                                class="object-cover object-top overflow-hidden transition duration-1000 ease-in-out rounded-lg shadow-md w-52 h-52 hover:scale-110 sm:mb-0 xl:mb-0">

                            <svg class="absolute top-0 left-0 w-6 h-6 m-2 text-red-500"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M2.8 2L10 9.2l7.2-7.2L19 2.8 11.8 10 19 17.2l-1.8 1.8L10 10.8 2.8 19 1 17.2 8.2 10 1 2.8 2.8 2z" />
                            </svg>
                        </div>


                        <div class="flex-1 order-1 p-4 sm:ml-4 xl:ml-4 ">
                            <span class="block mb-4 font-semibold leading-6 text-indigo-800 text-md">Type</span>


                            <div class="flex items-center justify-between">

                                <h3 class="mb-1 text-xl font-bold text-slate-900">
                                    Place name
                                </h3>

                                <div class="flex items-center">
                                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <p class="text-sm font-bold text-gray-900 dark:text-white">4.6</p>

                                </div>

                            </div>
                            <div class="prose prose-md prose-slate text-slate-600">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, facilis.</p>
                            </div>

                            <div class="flex flex-row items-center justify-between py-3 ">
                                <span href="#"
                                    class="flex flex-row items-center py-1 mr-1 text-xs text-gray-900 font-regular">
                                    <svg height="13px" width="13px" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                        xml:space="preserve">
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

                    </li>
                </a>





            </ul>
        </div> --}}

        <div class="grid grid-cols-2 mt-6 lg:grid-cols-4 lg:gap-x-4 md:px-8 md:gap-x-8 md:grid-cols-3 gap-x-6 gap-y-4 ">
            <div class="items-center">
                <div class="relative items-center overflow-hidden bg-no-repeat bg-cover rounded-lg">
                    <img src="https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?q=80&w=1948&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt=""
                        class="object-cover object-top overflow-hidden transition duration-1000 ease-in-out rounded-lg shadow-md aspect-square hover:scale-110">
                    <span
                        class="absolute right-0 px-4 py-1 text-xs font-semibold text-white bg-green-500 top-2">Hiking</span>
                </div>


                <div class="items-center px-4 my-4 text-center text-gray-700 font-semilight" id="content">
                    <h1 class="text-2xl font-bold text-blue-900">ABC Mountains</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius
                        nihil porro odit. Lorem ipsum dolor sit amet.
                    </p>

                    <div class="flex flex-row items-center justify-between mx-8 my-1 text-xs text-blue-900 ">
                        <p><span class="font-semibold">1.6 </span> miles</p>
                        <p><span>4.6 </span> ratings</p>
                        <p>186 reviews</p>
                    </div>
                </div>
            </div>

            <div class="items-center">
                <div class="relative items-center overflow-hidden bg-no-repeat bg-cover rounded-lg">
                    <img src="https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?q=80&w=1948&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt=""
                        class="object-cover object-top overflow-hidden transition duration-1000 ease-in-out rounded-lg shadow-md aspect-square hover:scale-110">
                    <span
                        class="absolute right-0 px-4 py-1 text-xs font-semibold text-white bg-green-500 top-2">Hiking</span>
                </div>


                <div class="items-center px-4 my-4 text-center text-gray-700 font-semilight" id="content">
                    <h1 class="text-2xl font-bold text-blue-900">ABC Mountains</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius
                        nihil porro odit. Lorem ipsum dolor sit amet.
                    </p>

                    <div class="flex flex-row items-center justify-between mx-8 my-1 text-xs text-blue-900 ">
                        <p><span class="font-semibold">1.6 </span> miles</p>
                        <p><span>4.6 </span> ratings</p>
                        <p>186 reviews</p>
                    </div>
                </div>
            </div>

            <div class="items-center">
                <div class="relative items-center overflow-hidden bg-no-repeat bg-cover rounded-lg">
                    <img src="https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?q=80&w=1948&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt=""
                        class="object-cover object-top overflow-hidden transition duration-1000 ease-in-out rounded-lg shadow-md aspect-square hover:scale-110">
                    <span
                        class="absolute right-0 px-4 py-1 text-xs font-semibold text-white bg-green-500 top-2">Hiking</span>
                </div>


                <div class="items-center px-4 my-4 text-center text-gray-700 font-semilight" id="content">
                    <h1 class="text-2xl font-bold text-blue-900">ABC Mountains</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius
                        nihil porro odit. Lorem ipsum dolor sit amet.
                    </p>

                    <div class="flex flex-row items-center justify-between mx-8 my-1 text-xs text-blue-900 ">
                        <p><span class="font-semibold">1.6 </span> miles</p>
                        <p><span>4.6 </span> ratings</p>
                        <p>186 reviews</p>
                    </div>
                </div>
            </div>


            <div class="items-center">
                <div class="relative items-center overflow-hidden bg-no-repeat bg-cover rounded-lg">
                    <img src="https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?q=80&w=1948&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt=""
                        class="object-cover object-top overflow-hidden transition duration-1000 ease-in-out rounded-lg shadow-md aspect-square hover:scale-110">
                    <span
                        class="absolute right-0 px-4 py-1 text-xs font-semibold text-white bg-green-500 top-2">Hiking</span>
                </div>


                <div class="items-center px-4 my-4 text-center text-gray-700 font-semilight" id="content">
                    <h1 class="text-2xl font-bold text-blue-900">ABC Mountains</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius
                        nihil porro odit. Lorem ipsum dolor sit amet.
                    </p>

                    <div class="flex flex-row items-center justify-between mx-8 my-1 text-xs text-blue-900 ">
                        <p><span class="font-semibold">1.6 </span> miles</p>
                        <p><span>4.6 </span> ratings</p>
                        <p>186 reviews</p>
                    </div>
                </div>
            </div>
        </div>





        <div class="h-16 mt-20">
            hello
        </div>


    </div>





</x-layouts.user-layout>
