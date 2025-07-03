@include('admin.developers._form', [
    'method' => 'PUT',
    'route' => route('admin.developers.update', $model),
    'label' => __('admin.Edit'),
])
