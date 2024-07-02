<div>
    <section class="py-3 sm:py-5">
        <div class="px-4 mx-auto max-w-screen-2xl lg:px-10">
            <!-- Start coding here -->
            <div class="relative overflow-hidden shadow-md bg-gray-50 dark:bg-gray-800 sm:rounded-lg">
                <div
                    class="flex flex-col items-center justify-between p-4 space-y-3 border-b md:flex-row md:space-y-0 md:space-x-4 dark:border-gray-700">
                    <div class="flex items-center w-full space-x-3">
                        <h5 class="font-semibold dark:text-white">Available Accommodation types</h5>
                        <div class="font-medium text-gray-400">1 results</div>
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
                                    class="flex items-center justify-center col-span-4 border-2 border-gray-700 border-dashed bg-slate-200 bg-primary-100 dark:bg-gray-700 rounded-xl dark:border-gray-500">
                                    <div class="text-center ">
                                        <p class="py-16 font-bold text-gray-800 dark:text-white ">No Reservations found.
                                        </p>
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
