@props([
    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
    </svg>',
    'colour' => 'blue',
])

<div id="toast-default"
    class=" fixed top-16 right-4 z-50 flex items-center w-full max-w-xs p-4 text-{{ $colour }}-500 bg-white rounded-lg shadow dark:text-{{ $colour }}-400 dark:bg-gray-800 border-2 border-{{ $colour }}-500 "
    role="alert">
    <div
        class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-{{ $colour }}-500 bg-{{ $colour }}-100 rounded-lg dark:bg-{{ $colour }}-800 dark:text-{{ $colour }}-200">
        {!! $icon !!}
        <span class="sr-only">Icon</span>
    </div>
    <div class="ms-3 text-sm font-normal">{{ $slot }}</div>
    <button type="button"
        class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
        onclick="hideAlert()" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
    </button>
</div>

<script>
    function showAlert() {
        const toast = document.getElementById('toast-default');
        toast.classList.remove('hidden');

        // Set timeout to auto-close the alert after 20 seconds (20000 milliseconds)
        setTimeout(() => {
            hideAlert();
        }, 20000);
    }

    function hideAlert() {
        document.getElementById('toast-default').classList.add('hidden');
    }

    // Example usage: Show the alert after 2 seconds
    setTimeout(showAlert, 2000);
</script>
