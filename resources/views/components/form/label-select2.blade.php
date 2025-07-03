@props(['name', 'label' => null, 'error_name' => null, 'disabled' => false, 'id' => null, 'placeholder' => null])

<label for="{{ $id ?: $name }}" class="form-label">{!! $label ?: ucfirst($name) !!}</label>

<select id="{{ $id ?: $name }}" name="{{ $name }}" @if ($disabled) disabled="disabled" @endif
    data-allow-clear="true"
    class="select2 form-select form-select-md {{ $errors->has($error_name ?: $name) ? 'is-invalid' : null }}">
    {{ $slot }}
</select>

@error($error_name ?: $name)
    <span class="invalid-feedback">{{ $message }}</span>
@enderror

@pushOnce('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
@endPushOnce


@pushOnce('js')
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script>
        const select2 = $('.select2');
        if (select2.length) {
            select2.each(function() {
                var $this = $(this);
                $this.wrap(
                    `<div class="position-relative {{ $errors->has($error_name ?: $name) ? 'is-invalid' : null }}"></div>`
                ).select2({
                    placeholder: `{{ __('admin.Select') }}`,
                    dropdownParent: $this.parent(),
                });
            });
        }
    </script>
@endPushOnce
