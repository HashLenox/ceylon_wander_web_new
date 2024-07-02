<x-layouts.user-layout>
    <div class="mt-20 ">
        <x-travel-img-slider></x-travel-img-slider>

        <div class="max-w-screen-xl px-6 pt-8 pb-4 mx-auto mt-4 sm:mt-2">
            <x-card-list-header></x-card-list-header>

            <div class="flex flex-col flex-wrap px-2 md:flex-row md:-mx-4">
                @forelse ($locations as $location)
                    <x-travel-card :location="$location" />
                @empty

                    <div
                        class="flex items-center justify-center col-span-4 border-2 border-gray-700 border-dashed bg-primary-100 dark:bg-gray-700 rounded-xl dark:border-gray-500">
                        <div class="text-center">
                            <p class="py-16 text-gray-800 dark:text-white ">No records found to your criteria</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>


        {{-- <div class="max-w-screen-xl px-6 pt-8 pb-4 mx-auto mt-4 sm:mt-2">
            <x-card-list-header></x-card-list-header>

            <div class="flex flex-col flex-wrap px-2 md:flex-row md:-mx-4">
                <x-travel-card></x-travel-card>
                <x-travel-card></x-travel-card>
                <x-travel-card></x-travel-card>
                <x-travel-card></x-travel-card>
            </div>
        </div> --}}

        <x-travel-banner></x-travel-banner>


        <div class="max-w-full px-4 py-10 mx-auto my-2 rounded-lg sm:px-6 lg:px-8 lg:py-14 dark:border">



            <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <div class="items-center max-w-2xl mx-auto mb-10 lg:mb-14">
                    <h2 class="text-2xl font-bold md:text-md md:leading-tight dark:text-white">Browse locations by
                        Most-Popular Cities</h2>

                </div>

                <div class="grid gap-6 sm:grid-cols-3 lg:grid-cols-5">

                    <x-city-card></x-city-card>
                    <x-city-card></x-city-card>
                    <x-city-card></x-city-card>
                    <x-city-card></x-city-card>
                    <x-city-card></x-city-card>


                </div>

            </div>





            <x-travel-feature-card></x-travel-feature-card>

            <div class="items-center justify-center p-8 mb-8 bg-red-400 h-7">
                <h1 class="text-center">Multi card slider goes here</h1>
            </div>

            <!-- Hero -->
            <div class="relative overflow-hidden">
                <!-- Gradients -->
                <div aria-hidden="true" class="absolute flex transform -translate-x-1/2 -top-96 start-1/2">
                    <div
                        class="bg-gradient-to-r from-violet-300/50 to-purple-100 blur-3xl w-[25rem] h-[44rem] rotate-[-60deg] transform -translate-x-[10rem] dark:from-violet-900/50 dark:to-purple-900">
                    </div>
                    <div
                        class="bg-gradient-to-tl from-blue-50 via-blue-100 to-blue-50 blur-3xl w-[90rem] h-[50rem] rounded-fulls origin-top-left -rotate-12 -translate-x-[15rem] dark:from-indigo-900/70 dark:via-indigo-900/70 dark:to-blue-900/70">
                    </div>
                </div>
                <!-- End Gradients -->

                <div class="relative z-10">
                    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">
                        <div class="max-w-2xl mx-auto text-center">
                            <!-- Title -->
                            <div class="max-w-2xl mt-5">
                                <h1
                                    class="block text-4xl font-semibold text-gray-800 md:text-5xl lg:text-6xl dark:text-neutral-200">
                                    Do we <span class="text-blue-600">missing</span> a place <span
                                        class="text-blue-600">?</span>
                                </h1>
                            </div>
                            <!-- End Title -->

                            <div class="max-w-3xl mt-5">
                                <p class="text-lg text-gray-600 dark:text-neutral-400">Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Aut nostrum mollitia reprehenderit? Ea, architecto
                                    eaque.
                                </p>
                            </div>

                            <!-- Buttons -->
                            <div class="mt-4">
                                <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                                    class="inline-flex items-center px-4 py-3 text-sm font-semibold text-white bg-blue-600 border border-transparent rounded-lg gap-x-2 hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                    Add a place
                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </button>

                            </div>
                            <!-- End Buttons -->
                        </div>
                    </div>
                </div>

                <div id="crud-modal" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-md max-h-full p-4">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div
                                class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    Add a place
                                </h3>
                                <button type="button"
                                    class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-toggle="crud-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <form class="p-4 md:p-5">
                                <div class="grid grid-cols-2 gap-4 mb-4">
                                    <div class="col-span-2">
                                        <label for="name"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Location
                                            Name</label>
                                        <input type="text" name="name" id="name"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Type product name" required="">
                                    </div>

                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="category"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                        <select id="category"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            <option selected="">Select category</option>
                                            <option value="TV">Travel Location</option>
                                            <option value="PC">Restaurant</option>
                                            <option value="GA">Accommodation</option>
                                        </select>
                                    </div>
                                    <div class="col-span-2">
                                        <label for="description"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                                            Description</label>
                                        <textarea id="description" rows="4"
                                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Write product description here"></textarea>
                                    </div>
                                </div>
                                <button type="submit"
                                    class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">

                                    Send Inquery
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Hero -->

        </div>

</x-layouts.user-layout>
