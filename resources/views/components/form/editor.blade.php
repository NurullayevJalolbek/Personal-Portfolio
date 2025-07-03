@props([
    'name',
    'disabled' => false,
    'label' => null,
    'rows' => 4,
    'value' => null,
    'id' => null,
    'height' => 300,
    'error_name' => null,
    'is_required' => false
])

@pushOnce('css')
    <link rel="stylesheet" href="{{ asset('summernote/summernote-bs5.css') }}">
@endPushOnce

<label for="{{ $id ?: $name }}" class="form-label">{{ $label ?: ucfirst($name) }}
    @if ($is_required)
        <sup class="text-danger">*</sup>
    @endif
</label>

<textarea @if ($disabled) disabled="disabled" @endif rows="{{ $rows }}"
    style="{{ $attributes['style'] }}" {{ $attributes['required'] }}
    class="form-control summernote {{ $attributes['class'] }} {{ $errors->has($error_name ?: $name) ? 'is-invalid' : null }}"
    name="{{ $name }}" id="{{ $id ?: $name }}">{!! $value ?: old($name) !!}</textarea>

@error($error_name ?: $name)
    <span class="invalid-feedback">{{ $message }}</span>
@enderror

@pushOnce('js')
    <script src="{{ asset('summernote/summernote-bs5.js') }}"></script>
    <script src="{{ asset('summernote/lang/summernote-uz-UZ.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['codeview', 'help']],
                    ['history', ['undo', 'redo']],
                ],
                lang: 'uz-UZ',
                // placeholder: 'Nimadir yozing...',
                tabsize: 2,
                height: '{{$height}}',
                fontSizes: [
                    '11', '12', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '26',
                    '36'
                ],
                fontNames: [
                    'Times New Roman', 'Arial', 'Arial Black', 'Comic Sans MS', 'Courier New',
                    'Helvetica', 'Impact',
                    'Georgia', 'Tahoma', 'Verdana', 'Lucida Console',
                    'Palatino Linotype', 'Book Antiqua', 'Century Gothic',
                ],
            });
        });
    </script>
@endPushOnce
