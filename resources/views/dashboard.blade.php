@extends('layouts.app')

@section('content')
    <div class="row g-4">
        <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="card card-border-shadow-info">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <h6 class="fw-normal">
                            {{ __('admin.Total') }} {{ $activeUser }}
                            {{ Str::lower(__('admin.Users')) }}
                        </h6>
                    </div>
                    <div class="d-flex justify-content-between align-items-end">
                        <div class="role-heading">
                            <h4 class="mb-1">
                                {{ __('admin.Total') }} {{ Str::lower(__('enum.active')) }}
                                {{ Str::lower(__('admin.Users')) }}
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="card card-border-shadow-warning">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <h6 class="fw-normal">
                            {{ __('admin.Total') }} {{ $roles->sum('user_count') }}
                            {{ Str::lower(__('admin.Users')) }}
                        </h6>
                    </div>
                    <div class="d-flex justify-content-between align-items-end">
                        <div class="role-heading">
                            <h4 class="mb-1">{{ __('admin.Total') }} {{ Str::lower(__('admin.Users')) }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @foreach ($roles as $role)
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card card-border-shadow-primary">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <h6 class="fw-normal">
                                {{ __('admin.Total') }} {{ $role->user_count }}
                                {{ Str::lower(__('admin.Users')) }}
                            </h6>
                        </div>
                        <div class="d-flex justify-content-between align-items-end">
                            <div class="role-heading">
                                <h4 class="mb-1">{{ $role->translate('name') }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
