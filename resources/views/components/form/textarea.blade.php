@props(['name', 'error_name' => null, 'value' => null, 'rows' => 1, 'disabled' => false, 'id' => null])

<textarea {{ $disabled ? 'disabled' : null }} rows="{{ $rows }}" style="{{ $attributes['style'] }}"
    class="{{ $attributes['class'] }} form-control {{ $errors->has($error_name ?: $name) ? 'is-invalid' : null }}"
    name="{{ $name }}" id="{{ $id ?: $name }}">{!! $value ?: old($name) !!}</textarea>

@error($error_name ?: $name)
    <span class="invalid-feedback">{{ $message }}</span>
@enderror
