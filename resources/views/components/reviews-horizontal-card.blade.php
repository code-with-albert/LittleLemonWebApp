<?php
$fullStar = floor($item['rating']);
$halfStar = $item['rating'] - floor($item['rating']);
?>

<div>
    <div class="flex flex-col p-3 rounded-lg bg-white min-h-80">
        <div class="flex py-2 justify-center">
            @if ($fullStar != 0)
                @for ($i = 0; $i < $fullStar; $i++)
                    <img src="{{asset('images/star.png')}}" class="align-self-center mx-1 p-0" style="height:20px; width:20px"
                        alt="star image">
                @endfor
            @endif

            @if ($halfStar != 0)
                <img src="{{asset('images/halfStar.png')}}" class="align-self-center mx-1 p-0" style="height:20px; width:20px"
                    alt="star image">
            @endif
        </div>
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
        <div class="">
            <h5 class="text-center font-medium text-teal-800 text-2xl">{{$item->user['first_name']}} .{{strtoupper(substr($item->user['first_name'], 0, 1))}}</h5>
            <x-card-text class="text-emerald-950">{{$item['comment']}}</x-card-text>
            <p class="timecard mt-2">
                {{$item['created_at']}}
            </p>
            <div class="chat-bg w-full h-5 mt-1">
            </div>
        </div>
    </div>
</div>