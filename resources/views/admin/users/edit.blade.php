@include('admin.users._form', [
    'method' => 'PUT',
    'route' => route('admin.users.update', $model),
    'label' => __('admin.Edit'),
])
