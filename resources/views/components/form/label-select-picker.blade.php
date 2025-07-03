@props([
    'name',
    'multiple' => null,
    'label' => null,
    'show_subtext' => false,
    'error_name' => null,
    'disabled' => false,
    'id' => null,
])
<label for="{{ $id ?: $name }}" class="form-label">{{ $label ?: ucfirst($name) }}</label>

<select id="{{ $id ?: $name }}" @if ($multiple) multiple @endif name="{{ $name }}"
    @if ($disabled) disabled="disabled" @endif
    @if ($show_subtext) data-show-subtext="true" @endif data-live-search="true"
    class="selectpicker w-100 {{ $errors->has($error_name ?: $name) ? 'is-invalid' : null }}" data-style="btn-default">
    {{ $slot }}
</select>

@error($error_name ?: $name)
    <span class="invalid-feedback">{{ $message }}</span>
@enderror
