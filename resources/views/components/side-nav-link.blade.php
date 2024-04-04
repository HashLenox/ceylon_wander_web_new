@props(['active' => false])
<li>
    <a class="{{ $active ? 'bg-blue-300 dark:bg-slate-600 ' : 'hover:bg-gray-300 dark:hover:bg-gray-700 ' }}flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white group"
        aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}>
        {{ $slot }}
    </a>
</li>
