<x-layouts.user-layout>
    <div class="mt-20">
        <x-banner-slider> </x-banner-slider>

        <div>
            <x-header>Best hotels in Area</x-header>
        </div>

        <div class="mt-5">
            <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4">
                @forelse ($locations as $location)
                    <x-hotel-card :location="$location" />
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
    </div>
</x-layouts.user-layout>
