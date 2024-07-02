<x-layouts.user-layout>


    <div class="mt-20">

        <div class="px-8 py-2 -ml-12">
            <x-main-components.food-category-slider />
        </div>

        <!--HTML CODE-->

        <x-main-components.promo-slider />

        {{-- <div>
            <x-header>Best Restaurant in Area</x-header>
        </div> --}}

        <div>
            <div class="grid items-center justify-center gap-6 sm:grid-cols-2 md:grid-cols-2 xl:grid-cols-4">
                @forelse ($locations as $location)
                    <x-restaurant-card :location="$location" />
                @empty
                    <div
                        class="flex items-center justify-center col-span-4 border-2 border-gray-700 border-dashed bg-primary-100 dark:bg-gray-700 rounded-xl dark:border-gray-500">
                        <div class="text-center">
                            <p class="py-16 text-gray-800 dark:text-white ">No resturent found to your criteria</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>

    </div>




</x-layouts.user-layout>
