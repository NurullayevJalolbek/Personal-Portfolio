@props([
    'name',
    'label' => null,
    'error_name' => null,
    'value' => null,
    'type' => 'text',
    'disabled' => false,
    'readonly' => false,
    'id' => null,
    'class' => null,
    'baseClass' => 'form-control',
    'is_required' => false,
])

<label for="{{ $id ?: $name }}" class="form-label">
    {!! $label ?: ucfirst($name) !!} @if ($is_required)
        <sup class="text-danger">*</sup>
    @endif
</label>

<input type="{{ $type }}" {{ $disabled ? 'disabled' : null }} {{ $readonly ? 'readonly' : null }}
    class="phone-prefix {{ $baseClass }} {{ $class }} {{ $errors->has($error_name ?: $name) ? 'is-invalid' : null }}"
    name="{{ $name }}" id="{{ $id ?: $name }}"
    @if ($value != false) value="{!! $value ?: old($name) !!}" @endif>

@error($error_name ?: $name)
    <span class="invalid-feedback">{{ $message }}</span>
@enderror

@pushOnce('js')
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script>
        const phone = {{Js::from($value)}},
            cleave = new Cleave('.phone-prefix', {
                prefix: "+998",
                blocks: [4, 2, 3, 2, 2],
                numericOnly: true,
            });
        cleave.setRawValue(phone);
    </script>
@endPushOnce
