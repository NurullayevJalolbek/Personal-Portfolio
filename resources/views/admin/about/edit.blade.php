@include('admin.about._form', [
    'method' => 'PUT',
    'route' => route('admin.about.update', $model),
    'label' => __('admin.System settings'),
])
