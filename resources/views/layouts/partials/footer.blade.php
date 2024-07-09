<div class="w-full">
    <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8 py-3 bg-emerald-100 lemon-bg-pattern">
        <div class="flex flex-col md:grid md:grid-cols-4 py-3 gap-3">
            <div class="px-3">
                <a href="{{ route('home') }}" class="flex md:justify-start justify-center py-2">
                    <img src="{{asset('images/assetlemon.png')}}" class="img-fluid" alt="footer image"
                        style="max-height:200px">
                </a>
            </div>
            <x-list align='middle' headerClass='md:text-right' contentClass='md:items-end'>
                <x-slot name='header'>
                    Section
                </x-slot>
                <x-slot name='content'>
                    <x-list-link href="{{ route('home') }}">Home</x-list-link>
                    <x-list-link x-on:click="toggleMaintenance()" class="cursor-not-allowed">Features</x-list-link>
                    <x-list-link x-on:click="toggleMaintenance()" class="cursor-not-allowed">Pricing</x-list-link>
                    <x-list-link x-on:click="toggleMaintenance()" class="cursor-not-allowed">FAQs</x-list-link>
                    <x-list-link x-on:click="toggleMaintenance()" class="cursor-not-allowed">About</x-list-link>
                </x-slot>
            </x-list>

            <x-list align='middle' headerClass='md:text-right' contentClass='md:items-end'>
                <x-slot name='header'>
                    Section
                </x-slot>
                <x-slot name='content'>
                    <x-list-link href="{{ route('home') }}">Home</x-list-link>
                    <x-list-link x-on:click="toggleMaintenance()" class="cursor-not-allowed">Features</x-list-link>
                    <x-list-link x-on:click="toggleMaintenance()" class="cursor-not-allowed">Pricing</x-list-link>
                    <x-list-link x-on:click="toggleMaintenance()" class="cursor-not-allowed">FAQs</x-list-link>
                    <x-list-link x-on:click="toggleMaintenance()" class="cursor-not-allowed">About</x-list-link>
                </x-slot>
            </x-list>

            <x-list align='middle' headerClass='md:text-right' contentClass='md:items-end'>
                <x-slot name='header'>
                    Section
                </x-slot>
                <x-slot name='content'>
                    <x-list-link href="{{ route('home') }}">Home</x-list-link>
                    <x-list-link x-on:click="toggleMaintenance()" class="cursor-not-allowed">Features</x-list-link>
                    <x-list-link x-on:click="toggleMaintenance()" class="cursor-not-allowed">Pricing</x-list-link>
                    <x-list-link x-on:click="toggleMaintenance()" class="cursor-not-allowed">FAQs</x-list-link>
                    <x-list-link x-on:click="toggleMaintenance()" class="cursor-not-allowed">About</x-list-link>
                </x-slot>
            </x-list>
        </div>
    </div>
</div>