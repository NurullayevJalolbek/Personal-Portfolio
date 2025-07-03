@props([
    'name',
    'label' => null,
    'error_name' => null,
    'img' => null,
    'iColMd' => null,
    'disabled' => false,
    'id' => null,
    'class' => null,
])

<div class="col-md-12 col-xl-12 mb-4">
    <div class="card h-100 border {{ $errors->has($name) ? 'border-danger' : null }}">
        <div class="card-body">
            <div class="rounded-3 text-center">
                <img {{-- style="object-fit: contain; height: 150px;" --}} id="{{ $id ?: $name }}View" src="{{ $img ?: asset('img/not_found.png') }}"
                    class="img-fluid w-100 rounded-2 {{ $class }}" alt="">
            </div>
        </div>
        <div class="col-12">
            <label for="{{ $id ?: $name }}" class="w-100 input-group">
                <div class="form-control btn-primary text-center cursor-pointer">
                    {{ $label ?: str_replace(['_', '-'], ' ', ucfirst($name)) }}
                </div>
                @if ($img)
                    <a class="btn-primary input-group-text" href="{{ $img }}">
                        <i class='bx bx-download'></i>
                    </a>
                @endif
            </label>
        </div>

        <input
            onchange="document.getElementById('{{ $id ?: $name }}View').src = window.URL.createObjectURL(this.files[0])"
            type="file" {{ $disabled ? 'disabled' : null }} accept="image/*" hidden
            class="{{ $errors->has($error_name ?: $name) ? 'is-invalid' : null }}" name="{{ $name }}"
            id="{{ $id ?: $name }}">

    </div>
    <b class="{{ $errors->has($name) ? 'is-invalid' : null }}"></b>
    @error($error_name ?: $name)
        <span class="invalid-feedback">{{ $message }}</span>
    @enderror
</div>
