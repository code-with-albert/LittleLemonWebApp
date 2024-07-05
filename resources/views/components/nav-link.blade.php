@props(['active'])

@php
    $classes = ($active ?? false)
        ? 'border-yellow-400 text-emerald-700 focus:border-emerald-700 transition duration-150 ease-in-out lemon-bg'
        : 'border-transparent text-emerald-900 hover:bg-emerald-200 hover:text-yellow-900 hover:border-emerald-600 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge([
    'class' => $classes . " inline-flex items-center hover:transition-all ease-in-out duration-1000 px-1 pt-1 border-b-2 text-sm font-medium leading-5 focus:outline-none "
]) }}>
    {{ $slot }}
</a>