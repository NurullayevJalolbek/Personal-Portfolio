<div class="card-datatable table-responsive">
    <table class="table table-hover border-top">

        <thead>
            <tr>
                <th width="80" class="text-center">@sortablelink('id', '№')</th>
                <th>{{ __('admin.Fullname') }}</th>
                <th>{{ __('admin.Role') }}</th>
                <th>{{ __('admin.Phone') }}</th>
                <th>@sortablelink('status', __('admin.Status'))</th>
                <th>@sortablelink('created_at', __('admin.Created at'))</th>
                <th width="150" class="text-center">{{ __('admin.Actions') }}</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($datas ?? [] as $data)
                <tr>
                    <td class="text-center">
                        {{ $datas->perPage() * ($datas->currentPage() - 1) + $loop->iteration }}
                    </td>

                    <td>
                        {{ $data->fullname }}
                        @if ($data->id == auth()->id())
                            <span class="badge fs-tiny rounded-pill bg-label-dark">{{ __('admin.You') }}</span>
                        @endif
                    </td>

                    <td>
                        {{ $data->role?->translate('name') }}
                    </td>

                    <td>
                        {{ $data->phone }}
                    </td>

                    <td>
                        <x-table.status value="{{ $data->status }}" />
                    </td>

                    <td>
                        {{ formatDateTime($data->created_at) ?? ""  }}
                    </td>

                    <td class="text-center">
                        <a data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-offset="0,8"
                            data-bs-placement="top" data-bs-custom-class="tooltip-primary"
                            title="{{ __('admin.Edit') }}" href="{{ route('admin.users.edit', $data) }}">
                            <i class='bx bxs-edit-alt'></i>
                        </a>
                        @if ($data->id != auth()->user()->id)
                            <a class="cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                data-bs-offset="0,8" data-bs-placement="top" data-bs-custom-class="tooltip-danger"
                                title="{{ __('admin.Delete') }}"
                                onclick="deleteModel({{ '\'' . route('admin.users.destroy', $data) . '\'' }})">
                                <i class='bx bxs-trash text-danger'></i>
                            </a>
                        @endif
                    </td>

                </tr>
            @empty
                @include('../../components/no_data')
            @endforelse
        </tbody>
    </table>
</div>
