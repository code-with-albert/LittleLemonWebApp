<a {{ $attributes->merge(['class' => 'px-4 py-2 text-center bg-yellow-400 border border-yellow-300 rounded-md font-semibold text-emerald-900 hover:text-emerald-500 tracking-widest shadow-sm hover:bg-yellow-200 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</a>
