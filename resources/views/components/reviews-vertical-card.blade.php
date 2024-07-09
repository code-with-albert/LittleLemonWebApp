<?php
$fullStar = floor($item['rating']);
$halfStar = $item['rating'] - floor($item['rating']);
?>

<div class="flex flex-col md:flex-row w-full p-5 rounded-xl bg-white">
    <div class="shrink">
        <x-dropdown align="left" width="48">
            <x-slot name="trigger">
                <button class="inline-flex items-center py-1 border border-transparent rounded-md hover:bg-yellow-200 transition ease-in-out duration-150">
                        <img src="{{asset('images/option.png')}}" class="h-5"
                        alt="option image">
                </button>
            </x-slot>

            <x-slot name="content">
                @auth
                    @if(Auth::user()->id == $item['user_id'])
                        <x-dropdown-link x-on:click="toggleMaintenance()" class="cursor-not-allowed" href="#{{-- reviews/{{$item['id']}} --}}">{{ __('Edit') }}</x-dropdown-link>
                    @else                
                        <form method="POST" action="reviews">
                        @csrf
                        @method('PATCH')
                        <input type="number" class="hidden" value="{{$item['id']}}" name="review-id" readonly>
                        <x-dropdown-button onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        {{ __('Report') }}</x-dropdown-button>
                        </form>
                    @endif
                @else
                    <x-dropdown-button @click="toggle()">{{ __('Report') }}</x-dropdown-button>
                @endauth
                
            </x-slot>
        </x-dropdown>
    </div>
    <div class="md:grid md:grid-cols-12 w-full">
        <div class="md:col-span-5 flex flex-col align-middle justify-center gap-2">
            @if($item->user['image'])
                <img src="{{asset($item->user['image'])}}" class=""
                    style="max-height:90px; object-fit: contain;" alt="user image">
            @else
                <div class="flex justify-center w-full">
                    <h1 class="rounded-full content-center h-14 w-14 text-center bg-dark-green font-lemon-yellow my-0 py-0 uppercase markazi-text-700 text-3xl">
                        {{substr($item->user['first_name'], 0, 1)}}
                    </h1>
                </div>
            @endif
            <h5 class="text-center font-medium">{{$item->user['first_name']}} .{{strtoupper(substr($item->user['first_name'], 0, 1))}}</h5>
            <div class="flex flex-row  justify-center gap-1">
                @if ($fullStar != 0)
                    @for ($i = 0; $i < $fullStar; $i++)
                        <img src="{{asset('images/star.png')}}" class="align-self-center p-0"
                            style="height:20px; width:20px" alt="star image">
                    @endfor
                @endif

                @if ($halfStar != 0)
                    <img src="{{asset('images/halfStar.png')}}" class="align-self-center p-0"
                        style="height:20px; width:20px" alt="star image">
                @endif
            </div>
        </div>

        <div class="w-full md:col-span-7 flex justify-center md:justify-start">
            <div class="w-full">
                <x-card-text>{{$item['comment']}}</x-card-text>
                <p class="timecard mt-2 text-muted">
                    {{$item['created_at']}}
                </p>
            </div>
        </div>
    </div>
</div>