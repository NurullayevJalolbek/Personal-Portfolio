@props(['value'])

@if ($value >= 100 && $value < 200)
    <span class="btn btn-sm btn-primary">{{ $value }}</span>
@endif

@if ($value >= 200 && $value < 300)
    <span class="btn btn-sm btn-success">{{ $value }}</span>
@endif

@if ($value >= 300 && $value < 400)
    <span class="btn btn-sm btn-warning">{{ $value }}</span>
@endif

@if ($value >= 400 && $value < 500)
    <span class="btn btn-sm btn-info">{{ $value }}</span>
@endif

@if ($value >= 500 && $value < 600)
    <span class="btn btn-sm btn-danger">{{ $value }}</span>
@elseif($value < 100 && $value >= 600)
    <span class="btn btn-sm btn-dark">{{ $value }}</span>
@endif
