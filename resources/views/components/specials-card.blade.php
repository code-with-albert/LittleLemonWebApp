<div>
    <div class="flex flex-col py-3 rounded-lg bg-teal-950">
        <img src="{{$item->menu['image']}}" class="" alt="...">
        <div class=" p-2">
            <h5 class="select-none">{{$item->menu['name']}}</h5>
            <x-card-text class="text-slate-300 select-none">{{$item->menu['description']}}</x-card-text>
            <div class="flame-bg flex flex-col gap-2">
                <p class="select-none text-yellow-500 font-semibold text-xl">P{{$item->menu['price']}}</p>
                <x-secondary-link-button href="#" x-on:click="toggleMaintenance()" class="cursor-not-allowed font-semibold text-xl w-fit">Order Delivery</x-secondary-link-button>
            </div>
        </div>
    </div>
</div>