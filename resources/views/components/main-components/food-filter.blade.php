<div class="container mx-auto px-4 py-8 bg-red-100" x-data="{ filter: 'all' }">

    <div class="flex items-start justify-between mb-8">
        <!-- Filter Tabs -->
        <div class="flex items-start justify-start">
            <button @click="filter = 'all'" :class="{ 'bg-blue-500 text-white': filter === 'all' }"
                class="px-4 py-2 rounded-lg mr-2">All</button>
            <button @click="filter = 'headsets'" :class="{ 'bg-blue-500 text-white': filter === 'headsets' }"
                class="px-4 py-2 rounded-lg mr-2">Headsets</button>
            <button @click="filter = 'mouse'" :class="{ 'bg-blue-500 text-white': filter === 'mouse' }"
                class="px-4 py-2 rounded-lg mr-2">Mouse</button>
            <button @click="filter = 'keyboards'" :class="{ 'bg-blue-500 text-white': filter === 'keyboards' }"
                class="px-4 py-2 rounded-lg">Keyboards</button>
        </div>

        <div class="flex items-center">
            <input type="text" placeholder="Search..." class="px-3 py-1 border border-gray-300 rounded-lg">
            <button class="ml-2 px-4 py-1 bg-blue-500 text-white rounded-lg">Search</button>
        </div>
    </div>

    <!-- Product Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        <!-- Headset Card -->
        <div class="bg-white p-4 rounded-lg shadow" x-show="filter === 'all' || filter === 'headsets'">
            <img src="https://via.placeholder.com/150" alt="Headset" class="w-full h-32 object-cover mb-2">
            <h2 class="text-lg font-bold mb-2">Headset</h2>
            <p class="text-gray-700">High-quality headset for gaming and music.</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow" x-show="filter === 'all' || filter === 'headsets'">
            <img src="https://via.placeholder.com/150" alt="Headset" class="w-full h-32 object-cover mb-2">
            <h2 class="text-lg font-bold mb-2">Headset</h2>
            <p class="text-gray-700">High-quality headset for gaming and music.</p>
        </div>

        <!-- Mouse Card -->
        <div class="bg-white p-4 rounded-lg shadow" x-show="filter === 'all' || filter === 'mouse'">
            <img src="https://via.placeholder.com/150" alt="Mouse" class="w-full h-32 object-cover mb-2">
            <h2 class="text-lg font-bold mb-2">Mouse</h2>
            <p class="text-gray-700">Precision gaming mouse with customizable buttons.</p>
        </div>

        <!-- Keyboard Card -->
        <div class="bg-white p-4 rounded-lg shadow" x-show="filter === 'all' || filter === 'keyboards'">
            <img src="https://via.placeholder.com/150" alt="Keyboard" class="w-full h-32 object-cover mb-2">
            <h2 class="text-lg font-bold mb-2">Keyboard</h2>
            <p class="text-gray-700">Mechanical keyboard with RGB lighting.</p>
        </div>
    </div>
</div>
