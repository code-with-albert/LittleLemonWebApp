@props(['form'])

@php
    $type = ($form ?? false)
        ? 'submit'
        : 'button'
@endphp

<button {{ $attributes->merge(['type' => $type, 'class' => 'px-4 py-2 h-fit transition-all ease-in-out duration-700 bg-yellow-400 border border-yellow-500 rounded-md font-semibold text-emerald-700 hover:text-emerald-500 tracking-widest shadow-sm hover:bg-yellow-200 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
