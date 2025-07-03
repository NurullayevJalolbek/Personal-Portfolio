@props(['name', 'type' => 'text', 'value' => null, 'disabled' => false, 'id' => null, 'error_name' => null])

<input type="{{ $type }}" {{ $disabled ? 'disabled' : null }}
    class="form-control {{ $errors->has($name) ? 'is-invalid' : null }}" name="{{ $name }}"
    id="{{ $id ?: $name }}" @if ($value != false) value="{!! $value ?: old($name) !!}" @endif>
@error($error_name ?: $name)
    <span class="invalid-feedback">{{ $message }}</span>
@enderror
