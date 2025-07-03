<div class="card-datatable table-responsive">
    <table class="table table-hover border-top">

        <thead>
            <tr>
                <th width="80" class="text-center">@sortablelink('id', '№')</th>
                <th>{{ __('admin.Name') }}</th>
                <th>@sortablelink('status', __('admin.Status'))</th>
                <th width="200">@sortablelink('created_at', __('admin.Created at'))</th>
                <th width="150" class="text-center">{{ __('admin.Actions') }}</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($datas ?? [] as $data)
                <tr>
                    <td class="text-center">
                        {{ $datas->perPage() * ($datas->currentPage() - 1) + $loop->iteration }}
                    </td>
                    <td> {{ $data->title }}</td>
                    <td> <x-table.status value="{{ $data->status }}" /> </td>
                    <td> {{ formatDateTime($data->created_at) ?? '-- : --' }} </td>
                    <td class="text-center">
                        <a data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-offset="0,8"
                            data-bs-placement="top" data-bs-custom-class="tooltip-primary"
                            title="{{ __('admin.Edit') }}" href="{{ route('admin.posts.edit', $data) }}">
                            <i class='bx bxs-edit-alt'></i>
                        </a>
                        <a class="cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            data-bs-offset="0,8" data-bs-placement="top" data-bs-custom-class="tooltip-danger"
                            title="{{ __('admin.Delete') }}"
                            onclick="deleteModel({{ '\'' . route('admin.posts.destroy', $data) . '\'' }})">
                            <i class='bx bxs-trash text-danger'></i>
                        </a>
                    </td>
                </tr>
            @empty
                @include('../../components/no_data', ['colspan' => 4])
            @endforelse
        </tbody>
    </table>
</div>
