@include('layouts.main')
@include('layouts.navigation_main')

@include('layouts.side_navigation')


<main class="p-4 lg:ml-64 h-auto pt-20 mt-5">

    <div class="container">
        <div class="flex">
            <div class="px-2 w-full xl:w-4/6">
                @forelse ($reviews as $review)
                    <livewire:feed-post :feed="$review" />
                @empty
                    <div
                        class="col-span-4 bg-primary-100 dark:bg-gray-700 flex justify-center items-center rounded-xl border-dashed border-2 border-gray-700 dark:border-gray-500">
                        <div class="text-center">
                            <p class="py-16 text-gray-800 dark:text-white ">No resturent found to your criteria</p>
                        </div>
                    </div>
                @endforelse
            </div>
            <div class="px-2 hidden xl:flex xl:w-2/6">
                <div class="bg-red-200 h-96 w-full p-4"> Advertisment Area</div>
            </div>
        </div>
    </div>


</main>
