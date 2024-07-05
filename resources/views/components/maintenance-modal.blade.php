<!-- Modal -->
<div x-cloak x-show="maintenance" tabindex="-1" aria-hidden="true" class="flex fixed top-0 right-0 left-0 z-50 justify-center items-center w-full inset-0 max-h-full bg-slate-600/50">
    <!-- Card -->
    <div x-show="maintenance"  x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0 scale-95" 
    x-transition:enter-end="opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-75" 
    x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-95"  
    class="relative py-3 w-full max-w-xs max-h-full bg-white lemon rounded-xl" @click.outside="toggle()">
        <!-- Card Content -->
        <div class="justify-center items-center w-full h-full">
            <!-- Card Header -->
            <div class="flex flex-row p-3 justify-between w-full bg-yellow-300/70 mb-3">
                <!-- Card Title -->
                <h1 class="text-2xl text-orange-700 font-medium">Notice!</h1>
                <button @click="toggleMaintenance()" type="button" class="border-2 border-transparent hover:border-emerald-700 text-emerald-700 hover:text-emerald-700 hover:bg-orange-500 rounded-full h-full" aria-label="Close">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <!-- Card Body -->
            <div class="flex flex-col px-3 gap-2 w-full">
                <div class="flex flex-col justify-center w-full py-4 gap-2">
                    <div class="flex justify-center w-full">
                        <div class="flex h-24 w-24 p-1 rounded-full justify-center border-4 border-orange-700 bg-orange-300 ">
                            <image src="{{asset('images/lemonMaintenance.png')}}" alt="maintenance icon" >
                        </div>
                    </div>
                    <h1 class="text-xl text-gray-700 font-medium text-center w-full">Oops! Under maintenance. Sorry for the inconvenience.</h1>
                </div>
            </div>
        </div>
    </div>
</div>
