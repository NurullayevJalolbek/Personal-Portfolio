@props([
    'name',
    'label' => null,
    'error_name' => null,
    'value' => null,
    'type' => 'file',
    'disabled' => false,
    'readonly' => false,
    'id' => null,
    'class' => null,
    'baseClass' => 'form-control',
    'is_required' => false,
])

<label for="{{ $id ?: $name }}" class="form-label mt-4">
    {!! $label ?: ucfirst($name) !!}
    @if ($is_required)
        <sup class="text-danger">*</sup>
    @endif
</label>

<input type="{{ $type }}" {{ $disabled ? 'disabled' : null }} {{ $readonly ? 'readonly' : null }}
    class="{{ $baseClass }} {{ $class }} {{ $errors->has($error_name ?: $name) ? 'is-invalid' : null }}"
    name="{{ $name }}" id="{{ $id ?: $name }}" accept="{{ $attributes['accept'] }}"
    @if ($value != false) value="{!! $value ?: old($name) !!}" @endif>

@error($error_name ?: $name)
    <span class="invalid-feedback">{{ $message }}</span>
@enderror

