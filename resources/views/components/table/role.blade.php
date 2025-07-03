@props(['type', 'label' => null])

    <span class="badge bg-label-{{$type ?? 'success'}}">{{ $label }}</span>
