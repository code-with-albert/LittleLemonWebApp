<div class="bg-teal-950 py-8 md:rounded-tr-[100px] chat-bg-y">
    <div class="flex flex-col gap-3 md:grid grid-cols-12 max-w-7xl mx-auto px-4 md:px-6 lg:px-8">
        <div class="flex md:grid md:col-span-8 justify-center content-center">
            <div class="flex flex-col max-w-md h-fit md:items-start items-center">
                <h1 class="markazi-text-700 text-6xl font-black text-yellow-400 lh-1">
                    About us
                </h1>
                <h1 class="markazi-text-700 text-4xl font-medium text-white">
                    Little Lemon
                </h1>
                <p class="text-justify text-xl text-white max-w-md md:max-w-xl">
                    Some quick example text to build on the card title and make up the bulk of the card's content.
                </p>
                <x-secondary-button x-on:click="toggleMaintenance()" class="cursor-not-allowed text-xl w-fit my-2" href="#">Learn More About Little Lemon</x-secondary-link-button>    
            </div>
        </div>
        <div class="flex md:grid md:col-span-4 justify-center content-center justify-items-center">
            <img src="{{asset('images/restaurant chef B.jpg')}}" class="md:rounded-tr-[100px] md:border-[20px] border-teal-900/50" alt="about image"
                style="max-height:300px;">
        </div>
    </div>
</div>