<div class="mb-5">
    <div class="p-4 space-y-4 bg-white rounded-lg shadow dark:bg-gray-800 xl:p-6 2xl:p-8 lg:space-y-6">
        <div class="flex items-center space-x-4">
            <div class="flex-shrink-0">
                <img class="w-10 h-10 rounded-full"
                    src="https://scontent.fcmb11-1.fna.fbcdn.net/v/t39.30808-6/423161752_1426044888327147_882381990071102017_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHJY-UfPq9qQL_6S3ejkJ_asZ68nfBa6sCxnryd8FrqwB3DwICUJbSK20b-LVpPd49tIJQqIH2IMkB480YmFu0a&_nc_ohc=X0sL8SlT8_AAb7DTTjR&_nc_zt=23&_nc_ht=scontent.fcmb11-1.fna&oh=00_AfB2T_W_KR1j24WNKHhoexwjczKl3_4a-jPzinUMZjPnVA&oe=661E0D65"
                    alt="Neil Sims">
            </div>
            <div class="flex-1 min-w-0">
                <p class="text-sm font-semibold text-gray-900 truncate dark:text-white">{{ $feed?->user?->name }} (Level
                    69 Traveler)
                </p>
                <p class="text-sm font-normal text-gray-500 truncate dark:text-gray-400">12 April
                    at 09.28 PM</p>
            </div>
            <a href="#"
                class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer dark:hover:bg-gray-700 dark:hover:text-white dark:text-gray-400 hover:text-gray-900 hover:bg-gray-100">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                    </path>
                </svg>
            </a>
        </div>
        <div class="space-y-4">
            <p class="text-base font-normal text-gray-500 dark:text-gray-400">{{ $feed->review }}</p>


            @if ($feed->images)
                @php
                    $imageCount = count($feed->images);
                @endphp
                <div class="container max-h-52 flex">
                    @foreach ($feed->images as $image)
                        @if ($imageCount == 1)
                            <div class="w-full lg:w-1/3 max-h-52 overflow-hidden">
                                <img src="{{ asset('storage/' . $image) }}" class="object-cover w-full h-full"
                                    alt="Image">
                            </div>
                        @elseif ($imageCount == 2)
                            <div class="w-1/2 lg:w-1/3 max-h-52 overflow-hidden">
                                <img src="{{ asset('storage/' . $image) }}" class="object-cover w-full h-full"
                                    alt="Image">
                            </div>
                        @elseif ($imageCount == 3)
                            <div class="w-1/3 max-h-52 overflow-hidden">
                                <img src="{{ asset('storage/' . $image) }}" class="object-cover w-full h-full"
                                    alt="Image">
                            </div>
                        @elseif ($imageCount == 4)
                            <div class="w-1/4 max-h-52 overflow-hidden">
                                <img src="{{ asset('storage/' . $image) }}" class="object-cover w-full h-full"
                                    alt="Image">
                            </div>
                        @endif
                    @endforeach
                </div>
            @endif



            <a class="text-gray-500 dark:text-gray-400 hover:text-blue-500 font-bold text-md"
                href="#">{{ '@' . $feed?->location?->name }}</a>
        </div>
        <div class="flex py-3 space-x-6 border-t border-b border-gray-200 dark:border-gray-700">
            <a href="#"
                class="flex items-center text-sm font-medium text-gray-500 hover:underline hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                <svg class="mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z"
                        clip-rule="evenodd"></path>
                </svg>
                7 Comments
            </a>
            <a href="#"
                class="flex items-center text-sm font-medium text-gray-500 hover:underline hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                <svg class="mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                        clip-rule="evenodd"></path>
                </svg>
                457 Likes
            </a>
        </div>
        <div>
            <form action="#">
                <label for="write-message" class="sr-only">Comment</label>
                <input type="text" id="write-message" placeholder="Write comment"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
            </form>
        </div>
    </div>
</div>
