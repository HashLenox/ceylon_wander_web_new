<div class="flex flex-col overflow-hidden bg-gray-100 rounded shadow-lg dark:bg-gray-700">

    <div class="relative">
        <a href="#">
            <div class="h-32 overflow-hidden relative">
                <img class="absolute inset-0 w-full h-full object-cover"
                    src="https://images.pexels.com/photos/61180/pexels-photo-61180.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500"
                    alt="Sunset in the mountains">
            </div>
            <div
                class="absolute top-0 bottom-0 left-0 right-0 transition duration-300 bg-gray-900 opacity-25 hover:bg-transparent">
            </div>
        </a>
        <a href="#!">
            <div
                class="absolute top-0 right-0 px-2 py-1 mt-3 mr-0 text-xs text-white transition duration-500 ease-in-out bg-indigo-600 hover:bg-white hover:text-indigo-600">
                {!! Str::limit($location?->category?->slug, 15) !!}
            </div>
        </a>
    </div>
    <div class="px-4 py-2 mb-0">
        <div class="flex items-center justify-between ">
            <a href="{{ route('hotel.details', ['id' => $location->id]) }}"
                class="inline-block text-xl font-bold capitalize transition duration-500 ease-in-out mb-22 hover:text-indigo-600">
                {!! Str::limit($location->name, 20) !!}</a>


            <div class="flex items-center">

                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 22 20">
                    <path
                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <p class="text-sm font-bold text-gray-900 ms-1 dark:text-white">4.6</p>


            </div>

        </div>
        <p class="text-sm text-gray-500">
            {!! Str::limit($location->description, 100) !!}
        </p>
    </div>
    <div class="flex flex-row items-center justify-between px-4 py-3 ">
        <span href="#" class="flex flex-row items-center py-1 mr-1 text-xs text-gray-900 font-regular">
            <svg height="13px" width="13px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
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

        <span href="#" class="flex flex-row items-center py-1 mr-1 text-xs text-gray-900 font-regular">
            <svg class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                </path>
            </svg>
            <span class="ml-1">74 Reviews</span>
        </span>
    </div>
</div>
