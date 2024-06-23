<!--Start - Hotel details with save and share buttons-->
<div class="flex items-center justify-between p-5">
    <h6 class="mx-4 my-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
        {{$slot}}
    </h6>
    <div class="flex justify-between space-x-8">
        <a href="#" title=""
            class="flex items-center justify-center w-full px-5 py-2.5 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-purple-700  focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
            role="button">
            <svg class="w-5 h-5 -ms-2 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z" />
            </svg>
            Save
        </a>

        <a href="#" title=""
            class="flex items-center justify-center w-full px-5 py-2.5 text-sm font-medium text-gray-100 bg-purple-600 border border-gray-200 rounded-lg focus:outline-none hover:border-purple-700 hover:border-2 hover:bg-gray-100 hover:text-purple-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
            role="button">
            <svg class="w-5 h-5 -ms-2 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 15v2a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-2M12 4v12m0-12 4 4m-4-4L8 8" />
            </svg>
            Share
        </a>


    </div>
</div>
