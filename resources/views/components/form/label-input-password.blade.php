@props(['name', 'label' => null, 'error_name' => null, 'disabled' => false, 'id' => null])

<div class="form-password-toggle">
    <div class="d-flex justify-content-between">
        <label for="{{ $id ?: $name }}" class="form-label">
            {!! $label ?: ucfirst($name) !!}
        </label>
    </div>
    <div class="input-group input-group-merge {{ $errors->has('password') ? 'is-invalid' : null }}">
        <input type="password" id="{{ $id ?: $name }}"
            class="form-control {{ $errors->has('password') ? 'is-invalid' : null }}" name="{{ $name }}"
            {{-- placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" --}} aria-describedby="password" />
        <span class="input-group-text cursor-pointer">
            <i class="bx bx-hide"></i>
        </span>
    </div>
    @error($error_name ?: $name)
        <span class="invalid-feedback">{{ $message }}</span>
    @enderror
</div>
