<div class="max-w-screen-xl mx-auto bg-white md:py-2 xl:py-4 dark:bg-gray-900">
    <x-hotel-title></x-hotel-title>

    <div class="justify-between border-b-2 lg:flex">
        <div class="px-8 md:mb-4">
            <x-image-grid></x-image-grid>

            <!--Start - Hotel Name-->
            <div class="max-w-md mx-auto mb-4 lg:max-w-none">
                <h2 class="my-2 text-4xl font-bold tracking-tight text-gray-900 capitalize dark:text-white">
                    hotel name
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
        <x-hotel-overview-side-card></x-hotel-overview-side-card>
    </div>

    <div class="p-8 mt-5">
        <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4">
            <x-hotel-card></x-hotel-card>
            <x-hotel-card></x-hotel-card>
            <x-hotel-card></x-hotel-card>
            <x-hotel-card></x-hotel-card>
        </div>
    </div>


</div>
