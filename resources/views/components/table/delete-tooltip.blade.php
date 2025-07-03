@props([
    'url' => null,
    'offset' => 0.8,
    'placement' => 'bottom',
    'type' => 'tooltip-danger',
    'title' => __('admin.Delete'),
    'icon' => "<i class='bx bxs-trash text-danger'></i>",
])

<a class="cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="{{ $placement }}"
    data-bs-offset="{{ $offset }}" data-bs-custom-class="{{ $type }}" title="{!! $title !!}"
    onclick="deleteModel({{ '\'' . $url . '\'' }})">
    {!! $icon !!}
</a>
