@props(['value'])

@switch($value)
    @case('POST')
        <span class="btn btn-sm btn-warning">{{ $value }}</span>
    @break

    @case('GET')
        <span class="btn btn-sm btn-success">{{ $value }}</span>
    @break

    @case('PUT')
        <span class="btn btn-sm btn-info">{{ $value }}</span>
    @break

    @case('DELETE')
        <span class="btn btn-sm btn-danger">{{ $value }}</span>
    @break

    @default
        <span class="btn btn-sm btn-primary">{{ $value }}</span>
@endswitch
