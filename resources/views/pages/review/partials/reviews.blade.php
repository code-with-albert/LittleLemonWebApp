<div class="relative max-w-7xl mx-auto px-4 md:px-6 lg:px-8 py-3">
        <div class="flex justify-between py-3">
                <h5 class="inline-block align-baseline text-4xl text-emerald-900">Reviews</h5>
                @auth
                <x-secondary-button x-cloak @click="toggle()" class="ms-3 flex gap-2">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 18 18">
                        <polygon  class="inline-flex" stroke-linejoin="round" stroke-width="1" points="2,2 2,16 16,16 16,2" />
                        <path class="inline-flex" stroke-width="1" d="M4 9 H14 M9 4 V14" />
                    </svg>
                    {{ __('Write a Review') }}
                </x-secondary-button>
                @endauth
        </div>

        <div class="md:grid md:grid-cols-5 gap-2">
            <div class="md:col-span-2 w-full">
                @component('components.reviews-star-summary', ['reviews' => $reviews, 'starCounts' => $starCounts])
                @endcomponent
            </div>
            <div class="md:col-span-3 w-full">
                <div class="flex flex-col w-full bg-emerald-200 p-3 gap-2 h-fit">
                    @if(!$reviewsPage->isEmpty())
                        @foreach ($reviewsPage as $item)
                            @component('components.reviews-vertical-card', ['item' => $item])
                            @endcomponent
                        @endforeach
                    @else
                        <h1>No Post</h1>
                    @endif
                </div>
                <div class="pt-3">
                    {{$reviewsPage->links()}}
                </div>
            </div>
    </div>
    