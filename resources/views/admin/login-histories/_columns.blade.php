<div class="card-datatable table-responsive">
    <table class="table table-hover border-top">

        <thead>
            <tr>
                <th width="80" class="text-center">@sortablelink('id', '№')</th>
                <th>{{ __('admin.Login') }}</th>
                <th>{{ __('admin.IP') }}</th>
                <th>{{ __('admin.Status') }}</th>
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
                        {{ $data->login }}
                    </td>

                    <td>
                        {{ $data->ip }}
                    </td>

                    <td>
                        <span
                            class="btn btn-{{ $data->status == 'success' ? 'success' : 'danger' }}"style="min-width: 200px;">
                            {{ __('locale.' . $data->status) }}
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
