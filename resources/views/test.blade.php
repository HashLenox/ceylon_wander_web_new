<x-layout>
    <div class="bg-white  dark:bg-gray-900">
        <div class="container bg-white border border-gray-200 shadow-md  dark:bg-gray-800 dark:border-gray-700">
            <div
                class="p-8 bg-[url('https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/coast-house-view.jpg')] bg-no-repeat bg-cover bg-center bg-gray-700 bg-blend-multiply">
                <div class="relative max-w-screen-xl px-4 py-8 mx-auto text-white lg:py-16 xl:px-0 z-1 ">
                    <div class="max-w-screen-md mb-6 lg:mb-0">
                        <h1
                            class="mb-4 text-4xl font-extrabold leading-tight tracking-tight text-white md:text-5xl lg:text-6xl">
                            Every home is a destination</h1>
                        <p class="mb-6 font-light text-gray-300 lg:mb-8 md:text-lg lg:text-xl">The best
                            of Luxury Retreats is now Flowbite Luxe—offering the world's most
                            extraordinary homes with the highest standard of service.</p>
                        {{-- <a href="#"
                        class="inline-flex items-center px-5 py-3 font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-900 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        Sign In / Register
                    </a> --}}
                    </div>
                    <form action="#"
                        class="grid w-full p-4 bg-white rounded gap-y-8 lg:gap-x-4 lg:grid-cols-9 lg:mt-12 dark:bg-gray-800">
                        <div class="lg:col-span-3">
                            <label for="location-form" class="sr-only">Location</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input type="text" id="location-form"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Search destinations">
                            </div>
                        </div>
                        <div date-rangepicker datepicker-orientation="top"
                            class="grid grid-cols-2 gap-x-4 lg:col-span-3">
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input name="start" type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Check in">
                            </div>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input name="end" type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Check out">
                            </div>
                        </div>
                        <div class="lg:col-span-1">
                            <label for="guests" class="sr-only">Select number of guests</label>
                            <select id="guests"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option>Guests</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5+</option>
                            </select>
                        </div>
                        <button type="submit"
                            class="lg:col-span-2 justify-center md:w-auto text-white bg-purple-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 inline-flex items-center">
                            <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Search
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="max-w-screen-xl px-4 py-8 mx-auto border-b-2 lg:py-8 lg:px-6">
            <div class="grid gap-3 p-4 bg-white dark:bg-gray-900 md:p-2 sm:p-2">
                <div class="flex items-center justify-between mt-3">
                    <h6 class="text-3xl font-extrabold tracking-tight text-gray-900  dark:text-white">
                        Recommended for you</h6>
                    <button
                        class="px-4 py-2 font-semibold underline duration-300 rounded-lg text-purple-950 hover:text-purple-500">See
                        all</button>
                </div>

                <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3">
                    <a href="#"
                        class="p-4 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">

                        <img class="mb-2 rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/blog/office-laptops.png"
                            alt="office laptop working" />
                        <div class="flex items-center justify-between">
                            <h2 class="my-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Hotel ABC
                            </h2>
                            <span
                                class="bg-purple-100 text-purple-800 text-xs font-semibold mr-2 px-1.5 py-1 rounded dark:bg-purple-200 dark:text-purple-900">Top-rated</span>
                        </div>

                        <p class="mb-4 font-light text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit
                            amet,
                            consectetur adipisicing elit. Similique, optio dolor.</p>
                        <div class="flex items-center justify-between">

                            <div class="flex items-center">
                                <svg class="w-6 h-6 mr-1 text-purple-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>1.6 mi</span>
                            </div>

                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-purple-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <span class="ml-2">4.5</span>
                            </div>

                            <p class="py-1 font-sm">
                                58 reviews
                            </p>
                        </div>
                    </a>
                    <a href="#"
                        class="p-4 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <img class="mb-2 rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/blog/office-laptops.png"
                            alt="office laptop working" />
                        <div class="flex items-center justify-between">
                            <h2 class="my-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Hotel ABC
                            </h2>
                            <span
                                class="bg-purple-100 text-purple-800 text-xs font-semibold mr-2 px-1.5 py-1 rounded dark:bg-purple-200 dark:text-purple-900">Top-rated</span>
                        </div>

                        <p class="mb-4 font-light text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit
                            amet,
                            consectetur adipisicing elit. Similique, optio dolor.</p>
                        <div class="flex items-center justify-between">

                            <div class="flex items-center">
                                <svg class="w-6 h-6 mr-1 text-purple-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>1.6 mi</span>
                            </div>

                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-purple-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <span class="ml-2">4.5</span>
                            </div>

                            <p class="py-1 font-sm">
                                58 reviews
                            </p>
                        </div>
                    </a>
                    <a href="#"
                        class="p-4 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <img class="mb-2 rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/blog/office-laptops.png"
                            alt="office laptop working" />
                        <div class="flex items-center justify-between">
                            <h2 class="my-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Hotel ABC
                            </h2>
                            <span
                                class="bg-purple-100 text-purple-800 text-xs font-semibold mr-2 px-1.5 py-1 rounded dark:bg-purple-200 dark:text-purple-900">Top-rated</span>
                        </div>

                        <p class="mb-4 font-light text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit
                            amet,
                            consectetur adipisicing elit. Similique, optio dolor.</p>
                        <div class="flex items-center justify-between">

                            <div class="flex items-center">
                                <svg class="w-6 h-6 mr-1 text-purple-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>1.6 mi</span>
                            </div>

                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-purple-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <span class="ml-2">4.5</span>
                            </div>

                            <p class="py-1 font-sm">
                                58 reviews
                            </p>
                        </div>
                    </a>
                    <a href="#"
                        class="p-4 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">

                        <img class="mb-2 rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/blog/office-laptops.png"
                            alt="office laptop working" />
                        <div class="flex items-center justify-between">
                            <h2 class="my-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Hotel ABC
                            </h2>
                            <span
                                class="bg-purple-100 text-purple-800 text-xs font-semibold mr-2 px-1.5 py-1 rounded dark:bg-purple-200 dark:text-purple-900">Top-rated</span>
                        </div>

                        <p class="mb-4 font-light text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit
                            amet,
                            consectetur adipisicing elit. Similique, optio dolor.</p>
                        <div class="flex items-center justify-between">

                            <div class="flex items-center">
                                <svg class="w-6 h-6 mr-1 text-purple-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>1.6 mi</span>
                            </div>

                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-purple-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <span class="ml-2">4.5</span>
                            </div>

                            <p class="py-1 font-sm">
                                58 reviews
                            </p>
                        </div>
                    </a>
                    <a href="#"
                        class="p-4 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <img class="mb-2 rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/blog/office-laptops.png"
                            alt="office laptop working" />
                        <div class="flex items-center justify-between">
                            <h2 class="my-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Hotel ABC
                            </h2>
                            <span
                                class="bg-purple-100 text-purple-800 text-xs font-semibold mr-2 px-1.5 py-1 rounded dark:bg-purple-200 dark:text-purple-900">Top-rated</span>
                        </div>

                        <p class="mb-4 font-light text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit
                            amet,
                            consectetur adipisicing elit. Similique, optio dolor.</p>
                        <div class="flex items-center justify-between">

                            <div class="flex items-center">
                                <svg class="w-6 h-6 mr-1 text-purple-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>1.6 mi</span>
                            </div>

                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-purple-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <span class="ml-2">4.5</span>
                            </div>

                            <p class="py-1 font-sm">
                                58 reviews
                            </p>
                        </div>
                    </a>
                    <a href="#"
                        class="p-4 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <img class="mb-2 rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/blog/office-laptops.png"
                            alt="office laptop working" />
                        <div class="flex items-center justify-between">
                            <h2 class="my-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Hotel ABC
                            </h2>
                            <span
                                class="bg-purple-100 text-purple-800 text-xs font-semibold mr-2 px-1.5 py-1 rounded dark:bg-purple-200 dark:text-purple-900">Top-rated</span>
                        </div>

                        <p class="mb-4 font-light text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit
                            amet,
                            consectetur adipisicing elit. Similique, optio dolor.</p>
                        <div class="flex items-center justify-between">

                            <div class="flex items-center">
                                <svg class="w-6 h-6 mr-1 text-purple-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>1.6 mi</span>
                            </div>

                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-purple-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <span class="ml-2">4.5</span>
                            </div>

                            <p class="py-1 font-sm">
                                58 reviews
                            </p>
                        </div>
                    </a>

                </div>
            </div>
        </div>

        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-8 lg:px-6">
            <div class="grid gap-3 p-4 bg-white dark:bg-gray-900 md:p-2 sm:p-2">
                <div class="flex items-center justify-between mt-3">
                    <h6 class="text-3xl font-extrabold tracking-tight text-gray-900  dark:text-white">
                        Nearby you</h6>
                    <button
                        class="px-4 py-2 font-semibold underline duration-300 rounded-lg text-purple-950 hover:text-purple-500">See
                        all</button>
                </div>

                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    <a href="#"
                        class="p-4 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">

                        <img class="mb-2 rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/blog/office-laptops.png"
                            alt="office laptop working" />
                        <div class="flex items-center justify-between">
                            <h2 class="my-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Hotel ABC
                            </h2>
                            <span
                                class="bg-purple-100 text-purple-800 text-xs font-semibold mr-2 px-1.5 py-1 rounded dark:bg-purple-200 dark:text-purple-900">Top-rated</span>
                        </div>

                        <p class="mb-4 font-light text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit
                            amet,
                            consectetur adipisicing elit. Similique, optio dolor.</p>
                        <div class="flex items-center justify-between">

                            <div class="flex items-center">
                                <svg class="w-6 h-6 mr-1 text-purple-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>1.6 mi</span>
                            </div>

                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-purple-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <span class="ml-2">4.5</span>
                            </div>

                            <p class="py-1 font-sm">
                                58 reviews
                            </p>
                        </div>
                    </a>
                    <a href="#"
                        class="p-4 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <img class="mb-2 rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/blog/office-laptops.png"
                            alt="office laptop working" />
                        <div class="flex items-center justify-between">
                            <h2 class="my-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Hotel ABC
                            </h2>
                            <span
                                class="bg-purple-100 text-purple-800 text-xs font-semibold mr-2 px-1.5 py-1 rounded dark:bg-purple-200 dark:text-purple-900">Top-rated</span>
                        </div>

                        <p class="mb-4 font-light text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit
                            amet,
                            consectetur adipisicing elit. Similique, optio dolor.</p>
                        <div class="flex items-center justify-between">

                            <div class="flex items-center">
                                <svg class="w-6 h-6 mr-1 text-purple-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>1.6 mi</span>
                            </div>

                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-purple-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <span class="ml-2">4.5</span>
                            </div>

                            <p class="py-1 font-sm">
                                58 reviews
                            </p>
                        </div>
                    </a>
                    <a href="#"
                        class="p-4 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <img class="mb-2 rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/blog/office-laptops.png"
                            alt="office laptop working" />
                        <div class="flex items-center justify-between">
                            <h2 class="my-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Hotel ABC
                            </h2>
                            <span
                                class="bg-purple-100 text-purple-800 text-xs font-semibold mr-2 px-1.5 py-1 rounded dark:bg-purple-200 dark:text-purple-900">Top-rated</span>
                        </div>

                        <p class="mb-4 font-light text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit
                            amet,
                            consectetur adipisicing elit. Similique, optio dolor.</p>
                        <div class="flex items-center justify-between">

                            <div class="flex items-center">
                                <svg class="w-6 h-6 mr-1 text-purple-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>1.6 mi</span>
                            </div>

                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-purple-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <span class="ml-2">4.5</span>
                            </div>

                            <p class="py-1 font-sm">
                                58 reviews
                            </p>
                        </div>
                    </a>
                    <a href="#"
                        class="p-4 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">

                        <img class="mb-2 rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/blog/office-laptops.png"
                            alt="office laptop working" />
                        <div class="flex items-center justify-between">
                            <h2 class="my-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Hotel ABC
                            </h2>
                            <span
                                class="bg-purple-100 text-purple-800 text-xs font-semibold mr-2 px-1.5 py-1 rounded dark:bg-purple-200 dark:text-purple-900">Top-rated</span>
                        </div>

                        <p class="mb-4 font-light text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit
                            amet,
                            consectetur adipisicing elit. Similique, optio dolor.</p>
                        <div class="flex items-center justify-between">

                            <div class="flex items-center">
                                <svg class="w-6 h-6 mr-1 text-purple-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>1.6 mi</span>
                            </div>

                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-purple-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <span class="ml-2">4.5</span>
                            </div>

                            <p class="py-1 font-sm">
                                58 reviews
                            </p>
                        </div>
                    </a>
                    <a href="#"
                        class="p-4 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <img class="mb-2 rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/blog/office-laptops.png"
                            alt="office laptop working" />
                        <div class="flex items-center justify-between">
                            <h2 class="my-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Hotel ABC
                            </h2>
                            <span
                                class="bg-purple-100 text-purple-800 text-xs font-semibold mr-2 px-1.5 py-1 rounded dark:bg-purple-200 dark:text-purple-900">Top-rated</span>
                        </div>

                        <p class="mb-4 font-light text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit
                            amet,
                            consectetur adipisicing elit. Similique, optio dolor.</p>
                        <div class="flex items-center justify-between">

                            <div class="flex items-center">
                                <svg class="w-6 h-6 mr-1 text-purple-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>1.6 mi</span>
                            </div>

                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-purple-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <span class="ml-2">4.5</span>
                            </div>

                            <p class="py-1 font-sm">
                                58 reviews
                            </p>
                        </div>
                    </a>
                    <a href="#"
                        class="p-4 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <img class="mb-2 rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/blog/office-laptops.png"
                            alt="office laptop working" />
                        <div class="flex items-center justify-between">
                            <h2 class="my-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Hotel ABC
                            </h2>
                            <span
                                class="bg-purple-100 text-purple-800 text-xs font-semibold mr-2 px-1.5 py-1 rounded dark:bg-purple-200 dark:text-purple-900">Top-rated</span>
                        </div>

                        <p class="mb-4 font-light text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit
                            amet,
                            consectetur adipisicing elit. Similique, optio dolor.</p>
                        <div class="flex items-center justify-between">

                            <div class="flex items-center">
                                <svg class="w-6 h-6 mr-1 text-purple-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>1.6 mi</span>
                            </div>

                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-purple-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <span class="ml-2">4.5</span>
                            </div>

                            <p class="py-1 font-sm">
                                58 reviews
                            </p>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </div>
    <section class="p-8 bg-white dark:bg-gray-900">
        <div class="max-w-screen-xl px-4 py-8 mx-auto border-2 lg:py-8 lg:px-6 sm:py-2 rounded-xl">
            <div class="max-w-screen-md mx-auto mb-2 text-center lg:mb-4">
                <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">
                    Top Hotels of All time</h2>
                <p class="mb-1 font-light text-gray-500 sm:text-xl dark:text-gray-400">Lorem ipsum dolor, sit
                    amet consectetur adipisicing elit. Ad, veritatis nemo. Lorem ipsum dolor, sit amet
                    consectetur adipisicing elit. Delectus.
                </p>
            </div>
            <aside aria-label="Top destionations" class="py-8 antialiased bg-white dark:bg-gray-900 md:py-2 sm:py-2">
                <div class="w-full max-w-screen-xl px-4 mx-auto ">
                    <div id="animation-carousel " data-carousel="slide">
                        <div class="relative overflow-hidden rounded-lg h-[440px]">
                            <div class="hidden duration-700 ease-in-out bg-white dark:bg-gray-900" data-carousel-item>
                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-3">
                                    <div
                                        class="max-w-sm p-4 mx-auto bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                                        <a href="#">
                                            <img class="mb-5 rounded-lg"
                                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/blog/office-laptops.png"
                                                alt="office laptop working">
                                        </a>
                                        <h3
                                            class="mb-2 text-xl font-bold tracking-tight text-gray-900 lg:text-2xl dark:text-white">
                                            <a href="#">Our first office</a>
                                        </h3>
                                        <p class="mb-3 text-gray-500 dark:text-gray-400">Over the past year,
                                            Volosoft has undergone many changes! After months of preparation and
                                            some hard work, we moved to our new office.</p>
                                        <a href="#"
                                            class="inline-flex items-center font-medium text-purple-600 hover:text-purple-800 dark:text-purple-500 hover:no-underline">
                                            Read more <svg class="w-3 h-3 mt-px ml-1" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div
                                        class="hidden max-w-sm p-4 mx-auto bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-800 sm:block">
                                        <a href="#">
                                            <img class="mb-5 rounded-lg"
                                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/blog/google-hq.png"
                                                alt="google hq">
                                        </a>
                                        <h3
                                            class="mb-2 text-xl font-bold tracking-tight text-gray-900 lg:text-2xl dark:text-white">
                                            <a href="#">We partnered up with Google</a>
                                        </h3>
                                        <p class="mb-3 text-gray-500 dark:text-gray-400">Over the past year,
                                            Volosoft has undergone many changes! After months of preparation and
                                            some hard work, we moved to our new office.</p>
                                        <a href="#"
                                            class="inline-flex items-center font-medium text-purple-600 hover:text-purple-800 dark:text-purple-500 hover:no-underline">
                                            Read more <svg class="w-3 h-3 mt-px ml-1" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div
                                        class="hidden max-w-sm p-4 mx-auto bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-800 xl:block">
                                        <a href="#">
                                            <img class="mb-5 rounded-lg"
                                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/blog/office-laptops-2.png"
                                                alt="office laptop working">
                                        </a>
                                        <h3
                                            class="mb-2 text-xl font-bold tracking-tight text-gray-900 lg:text-2xl dark:text-white">
                                            <a href="#">Our first project with React</a>
                                        </h3>
                                        <p class="mb-3 text-gray-500 dark:text-gray-400">Over the past year,
                                            Volosoft has undergone many changes! After months of preparation and
                                            some hard work, we moved to our new office.</p>
                                        <a href="#"
                                            class="inline-flex items-center font-medium text-purple-600 hover:text-purple-800 dark:text-purple-500 hover:no-underline">
                                            Read more <svg class="w-3 h-3 mt-px ml-1" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden duration-700 ease-in-out bg-white dark:bg-gray-900" data-carousel-item>
                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-3">
                                    <div
                                        class="max-w-sm p-4 mx-auto bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-800">
                                        <a href="#">
                                            <img class="mb-5 rounded-lg"
                                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/blog/google-hq.png"
                                                alt="google hq">
                                        </a>

                                        <h3
                                            class="mb-2 text-xl font-bold tracking-tight text-gray-900 lg:text-2xl dark:text-white">
                                            <a href="#">We partnered up with Google</a>
                                        </h3>
                                        <p class="mb-3 text-gray-500 dark:text-gray-400">Over the past year,
                                            Volosoft has undergone many changes! After months of preparation and
                                            some hard work, we moved to our new office.</p>
                                        <a href="#"
                                            class="inline-flex items-center font-medium text-purple-600 hover:text-purple-800 dark:text-purple-500 hover:no-underline">
                                            Read more <svg class="w-3 h-3 mt-px ml-1" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div
                                        class="hidden max-w-sm p-4 mx-auto bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-800 sm:block">
                                        <a href="#">
                                            <img class="mb-5 rounded-lg"
                                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/blog/office-laptops.png"
                                                alt="office laptop working">
                                        </a>

                                        <h3
                                            class="mb-2 text-xl font-bold tracking-tight text-gray-900 lg:text-2xl dark:text-white">
                                            <a href="#">Our first office</a>
                                        </h3>
                                        <p class="mb-3 text-gray-500 dark:text-gray-400">Over the past year,
                                            Volosoft has undergone many changes! After months of preparation and
                                            some hard work, we moved to our new office.</p>
                                        <a href="#"
                                            class="inline-flex items-center font-medium text-purple-600 hover:text-purple-800 dark:text-purple-500 hover:no-underline">
                                            Read more <svg class="w-3 h-3 mt-px ml-1" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div
                                        class="hidden max-w-sm p-4 mx-auto bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-800 xl:block">
                                        <a href="#">
                                            <img class="mb-5 rounded-lg"
                                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/blog/office-laptops-2.png"
                                                alt="office laptop working">
                                        </a>

                                        <h3
                                            class="mb-2 text-xl font-bold tracking-tight text-gray-900 lg:text-2xl dark:text-white">
                                            <a href="#">Our first project with React</a>
                                        </h3>
                                        <p class="mb-3 text-gray-500 dark:text-gray-400">Over the past year,
                                            Volosoft has undergone many changes! After months of preparation and
                                            some hard work, we moved to our new office.</p>
                                        <a href="#"
                                            class="inline-flex items-center font-medium text-purple-600 hover:text-purple-800 dark:text-purple-500 hover:no-underline">
                                            Read more <svg class="w-3 h-3 mt-px ml-1" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden duration-700 ease-in-out bg-white dark:bg-gray-900" data-carousel-item>
                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-3">
                                    <div
                                        class="max-w-sm p-4 mx-auto bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-800">
                                        <a href="#">
                                            <img class="mb-5 rounded-lg"
                                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/blog/office-laptops-2.png"
                                                alt="office laptop working">
                                        </a>

                                        <h3
                                            class="mb-2 text-xl font-bold tracking-tight text-gray-900 lg:text-2xl dark:text-white">
                                            <a href="#">Our first project with React</a>
                                        </h3>
                                        <p class="mb-3 text-gray-500 dark:text-gray-400">Over the past year,
                                            Volosoft has undergone many changes! After months of preparation and
                                            some hard work, we moved to our new office.</p>
                                        <a href="#"
                                            class="inline-flex items-center font-medium text-purple-600 hover:text-purple-800 dark:text-purple-500 hover:no-underline">
                                            Read more <svg class="w-3 h-3 mt-px ml-1" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div
                                        class="hidden max-w-sm p-4 mx-auto bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-800 sm:block">
                                        <a href="#">
                                            <img class="mb-5 rounded-lg"
                                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/blog/google-hq.png"
                                                alt="google hq">
                                        </a>
                                        <h3
                                            class="mb-2 text-xl font-bold tracking-tight text-gray-900 lg:text-2xl dark:text-white">
                                            <a href="#">We partnered up with Google</a>
                                        </h3>
                                        <p class="mb-3 text-gray-500 dark:text-gray-400">Over the past year,
                                            Volosoft has undergone many changes! After months of preparation and
                                            some hard work, we moved to our new office.</p>
                                        <a href="#"
                                            class="inline-flex items-center font-medium text-purple-600 hover:text-purple-800 dark:text-purple-500 hover:no-underline">
                                            Read more <svg class="w-3 h-3 mt-px ml-1" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div
                                        class="hidden max-w-sm p-4 mx-auto bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-800 xl:block">
                                        <a href="#">
                                            <img class="mb-5 rounded-lg"
                                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/blog/office-laptops.png"
                                                alt="office laptop working">
                                        </a>

                                        <h3
                                            class="mb-2 text-xl font-bold tracking-tight text-gray-900 lg:text-2xl dark:text-white">
                                            <a href="#">Our first office</a>
                                        </h3>
                                        <p class="mb-3 text-gray-500 dark:text-gray-400">Over the past year,
                                            Volosoft has undergone many changes! After months of preparation and
                                            some hard work, we moved to our new office.</p>
                                        <a href="#"
                                            class="inline-flex items-center font-medium text-purple-600 hover:text-purple-800 dark:text-purple-500 hover:no-underline">
                                            Read more <svg class="w-3 h-3 mt-px ml-1" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-center">
                            <button type="button"
                                class="flex items-center justify-center h-full mr-4 cursor-pointer group focus:outline-none"
                                data-carousel-prev>
                                <span
                                    class="text-purple-500 dark:text-gray-400 hover:text-purple-700 dark:hover:text-gray-200">
                                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4" />
                                    </svg>
                                    <span class="hidden">Previous</span>
                                </span>
                            </button>
                            <button type="button"
                                class="flex items-center justify-center h-full cursor-pointer group focus:outline-none"
                                data-carousel-next>
                                <span
                                    class="text-purple-500 dark:text-gray-400 hover:text-purple-700 dark:hover:text-gray-200">
                                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                    <span class="hidden">Next</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <section class="p-8 bg-white dark:bg-gray-900">
        <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-16 lg:px-6">
            <div class="grid space-y-8 lg:grid-cols-2 lg:gap-12 lg:space-y-0">
                <div>
                    <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">Compare
                        Flowbite to other platforms on the market</h2>
                    <p class="mb-4 text-gray-500 sm:text-xl dark:text-gray-400">Here we focus on markets where
                        technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
                    <a href="#"
                        class="inline-flex items-center font-medium sm:text-lg text-primary-600 hover:text-primary-700 dark:text-primary-500 dark:hover:text-primary-400">
                        Learn what makes Flowbite different <svg class="w-5 h-5 ml-1" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
                <div>
                    <a href="#"
                        class="flex items-center justify-between p-4 mb-6 bg-white border-l-8 rounded-lg shadow dark:bg-gray-800 dark:hover:bg-gray-700 border-primary-600 dark:border-primary-500 hover:bg-gray-50">
                        <div>
                            <span
                                class="block mb-1 text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Simplicity
                                and Affordability</span>
                            <span class="text-xl font-semibold text-primary-600 dark:text-primary-500">Flowbite vs
                                Google</span>
                        </div>
                        <svg class="w-6 h-6 text-primary-600 dark:text-primary-500" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#"
                        class="flex items-center justify-between p-4 mb-6 bg-white border-l-8 border-purple-600 rounded-lg shadow dark:bg-gray-800 dark:hover:bg-gray-700 dark:border-purple-500 hover:bg-gray-50">
                        <div>
                            <span
                                class="block mb-1 text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Built
                                for customer support</span>
                            <span class="text-xl font-semibold text-purple-600 dark:text-purple-500">Microsoft vs
                                Apple</span>
                        </div>
                        <svg class="w-6 h-6 text-purple-600 dark:text-purple-500" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#"
                        class="flex items-center justify-between p-4 bg-white border-l-8 border-teal-600 rounded-lg shadow dark:bg-gray-800 dark:hover:bg-gray-700 dark:border-teal-500 hover:bg-gray-50">
                        <div>
                            <span
                                class="block mb-1 text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Modern
                                and intuitive ui</span>
                            <span class="text-xl font-semibold text-teal-600 dark:text-teal-500">Zendesk vs Meet</span>
                        </div>
                        <svg class="w-6 h-6 text-teal-600 dark:text-teal-500" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layout>
