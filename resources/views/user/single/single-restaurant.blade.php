<x-layouts.user-layout>

    <div class="mt-20">

        <x-main-components.restaurant-hero :restaurant="$restaurant" />

        <x-main-components.promo-slider />

        <x-main-components.food-menu :restaurant="$restaurant" />

        <div class="items-center justify-between h-24 my-6 bg-red-200">
            <h1>Comment section</h1>
        </div>

    </div>
</x-layouts.user-layout>
