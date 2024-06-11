<!--Start - Side card-->
<div class="w-full px-2 mt-2 lg:max-w-sm lg:mt-0 shrink-0">
    <div class="p-4 border border-gray-200 rounded-lg sm:p-6 lg:p-8 bg-gray-50 dark:bg-gray-800 dark:border-gray-700">

        <!--Start - Sample description-->
        <h1 class="font-semibold text-gray-900 dark:text-white">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
        </h1>
        <!--End - Sample description-->

        <x-hotel-rating></x-hotel-rating>

        <!--Start - Address and Charges-->
        <div class="flex items-center gap-1 mt-4 ">
            <svg class="w-5 h-5 text-purple-950 dark:text-purple-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17.8 13.938h-.011a7 7 0 1 0-11.464.144h-.016l.14.171c.1.127.2.251.3.371L12 21l5.13-6.248c.194-.209.374-.429.54-.659l.13-.155Z" />
            </svg>
            <a href="#" class="text-sm font-medium text-purple-700 dark:text-purple-50 hover:underline ">
                Lorem, ipsum dolor sit rd, consectetur.
            </a>
        </div>

        <div class="flex items-center justify-between gap-4 my-4 md:mt-6">
            <span class="flex items-start space-x-2 text-2xl font-extrabold text-primary sm:text-3xl dark:text-white">
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
<!--End - Side card-->
