@props(['value', 'label' => null])

@if (in_array($value, ['active', true], true))
    <span class="badge bg-label-success">{{ $label ?: __('locale.active') }}</span>
@elseif (in_array($value, ['inactive', false], true))
    <span class="badge bg-label-danger">{{ $label ?: __('locale.inactive') }}</span>
@else
    <span class="badge bg-label-info">{{ $label }}</span>
@endif
