<div class="relative" 
    x-data="{
    totalCount: 0,
    cardCount: 3,
    width: 0,
    sliderWidth:0,
    cardWidth: 0,
    adjustLeftActive: false,
    adjustRightActive: true,
    scrollPosX: 0,
    adjustWidth() {
        this.totalCount = $refs.carousell.children.length;
        this.width = $refs.carousell.parentElement.clientWidth;
        if(this.width>=768) {
            this.cardCount=3;
        } else if(this.width>=640) {
            this.cardCount=2;
        } else {
            this.cardCount=1;
        };
        this.sliderWidth = (this.totalCount/this.cardCount)*this.width;
        this.cardWidth = this.width/this.cardCount;
        $refs.carousell.style.width=this.sliderWidth+'px';
        Array.from($refs.carousell.children).forEach(item=>{
            item.style.width=this.cardWidth+'px';
            item.classList.add('p-[12px]');
            item.classList.add('snap-start');
            item.classList.add('md:snap-center');
            });
        this.scrollPosX = $refs.carousellContainer.scrollLeft;
        this.adjustActive();
    },
    adjustActive() {
        (this.scrollPosX>=(this.cardWidth-12))?this.adjustLeftActive=true: this.adjustLeftActive=false; 
        (this.scrollPosX<(this.sliderWidth-(this.cardWidth*this.cardCount)-6))?this.adjustRightActive=true: this.adjustRightActive=false; 
    },
    adjustLeft() {
        this.scrollPosX = $refs.carousellContainer.scrollLeft - this.cardWidth;
        $refs.carousellContainer.scrollLeft=this.scrollPosX ;
    },
    adjustRight() {
        this.scrollPosX = $refs.carousellContainer.scrollLeft + this.cardWidth;
        $refs.carousellContainer.scrollLeft=this.scrollPosX;
    },
    }">
    <button class="absolute top-1/4 start-0 z-30 h-16 w-16 rounded-full transition-all ease-in-out duration-500 text-2xl hover:bg-yellow-400 hover:text-emerald-950 bg-yellow-400/50" 
        x-show='adjustLeftActive' x-on:click="adjustLeft()"><</button>
    <button class="absolute top-1/4 end-0 z-30 h-16 w-16 rounded-full transition-all ease-in-out duration-500 text-2xl hover:bg-yellow-400 hover:text-emerald-950 bg-yellow-400/50" 
        x-show='adjustRightActive' x-on:click="adjustRight()">></button>
    <div x-ref="carousellContainer" 
        x-on:scroll="scrollPosX = $refs.carousellContainer.scrollLeft;adjustActive();";
        class="relative max-w-7xl mx-auto overflow-x-auto no-scrollbar snap-mandatory snap-x scroll-smooth">
        <div x-ref="carousell"
            x-init="$nextTick(() => {adjustWidth();})"
            x-on:resize.window="adjustWidth();" 
            class="justify-start flex flex-row;" 
            style="transition: all 1s ease 0s;">

            {{-- Make sure --}}
            {{$slot}}
        </div>
    </div>
</div>
