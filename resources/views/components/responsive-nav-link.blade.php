@props(['active'])

@php
    $classes = ($active ?? false)
        ? 'border-yellow-400 text-emerald-700 bg-emerald-200 focus:outline-none focus:text-emerald-900 focus:bg-emerald-100 focus:border-indigo-700 transition duration-150 ease-in-out'
        : 'border-transparent text-emerald-900 hover:text-yellow-900 hover:border-emerald-600 hover:border-emerald-300 focus:outline-none focus:text-gray-800 focus:bg-emerald-50 focus:border-emerald-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes . " block w-full ps-3 pe-4 py-2 border-l-4
block w-full ps-3 pe-4 py-2 border-l-4  text-start text-base font-medium
text-start text-base font-medium"]) }}>
    {{ $slot }}
</a>