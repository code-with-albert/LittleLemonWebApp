<div class="w-full mb-4">
    <div class="relative max-w-7xl mx-auto px-4 md:px-6 lg:px-8 py-3">
        <div class="flex justify-between py-3">
            <h5 class="inline-block align-middle text-3xl sm:text-4xl text-emerald-900">Reviews</h5>
            <x-secondary-link-button href="reviews" class="ms-3 flex gap-2">
                {{ __('View Reviews') }}
            </x-secondary-link-button>
        </div>
        @if(!$reviewsPage->isEmpty())
            <x-carousell>
                @foreach ($reviewsPage as $item)
                    @component('components.reviews-horizontal-card', ['item' => $item])
                    @endcomponent
                @endforeach
            </x-carousell>
        @else
            <h1>No Post</h1>
        @endif
    </div>
</div>