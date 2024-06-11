@include('layouts.main')
@include('layouts.navigation_main')

@include('layouts.side_navigation')

<div class="lg:ml-64">
    <main class="px-4 max-w-7xl mx-auto">
        {{ $slot }}
    </main>
</div>
