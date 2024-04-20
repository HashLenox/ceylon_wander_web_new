@include('layouts.main')
@include('layouts.navigation_main')

@include('layouts.side_navigation')


<main class="p-4 md:ml-64 h-auto pt-20 mt-5">
    <x-banner-slider> </x-banner-slider>

    <div>
        <x-header>Best hotels in Area</x-header>
    </div>

    <div class="mt-5">
        <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4">
            <x-hotel-card></x-hotel-card>
            <x-hotel-card></x-hotel-card>
            <x-hotel-card></x-hotel-card>
            <x-hotel-card></x-hotel-card>
            <x-hotel-card></x-hotel-card>
            <x-hotel-card></x-hotel-card>
        </div>
    </div>
</main>
