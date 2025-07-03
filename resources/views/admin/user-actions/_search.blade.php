<div class="col-md">
    <div class="card card-action mb-2">
        <div class="collapse show">
            <div class="card-body pt-0 mt-3">
                <form class="dt_adv_search" action="{{ route('admin.user-actions.index') }}" method="GET">
                    @csrf
                    <div class="row">
                        <div class="col-md-5">
                            <x-form.label-input name="search" label="{{ __('admin.Search by IP') }}"
                                value="{{ request('search') }}" />
                        </div>

                        <div class="col-md-3">
                            <x-form.label-select name="table_name" label="{{ __('admin.Table name') }}">
                                <option value="">{{ __('admin.Select') }}</option>
                                @foreach ($table_names as $key => $value)
                                    <option value="{{ $key }}" @selected(request('table_name') === $key)>
                                        {{ $value }}
                                    </option>
                                @endforeach
                            </x-form.label-select>
                        </div>

                        <div class="col-md-3">
                            <x-form.label-select name="action" label="{{ __('admin.Action') }}">
                                <option value="">{{ __('admin.Select') }}</option>
                                @foreach ($statuses as $key => $value)
                                    <option value="{{ $key }}" @selected(request('action') === $key)>
                                        {{ $value }}
                                    </option>
                                @endforeach
                            </x-form.label-select>
                        </div>

                        <div class="col-md-1 d-flex align-items-end justify-content-center">
                            <button type="submit" class="btn btn-primary">{{ __('admin.Search') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
