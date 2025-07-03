<div class="card-datatable table-responsive">
    <table class="table table-hover border-top">

        <thead>
            <tr>
                <th width="80" class="text-center">@sortablelink('id', '№')</th>
                <th>{{ __('admin.Employee') }}</th>
                <th>{{ __('admin.IP') }}</th>
                <th>{{ __('admin.Table name') }}</th>
                <th>{{ __('admin.Model id') }}</th>
                <th>{{ __('admin.Action') }}</th>
                <th>@sortablelink('created_at', __('admin.Created at'))</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($datas ?? [] as $data)
                <tr>
                    <td class="text-center">
                        {{ $datas->perPage() * ($datas->currentPage() - 1) + $loop->iteration }}
                    </td>

                    <td>
                        {{ $data->user?->fullname }}
                    </td>

                    <td>
                        {{ $data->ip }}
                    </td>

                    <td>
                        {{ __('table.' . $data->table_name) }}
                    </td>

                    <td style="text-align: center;">
                        {{ $data->model_id }}
                    </td>

                    <td>
                        <span>
                            {{ __('locale.' . $data->action) }}
                        </span>
                    </td>

                    <td>
                        {{ formatDateTime($data->created_at, 'H:i:s - d.m.y') ?? '' }}
                    </td>

                </tr>
            @empty
                @include('../../components/no_data')
            @endforelse
        </tbody>
    </table>
</div>
