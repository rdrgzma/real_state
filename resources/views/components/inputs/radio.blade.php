<div class="form-check">

    <input
        type="radio"
        id="{{ $id ?? $name }}"
        name="{{ $name }}"
        value="{{ $value ?? 1 }}"
        {{ $checked ? 'checked' : '' }}
        {{ $attributes->merge(['class' => 'form-check-input']) }}
    >

    @if($label ?? null)
        <label class="form-check-label" for="{{ $name }}">
            {{ $label }}
        </label>
    @endif
</div>

@error($name)
@include('components.inputs.partials.error')
@enderror
