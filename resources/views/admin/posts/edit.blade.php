@include('admin.posts._form', [
    'method' => 'PUT',
    'route' => route('admin.posts.update', $model),
    'label' => __('admin.Edit'),
])
