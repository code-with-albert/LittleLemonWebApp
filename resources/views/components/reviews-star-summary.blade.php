<?php
$starSum = $reviews->sum('rating');
$reviewCount = $reviews->count();
$fullStarCount = 5;
$averageStar = $reviewCount ? round(($starSum / $reviewCount), 1) : 0;
$fullStar = floor($averageStar);
$halfStar = $averageStar - floor($averageStar);
?>

<div class="p-5 pt-3 w-full bg-teal-900 lemon-bg-pattern">
    <div class="h-full p-0 mx-0 d-flex flex-column">
        <div style="width: fit-content;">
            <div class="">
                <h1 class="inline-block align-baseline text-6xl p-0 m-0 text-yellow-300">{{$averageStar }}</h1>
                <h1 class="inline-block align-baseline text-5xl p-0 m-0 text-white">/5</h1>
            </div>
            <div class="flex flex-row gap-1">
                @if ($fullStar != 0)
                    @for ($i = 0; $i < $fullStar; $i++)
                        <img src="{{asset('images/star.png')}}" class="m-0 p-0 aspect-square"
                            style="height:25px; width:25px" alt="star image">
                    @endfor
                    @if ($halfStar != 0)
                        <img src="{{asset('images/halfStar.png')}}" class="m-0 p-0 aspect-square"
                            style="height:25px; width:25px" alt="star image">
                    @endif
                @endif
            </div>
            <h1 class="text-xl p-0 m-0 text-white">
                {{$reviewCount}}
                ratings
            </h1>
        </div>
        <div class="flex flex-col px-0 pt-2 mx-0 gap-2">
                @for ($i = 4; $i >= 0; $i--)
                    <div class="grid grid-cols-6 gap-3">
                        <div class="col-span-2 grid grid-cols-5 gap-1 content-center">
                            @for ($a = 0; $a <= $i; $a++)
                                <img src="{{asset('images/star.png')}}" class="m-0 p-0 max-h-full aspect-square"
                                    alt="star image">
                            @endfor
                            @for ($b = 0; $b < (4 - $i); $b++)
                                <img src="{{asset('images/outlineStar.png')}}" class="m-0 p-0 max-h-full aspect-square"
                                    alt="star image">
                            @endfor
                        </div>
                        <div class="col-span-3">
                            <div class="h-full w-full px-0 mx-0 bg-white">
                                <div class="h-full px-0 mx-0"
                                    style="background: var(--lemon-yellow); width: {{($reviewCount ? ($starCounts[$i] / $reviewCount) : 0) * 100}}%;">
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1 text-white">
                            {{$starCounts[$i]}}
                        </div>
                    </div>
                @endfor
        </div>
    </div>
</div>