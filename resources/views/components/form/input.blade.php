<div class="m-2">
    <input {{ $attributes->merge(['name' => 'input', 'type' => 'text', 'placeholder' => 'Enter...']) }}
        class="{{ $mode }} @error($attributes->get('name')) is-invalid @enderror"
        value="@error($attributes->get('name')){{ old($attributes->get('name')) }}@else{{ $val }}@enderror">
    @error($attributes->get('name'))
        <x-message.alert mode="danger" title="error">{{ $message }}</x-message.alert>
    @enderror
</div>
