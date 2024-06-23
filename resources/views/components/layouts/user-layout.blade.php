@include('layouts.main')
@include('layouts.navigation_main')

@include('layouts.side_navigation')

<div class="lg:ml-64">
    <main class="px-4 mx-auto max-w-7xl">
        @if (session('success'))
            <x-alert-box :colour="'green'">
                {{ session('success') }}
            </x-alert-box>
        @endif

        @if ($errors->any())
            <x-alert-box :colour="'red'">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </x-alert-box>
        @endif

        {{ $slot }}
    </main>
</div>
