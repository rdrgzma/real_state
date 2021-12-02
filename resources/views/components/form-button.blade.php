@props([
'method' => 'POST',
'action'
])

<x-form method="{{ $method }}" action="{{ $action }}">
    @csrf
    <div>
        <button type="submit" {{ $attributes }}>
            {{ $slot }}
        </button>
    </div>
</x-form>
