<div>
    <section class="py-3 sm:py-5">
        <div class="mx-auto max-w-screen-2xl px-4 lg:px-10">
            <!-- Start coding here -->
            <div class="bg-gray-50 dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div
                    class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4 border-b dark:border-gray-700">
                    <div class="w-full flex items-center space-x-3">
                        <h5 class="dark:text-white font-semibold">Available Accommodation types</h5>
                        <div class="text-gray-400 font-medium">1 results</div>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs uppercase bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <th scope="col" class="px-4 py-3 w-[3rem]">
                                    <span class="sr-only">Expand/Collapse Row</span>
                                </th>
                                <th scope="col" class="px-4 py-3 w-[20rem]">Accommodation Type</th>
                                <th scope="col" class="px-4 py-3 w-[6rem]">Available
                                    rooms</th>
                                <th scope="col" class="px-4 py-3 w-[6rem]">Number of
                                    guests</th>
                                <th scope="col" class="text-right px-4 py-3 w-[7rem]">Price</th>
                            </tr>
                        </thead>

                        <tbody data-accordion="table-column">
                            @forelse ($rooms as $room)
                                <x-tables.hotel-room-table-row :room="$room" />
                            @empty
                                <div
                                    class="col-span-4 bg-primary-100 dark:bg-gray-700 flex justify-center items-center rounded-xl border-dashed border-2 border-gray-700 dark:border-gray-500">
                                    <div class="text-center">
                                        <p class="py-16 text-gray-800 dark:text-white ">No records found to
                                            your criteria</p>
                                    </div>
                                </div>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
