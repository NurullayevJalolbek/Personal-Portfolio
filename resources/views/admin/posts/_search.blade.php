<div class="col-md">
    <div class="card card-action mb-2">
        <div class="collapse show">
            <div class="card-body pt-0 mt-3">
                <form class="dt_adv_search" action="{{ route('admin.posts.index') }}" method="GET">
                    @csrf
                    <div class="row">
                        <div class="col-md-11">
                            <x-form.label-input name="search" label="{{ __('admin.Name') }}"
                                value="{{ request('search') }}" />
                        </div>
                        {{-- <div class="col-md-4">
                            <x-form.label-select name="status" label="{{ __('admin.Status') }}">
                                <option value="">{{ __('admin.Select') }}</option>
                                @foreach ($statuses as $key => $value)
                                    <option value="{{ $key }}" @selected(request('status') == $key)>
                                        {{ $value }}
                                    </option>
                                @endforeach
                            </x-form.label-select>
                        </div> --}}
                        <div class="col-md-1 d-flex align-items-end justify-content-center">
                            <button type="submit" class="btn btn-primary">{{ __('admin.Search') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
