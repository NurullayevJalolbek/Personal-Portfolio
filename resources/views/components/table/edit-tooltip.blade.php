@props([
    'url' => null,
])

<a data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-offset="0.8"
    data-bs-custom-class="tooltip-primary" title="{{ __('admin.Edit') }}"
    @if ($url) href="{{ $url }}" @endif>
    <i class='bx bxs-edit-alt'></i>
</a>
