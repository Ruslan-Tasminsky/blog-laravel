<form {{ $attributes->merge(['action' => route('home'), 'method' => 'POST']) }}>
    @csrf
    @method($methodform)
    {{ $slot }}
</form>
