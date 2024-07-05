<div class="w-full bg-slate-300 lemon-bg-pattern md:rounded-bl-[100px] md:rounded-tr-[100px] mb-4">
    <div class="relative max-w-7xl mx-auto px-4 md:px-6 lg:px-8 py-3">
        <div class="flex justify-between py-3">
            <h5 class="inline-block align-middle text-3xl sm:text-4xl text-emerald-900">This weeks specials!</h5>
            <x-secondary-link-button x-on:click="toggleMaintenance()" class="cursor-not-allowed ms-3 flex gap-2">
                {{ __('Online Menu') }}
            </x-secondary-link-button>
        </div>
        <x-carousell>
            @foreach ($specialsMenu as $item)
                @component('components.specials-card', ['item' => $item])
                @endcomponent
            @endforeach
        </x-carousell>
        </div>
    </div>
</div>
