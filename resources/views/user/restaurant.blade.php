<x-layouts.user-layout>

    <main class="h-auto p-4 pt-20 mt-5 md:ml-64">
        <x-banner-slider> </x-banner-slider>

        <div>
            <x-header>Best Resturent in Area</x-header>
        </div>

        <div class="mt-5">
            <div class="grid items-center justify-center gap-6 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4">
                <x-hotel-card></x-hotel-card>
                <x-hotel-card></x-hotel-card>
                <x-hotel-card></x-hotel-card>
                <x-hotel-card></x-hotel-card>
            </div>
        </div>
    </main>

</x-layouts.user-layout>
