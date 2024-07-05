<div class="bg-teal-950 py-8 md:mb-[80px] lemon-bg-pattern md:rounded-bl-[100px]">
    <div class="flex flex-col gap-3 md:flex-row max-w-7xl mx-auto px-4 md:px-6 lg:px-8">
        <div class="flex w-full items-center">
            <!-- Card -->
            <div class="flex flex-col w-full md:text-start text-center md:items-start items-center">
                <h1 class="markazi-text-700 text-6xl font-black text-yellow-400">Little Lemon</h1>
                <h1 class="markazi-text-700 text-4xl font-medium text-white">Sta.Cruz, Laguna</h1>
                <p class="text-justify text-xl text-white max-w-md md:max-w-xl">
                    Some quick example text to build on the card title and make up the bulk of the card's content.
                </p>
                <x-secondary-button x-on:click="toggleMaintenance()" class="cursor-not-allowed text-xl w-fit my-2" href="#">Reserve Table</x-secondary-link-button>
            </div>
        </div>
        <div class="relative md:top-[80px] w-full flex justify-center md:justify-end">
            <img src="{{asset('images/restaurant.jpg')}}" class="rounded-0 border-0 rounded-[40px] md:rounded-[40px] md:border-[30px] border-orange-200/50" alt="hero image"
                style="max-height:300px;">
        </div>
    </div>
</div>
