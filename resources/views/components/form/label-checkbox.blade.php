@props([
    'name',
    'label' => null,
    'error_name' => null,
    'value' => null,
    'disabled' => false,
    'id' => null,
    'class' => null,
    'checked' => false,
    'is_required' => false,
])

<div class="form-check mt-3">
    <input type="checkbox" {{ $disabled ? 'disabled' : null }}
        class="form-check-input {{ $class }} {{ $errors->has($error_name ?: $name) ? 'is-invalid' : null }}"
        name="{{ $name }}" id="{{ $id ?: $name }}"
        @if ($value != false) value="{!! $value ?: old($name) !!}" @endif @checked($checked)>

    <label for="{{ $id ?: $name }}" class="form-check-label">
        {!! $label ?: ucfirst($name) !!} @if ($is_required)
            <sup class="text-danger">*</sup>
        @endif
    </label>

    @error($error_name ?: $name)
        <span class="invalid-feedback">{{ $message }}</span>
    @enderror
</div>
