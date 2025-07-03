@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-style1">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.dashboard') }}">{{ __('admin.Home') }}</a>
            </li>
            <li class="breadcrumb-item active">
                {{ __('admin.User actions') }}
            </li>
        </ol>
    </nav>

    @include('admin.user-actions._search')

    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title m-0 me-2">
                {{ __('admin.User actions') }}
            </h5>
        </div>

        @include('admin.user-actions._columns', ['colspan' => 7])

        {!! $datas->appends(\Request::except('page'))->render() !!}
    </div>
@endsection
