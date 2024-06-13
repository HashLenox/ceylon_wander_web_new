@include('layouts.main')
@include('layouts.navigation_main')

@include('layouts.side_navigation')

<div class="bg-white lg:ml-64 dark:bg-slate-900">
    <main class="px-4 mx-auto max-w-7xl ">
        {{ $slot }}
    </main>
</div>
