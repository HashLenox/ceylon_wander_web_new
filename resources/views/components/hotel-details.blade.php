<div class="max-w-screen-xl mx-auto bg-white md:py-2 xl:py-4 dark:bg-gray-900">
    <x-hotel-title></x-hotel-title>

    <div class="justify-between lg:flex">
        <div class="px-8 md:mb-4">
            <!--Start - Image grid-->
            <div class="flex flex-col justify-center max-w-md mx-auto mb-4 lg:max-w-none lg:flex-row">
                <div class="grid grid-cols-2 grid-rows-4 gap-1 md:grid-cols-4 md:grid-rows-2">
                    <div class="col-span-2 row-span-4 rounded-l-xl">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-1.png"
                            alt="Image 1"
                            class="object-cover object-center w-full h-auto rounded-l-xl md:h-full md:w-auto">
                    </div>
                    <div class="col-start-3 row-span-2 ">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-2.png"
                            alt="Image 2" class="object-cover object-center w-full h-auto md:h-full md:w-auto">
                    </div>
                    <div class="col-start-4 row-span-2 rounded-tr-xl">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png"
                            alt="Image 3"
                            class="object-cover object-center w-full h-auto rounded-tr-xl md:h-full md:w-auto">
                    </div>
                    <div class="col-start-3 row-span-2 row-start-3">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-4.png"
                            alt="Image 3" class="object-cover object-center w-full h-auto md:h-full md:w-auto">
                    </div>
                    <div class="col-start-4 row-span-2 row-start-3 rounded-br-xl">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-5.png"
                            alt="Image 3"
                            class="object-cover object-center w-full h-auto rounded-br-xl md:h-full md:w-auto">
                    </div>
                </div>
            </div>
            <!--End - Image grid-->
            <x-hotel-nav></x-hotel-nav>
        </div>

        <x-hotel-overview-side-card></x-hotel-overview-side-card>
    </div>
</div>
