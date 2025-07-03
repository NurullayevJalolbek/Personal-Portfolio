@include('components.crud._form', [
    'method' => 'PUT',
    'route' => route('languages.update', $model),
    'label' => __('admin.Edit'),
])
