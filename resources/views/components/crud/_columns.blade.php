<div class="card-datatable table-responsive">
    <table class="table table-hover border-top">
        <thead>
            <tr>
                <th width="100" class="text-center">@sortablelink('id', '№')</th>
                <th>{{ __('admin.Image') }}</th>
                <th>{{ __('admin.Name') }}</th>
                <th>@sortablelink('status', __('admin.Status'))</th>
                <th width="150" class="text-center">{{ __('admin.Actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($datas ?: [] as $data)
                <tr>
                    <td class="text-center">
                        {{ $datas->perPage() * ($datas->currentPage() - 1) + $loop->iteration }}
                    </td>
                    <td>
                        <div class="avatar me-2">
                            <img src="{{ $data->getFile('image') }}" alt="{{ $data->name }}" class="rounded" />
                        </div>
                    </td>
                    <td>
                        {{ $data->name }} <br>
                    </td>
                    <td>
                        <x-table.status value="{{ $data->status }}" />
                    </td>
                    <td class="text-center">
                        <a data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-offset="0,8"
                            data-bs-placement="top" data-bs-custom-class="tooltip-primary"
                            title="{{ __('admin.Edit') }}" href="{{ route('languages.edit', $data) }}">
                            <i class='bx bxs-edit-alt'></i>
                        </a>
                        <a class="cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            data-bs-offset="0,8" data-bs-placement="top" data-bs-custom-class="tooltip-danger"
                            title="{{ __('admin.Delete') }}"
                            onclick="deleteModel({{ '\'' . route('languages.destroy', $data) . '\'' }})">
                            <i class='bx bxs-trash text-danger'></i>
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">
                        <h4 class="no_data">
                            {{ __('message.Nothing found') }}!
                        </h4>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
