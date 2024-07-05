<x-app-layout>
    <x-slot:title>
        {{ __('Little Lemon') }}
    </x-slot:title>
    <div class="relative">
        @include('pages.home.partials.banner')
        @include('pages.home.partials.specials')
        @include('pages.home.partials.reviews')
        @include('pages.home.partials.about')
        @include('components.maintenance-modal')
    </div>
    <script src="{{asset('js/text-truncate.js')}}"></script>
    <script src="{{asset('js/time-lapse.js')}}"></script>
</x-app-layout>