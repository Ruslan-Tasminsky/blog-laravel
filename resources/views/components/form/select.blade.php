<div class="m-2">
    <select {{ $attributes->merge(['name' => 'select']) }}
        class="{{ $mode }} @error($attributes->get('name')) is-invalid @enderror">
        <option value="{{ null }}">--Select--</option>
        @foreach ($collection as $k => $v)
            <option value="{{ $k }}">{{ $v }}</option>
        @endforeach
    </select>
    @error($attributes->get('name'))
        <x-message.alert mode="danger" title="error">{{ $message }}</x-message.alert>
    @enderror
</div>
