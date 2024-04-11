@include('layouts.main')
@include('layouts.navigation_main')

@include('layouts.side_navigation')


<main class="p-4 md:ml-64 h-auto pt-20 mt-5">

    <div class="container">
        <div class="flex">
            <div class="px-2 w-full xl:w-4/6">
                <livewire:feed-post />
                <livewire:feed-post />
                <livewire:feed-post />
                <livewire:feed-post />
            </div>
            <div class="px-2 hidden xl:flex xl:w-2/6">
                <div class="bg-red-200 h-96 w-full p-4"> Advertisment Area</div>
            </div>
        </div>
    </div>


</main>
