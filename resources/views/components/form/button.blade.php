<div class="m-2">
    <button
        {{ $attributes->class(["btn btn-{$mode}", "btn-{$size}" => $size])->merge(['name' => 'button', 'type' => 'submit']) }}>{{ $slot }}
    </button>
</div>
