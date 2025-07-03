@props([
    'name',
    'label' => null,
    'error_name' => null,
    'value' => null,
    'rows' => 1,
    'disabled' => false,
    'id' => null,
])

<div class="form-group">
    <label for="{{ $id ?: $name }}" class="form-label">{{ $label ?: ucfirst($name) }}</label>

    <textarea @if ($disabled) disabled="disabled" @endif rows="{{ $rows }}"
        style="{{ $attributes['style'] }}" {{ $attributes['required'] }}
        class="{{ $attributes['class'] }} {{ $errors->has($error_name ?: $name) ? 'is-invalid' : null }}"
        name="{{ $name }}" id="{{ $id ?: $name }}">{!! $value ?: old($name) !!}</textarea>

    @error($error_name ?: $name)
        <span class="invalid-feedback">{{ $message }}</span>
    @enderror
</div>
