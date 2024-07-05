<div class="container m-0 p-0" x-data="{height: 0,clamp: false}">
    <p 
    :class="clamp ? '' : 'line-clamp-4'"
    x-cloak
    x-ref="listen"
    x-init="$nextTick(() => {height = $refs.listen.clientHeight - $refs.listen.scrollHeight})"
    x-on:resize.window="clamp = false; height = $refs.listen.clientHeight - $refs.listen.scrollHeight;"
    {{ $attributes->merge(['class' => 'w-full text-start']) }}>{{ $slot }}</p>
    <a x-show="height!=0" :class="clamp ? 'text-orange-500':'text-emerald-500'" x-on:click="clamp = ! clamp" class="text-green-600 cursor-pointer link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
        {{$attributes}} x-text="clamp ? 'show less' : 'show more'"></a>
</div>
