@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-style1">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.dashboard') }}">{{ __('admin.Home') }}</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('languages.index') }}">{{ __('admin.Languages') }}</a>
            </li>
            <li class="breadcrumb-item active">
                {{ $label }}
            </li>
        </ol>
    </nav>
    <div class="card">
        <h5 class="card-header">{{ $label }}</h5>
        <div class="card-body">
            <form action="{{ $route }}" method="POST" id="formValidationExamples" class="row g-3"
                enctype="multipart/form-data">
                @csrf
                @if (isset($method))
                    @method($method)
                @endif
                <div class="col-md-4">
                    <x-form.label-input name="name" label="{{ __('admin.Name') }}"
                        value="{{ old('name') ?: $model->name }}" />
                </div>
                <div class="col-md-4">
                    <x-form.label-input name="url"
                        readonly="{{ isset($method) && Str::lower($method) == 'put' ? true : false }}"
                        label="{{ __('admin.URL') }}" value="{{ old('url') ?: $model->url }}" />
                </div>
                <div class="col-md-4">
                    <x-form.label-select name="status" label="{{ __('admin.Status') }}">
                        <option value="">{{__('admin.Select')}}</option>
                        @foreach ($statuses as $key => $value)
                            <option value="{{ $key }}" @selected((old('status') ?: $model->status) == $key)>
                                {{ $value }}
                            </option>
                        @endforeach
                    </x-form.label-select>
                </div>
                <div class="col-md-3">
                    <x-form.input-img name="image" img="{{ $model->getFile('image', true) }}"
                        label="{{ __('admin.Image') }}" />
                </div>
                <div class="col-12 d-flex justify-content-between">
                    <a href="{{ route('languages.index') }}" class="btn btn-secondary">{{ __('admin.Back') }}</a>
                    <button type="submit" class="btn btn-primary">{{ __('admin.Store') }}</button>
                </div>
            </form>
        </div>
    </div>
@endsection
