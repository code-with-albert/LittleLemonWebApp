<x-app-layout>
    <x-slot:title>
        {{ __('Reviews') }}
    </x-slot:title>
    <div x-data="{
        modal: false, 
        toggle() { this.modal = ! this.modal }}" 
        class="relative">
        @include('pages.review.partials.reviews')
        @auth
            @include('pages.review.partials.review-create')
            <script src="{{asset('js/star-hover.js')}}"></script>
        @else
            @include('components.login-required-modal')
        @endauth
        @include('components.maintenance-modal')
    </div>
    <script src="{{asset('js/text-truncate.js')}}"></script>
    <script src="{{asset('js/time-lapse.js')}}"></script>
</x-app-layout>