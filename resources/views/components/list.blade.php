@props(['align' => 'left','headerClass'=>'','contentClass'=>''])

@php
    switch ($align) {
        case 'left':
            $headerAlignment = 'text-start';
            $contentAlignment = 'items-start';
            break;
        case 'middle':
            $headerAlignment = 'text-center';
            $contentAlignment = 'items-center';
            break;
        case 'right':
        default:
            $headerAlignment = 'text-right';
            $contentAlignment = 'items-end';
            break;
        } 
@endphp

<div class="w-full px-2 flex flex-col">
    <div class="{{$headerAlignment}} {{$headerClass}} w-full px-2 pb-2 font-extrabold text-emerald-700 text-4xl markazi-text-700">
        {{ $header }}
    </div>
    <div class="{{$contentAlignment}} {{$contentClass}} w-full px-2 gap-1 flex flex-col text-xl">
        {{ $content }}
    </div>
</div>