@include('admin.students._form', [
    'method' => 'PUT',
    'route' => route('admin.students.update', $model),
    'label' => __('admin.Edit'),
])
