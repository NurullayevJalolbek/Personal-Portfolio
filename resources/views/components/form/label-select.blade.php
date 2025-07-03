@props(['name', 'label' => null, 'error_name' => null, 'disabled' => false, 'id' => null])

<label for="{{ $id ?: $name }}" class="form-label">{!! $label ?: ucfirst($name) !!}</label>

<select id="{{ $id ?: $name }}" name="{{ $name }}" @if ($disabled) disabled="disabled" @endif
    class="form-select w-100 {{ $errors->has($error_name ?: $name) ? 'is-invalid' : null }}">
    {{ $slot }}
</select>

@error($error_name ?: $name)
    <span class="invalid-feedback">{{ $message }}</span>
@enderror

@pushOnce('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
@endPushOnce


@pushOnce('js')
    <script src="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
@endPushOnce
