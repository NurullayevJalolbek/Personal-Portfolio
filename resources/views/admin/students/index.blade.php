@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-style1">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.dashboard') }}">{{ __('admin.Home') }}</a>
            </li>
            <li class="breadcrumb-item active">
                {{ __('admin.customers') }}
            </li>
        </ol>
    </nav>

    @include('admin.students._search')

    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title m-0 me-2">
                {{ __('admin.customers') }}
            </h5>
            <div
                class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-end flex-md-row flex-column mb-3 mb-md-0">
                <div class="dt-buttons btn-group flex-wrap">
                    <a href="{{ route('admin.students.create') }}" class="btn btn-secondary add-new btn-primary">
                        <span>
                            <i class="bx bx-plus me-0 me-sm-1"></i>
                            <span class="d-none d-sm-inline-block">{{ __('admin.Add') }}</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>

        @include('admin.students._columns')

        {!! $datas->appends(\Request::except('page'))->render() !!}
    </div>
@endsection
