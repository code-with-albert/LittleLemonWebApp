<form method="POST">
    @csrf
    <!-- Modal -->
    <div x-cloak x-show="{{$errors->any()?'!modal' : 'modal'}}" tabindex="-1" aria-hidden="true" class="flex fixed top-0 right-0 left-0 z-50 justify-center items-center w-full inset-0 max-h-full bg-slate-600/50">
        <!-- Card -->
        <div class="relative py-3 w-full max-w-md max-h-full bg-white rounded-xl" @click.outside="toggle()">
            <!-- Card Content -->
            <div class="justify-center items-center w-full h-full">
                <!-- Card Header -->
                <div class="flex flex-row p-3 justify-between w-full bg-indigo-50 mb-3">
                    <!-- Card Title -->
                    <h1 class="text-2xl text-emerald-700 font-medium">Write your Review</h1>
                    <button @click="toggle()" type="button" class=" text-emerald-700 hover:text-emerald-600 hover:bg-yellow-400 rounded-full aspect-square h-full" aria-label="Close">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <!-- Card Body -->
                <div class="flex flex-col px-3 gap-2 w-full">
                    <div class="flex flex-row gap-2 w-full h-14">
                        @for($i = 1; $i <= 5; $i++)
                            <div class="star star-full m-0 p-0 max-h-full aspect-square" id="star-{{$i}}">
                            </div>
                        @endfor
                        <input type="number" id="star-count" name="review-star-count"
                        class="text-5xl align-middle font-dark-green w-10" value="5" readonly>
                    </div>

                    <input type="text" name="review-user-id" value="{{Auth::user()->id}}" hidden>
                    <div>
                        <x-input-label class="text-2xl" for="comment" :value="__('Comment:')" />
                        <x-text-area id="comment" class="block mt-1 w-full" type="text" name="review-comment" :value="old('review-comment')" autofocus/>
                        <x-input-error :messages="$errors->get('review-comment')" class="text-md" />
                    </div>
                
                    <x-secondary-button class="w-full text-2xl" :form="true">
                        {{ __('Submit') }}
                    </x-secondary-button>
                    
                </div>
            </div>
        </div>
    </div>
</form>

