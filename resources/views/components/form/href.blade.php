<div class="m-2">
    <a {{ $attributes->class(["btn-{$size}" => $size])->merge(['href' => route('home')]) }}>{{ $slot }}</a>
</div>
