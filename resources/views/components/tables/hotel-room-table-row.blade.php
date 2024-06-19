<tr class="border-b dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-gray-700 cursor-pointer transition"
    id="table-column-header-{{ $room->id }}" data-accordion-target="#table-column-body-{{ $room->id }}"
    aria-expanded="false" aria-controls="table-column-body-{{ $room->id }}">
    <td class="p-3 w-4 align-top">
        <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewbox="0 0 20 20" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd" />
        </svg>
    </td>
    <th scope="row"
        class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white flex items-center text-lg">
        <img src="https://media.designcafe.com/wp-content/uploads/2023/09/11183929/luxury-bedroom-interior-design.jpg"
            alt="iMac Front Image" class="h-8 w-8 mr-3 rounded-full">
        {{ $room->name }}
    </th>
    <td class="px-4 py-3 items-start align-top text-gray-900 whitespace-nowrap dark:text-white font-semibold">
        {{ $room->available_rooms }}</td>

    <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
        @forelse ($room->price as $price)
            <div class="flex py-2 border-b-2 border-blue-700 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                    class="mr-1">
                    <path fill="currentColor"
                        d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4" />
                </svg>
                X {{ $price['fields']['adults'] }}
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                    class="ml-2 mr-1">
                    <path fill="currentColor"
                        d="M20.5 6c-2.61.7-5.67 1-8.5 1s-5.89-.3-8.5-1L3 8c1.86.5 4 .83 6 1v13h2v-6h2v6h2V9c2-.17 4.14-.5 6-1zM12 6c1.1 0 2-.9 2-2s-.9-2-2-2s-2 .9-2 2s.9 2 2 2" />
                </svg>
                X {{ $price['fields']['child'] }}

                <div
                    class="flex items-center text-center ml-4 {{ $price['fields']['meal'] ? 'bg-green-100 p-1 text-green-600' : 'bg-red-100 p-1 text-red-600' }} rounded-xl text-sm px-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 512 512"
                        class="mr-1">
                        <path fill="currentColor"
                            d="M158.87.15c-16.16-1.52-31.2 8.42-35.33 24.12l-14.81 56.27c187.62 5.49 314.54 130.61 322.48 317l56.94-15.78c15.72-4.36 25.49-19.68 23.62-35.9C490.89 165.08 340.78 17.32 158.87.15m-58.47 112L.55 491.64a16.21 16.21 0 0 0 20 19.75l379-105.1c-4.27-174.89-123.08-292.14-299.15-294.1zM128 416a32 32 0 1 1 32-32a32 32 0 0 1-32 32m48-152a32 32 0 1 1 32-32a32 32 0 0 1-32 32m104 104a32 32 0 1 1 32-32a32 32 0 0 1-32 32" />
                    </svg>
                    {{ $price['fields']['meal'] ? 'with food' : 'without food' }}

                </div>
            </div>
        @empty
            no records
        @endforelse
    </td>
    <td class="text-end px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
        @forelse ($room->price as $price)
            <div class="py-2 border-b-2 border-blue-700 font-semibold text-lg">
                <span
                    class="text-sm text-red-500 line-through mr-2">{{ $price['fields']['discount'] ? $price['fields']['price'] : '' }}</span>
                LKR {{ $price['fields']['price'] - $price['fields']['discount'] }}
            </div>
        @empty
            no records
        @endforelse
    </td>
</tr>
<tr class="hidden flex-1 overflow-x-auto w-full" id="table-column-body-{{ $room->id }}"
    aria-labelledby="table-column-header-{{ $room->id }}">
    <td class="p-4 border-b dark:border-gray-700" colspan="9">
        <div class="grid grid-cols-4 gap-4 mb-4">
            @php
                $images = $room->images;
                $imagesCount = count($images);
                $imagesToShow = min($imagesCount, 4);
                $skeletonsToShow = 4 - $imagesToShow;
            @endphp

            @for ($i = 0; $i < $imagesToShow; $i++)
                <div
                    class="relative bg-gray-100 sm:w-full h-32 sm:h-36 dark:bg-gray-700 flex items-center justify-center overflow-hidden rounded-lg">
                    <div class="h-full w-full bg-cover bg-center"
                        style="background-image: url('{{ asset('storage/' . $images[$i]) }}');">
                    </div>
                </div>
            @endfor

            @for ($i = 0; $i < $skeletonsToShow; $i++)
                <div role="status" class="animate-pulse rtl:space-x-reverse">
                    <div
                        class="flex p-2 items-center justify-center rounded-lg sm:w-full h-32 sm:h-36 bg-gray-300 rounded dark:bg-gray-700">
                        <svg class="w-10 h-10 text-gray-200 dark:text-gray-600" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path
                                d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                        </svg>
                    </div>
                </div>
            @endfor


        </div>
        <div class="flex my-2 p-2 space-x-2">
            <div
                class="flex py-2 px-4 w-fit border border-gray-700 dark:border-gray-300 rounded text-md text-black dark:text-white font-semibold ">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                    class="mr-1">
                    <path fill="currentColor"
                        d="M5 17h1.5v-1.5h11V17H19v-6.5h-.75V7H5.75v3.5H5zm7.75-6.5v-2h4v2zm-5.5 0v-2h4v2zM6.5 14v-2h11v2zM2 22V2h20v20zm2-2h16V4H4zm0 0V4z" />
                </svg>
                Size {{ $room->size }}
            </div>

            @if ($room->features)
                @foreach ($room->features as $feature)
                    <div
                        class="flex py-2 px-4 w-fit border border-gray-700 dark:border-gray-300 rounded text-md text-black dark:text-white font-semibold ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            class="mr-1">
                            <path fill="currentColor"
                                d="M5 17h1.5v-1.5h11V17H19v-6.5h-.75V7H5.75v3.5H5zm7.75-6.5v-2h4v2zm-5.5 0v-2h4v2zM6.5 14v-2h11v2zM2 22V2h20v20zm2-2h16V4H4zm0 0V4z" />
                        </svg>
                        Size {{ $room->size }}
                    </div>
                @endforeach
            @endif
        </div>
        <div>
            <h6 class="mb-2 text-base leading-none font-medium text-gray-900 dark:text-white">
                Details</h6>
            <div class="text-base text-gray-500 dark:text-gray-400 max-w-screen-md">
                {{ $room->description }}</div>
        </div>
        <div class="grid grid-cols-4 gap-4 mt-4">
            <div class="col-span-2 relative p-3 bg-gray-100 rounded-lg dark:bg-gray-700 items-start justify-between">
                <h6 class="mb-2 text-base leading-none font-medium text-gray-900 dark:text-white">
                    Room Facilities:</h6>
                <div class="grid grid-cols-3 gap-4 px-4">
                    <div class="flex text-sm text-gray-700 dark:text-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-5 mr-1">
                            <path fill-rule="evenodd"
                                d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z"
                                clip-rule="evenodd" />
                        </svg>
                        Full AC
                    </div>
                </div>
            </div>

            <div class="relative p-3 bg-gray-100 rounded-lg dark:bg-gray-700">
                <h6 class="mb-2 text-base leading-none font-medium text-gray-900 dark:text-white">
                    Room included</h6>
                <div class="items-center text-gray-700 dark:text-gray-200">
                    <span class="font-semibold">Welcome drink</span> - You will gate 2 ice coffees when check-in.
                </div>
            </div>

            <div class="relative p-3 bg-gray-100 rounded-lg dark:bg-gray-700 space-y-2">
                <h6 class="mb-2 text-base leading-none font-medium text-gray-900 dark:text-white">
                    Note</h6>

                @if ($room->free_cancellation)
                    <div class="items-center text-green-500 dark:text-green-400">
                        <span class="font-semibold">Free cancellation</span> - You can cancel reservation without any
                        charges
                    </div>
                @else
                    <div class="items-center text-red-500 dark:text-red-400">
                        <span class="font-semibold">Paid cancellation</span> - You will charge an amount when
                        cancellation
                    </div>
                @endif

                @if ($room->smoking)
                    <div class="items-center text-green-500 dark:text-green-400">
                        <span class="font-semibold">Can smoke</span> - smoking is allowed inside the room
                    </div>
                @else
                    <div class="items-center text-red-500 dark:text-red-400">
                        <span class="font-semibold">No smoking</span> - smoking not allowed inside the room
                    </div>
                @endif

                @if ($room->prepayment)
                    <div class="items-center text-red-500 dark:text-red-400">
                        <span class="font-semibold">Need prepayment</span> - Prepayment needed when you reserve room
                    </div>
                @else
                    <div class="items-center text-green-500 dark:text-green-400">
                        <span class="font-semibold">No prepayment</span> - No prepayment needed when you reserve room
                    </div>
                @endif



            </div>
        </div>
        <div class="flex items-center space-x-3 mt-4">
            <button type="button"
                class="py-2 px-3 flex items-center text-sm font-medium text-center text-white bg-primary-700 rounded-lg hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewbox="0 0 20 20" fill="currentColor"
                    aria-hidden="true">
                    <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                    <path fill-rule="evenodd"
                        d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                        clip-rule="evenodd" />
                </svg>
                Edit
            </button>
            <button type="button"
                class="py-2 px-3 flex items-center text-sm font-medium text-center text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Preview</button>
            <button type="button"
                class="py-2 px-3 flex items-center text-sm font-medium text-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 rounded-lg dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewbox="0 0 20 20" fill="currentColor"
                    aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                        clip-rule="evenodd" />
                </svg>
                Delete
            </button>
        </div>
    </td>
</tr>
