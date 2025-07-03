@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-style1">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.dashboard') }}">{{ __('admin.Home') }}</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('admin.users.index') }}">{{ __('admin.Admins') }}</a>
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
                    <x-form.label-input name="surname" label="{{ __('admin.Surname') }}"
                        value="{{ old('surname') ?? $model->surname }}" />
                </div>
                <div class="col-md-4">
                    <x-form.label-input name="name" label="{{ __('locale.Firstname') }}"
                        value="{{ old('name') ?? $model->name }}" />
                </div>
                <div class="col-md-4">
                    <x-form.label-input name="patronymic" label="{{ __('admin.Patronymic') }}"
                        value="{{ old('patronymic') ?? $model->patronymic }}" />
                </div>

                <div class="col-md-4">
                    <x-form.label-select name="role_id" label="{{ __('admin.Role') }}">
                        <option value="">{{ __('admin.Select') }}</option>
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}" @selected((old('role_id') ?? $model->role_id) == $role->id)>
                                {{ $role->translate('name') }}
                            </option>
                        @endforeach
                    </x-form.label-select>
                </div>
                <div class="col-md-4">
                    <x-form.label-phone-input name="phone" label="{{ __('locale.Phone') }}"
                        value="{{ old('phone') ?? $model->phone }}" />
                </div>
                <div class="col-md-4">
                    <x-form.label-input name="pinfl" label="{{ __('admin.PINFL') }}"
                        value="{{ old('pinfl') ?? $model->pinfl }}" />
                </div>

                <div class="col-md-4">
                    <x-form.label-input name="username" label="{{ __('locale.Username') }}"
                        value="{{ old('username') ?? $model->username }}" />
                </div>
                <div class="col-md-4">
                    <x-form.label-input-password name="password" label="{{ __('locale.Password') }}" :value=false />
                </div>
                <div class="col-md-4">
                    <x-form.label-input-password name="password_confirmation" label="{{ __('locale.Password confirmed') }}"
                        :value=false />
                </div>


                <div class="col-md-4">
                    <x-form.label-select name="status" label="{{ __('admin.Status') }}">
                        @foreach ($statuses as $key => $value)
                            <option value="{{ $key }}" @selected((old('status') ?? $model->status) == $key)>
                                {{ $value }}
                            </option>
                        @endforeach
                    </x-form.label-select>
                </div>
                <div class="col-12 d-flex justify-content-between">
                    <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">{{ __('admin.Back') }}</a>
                    <button type="submit" class="btn btn-primary">{{ __('admin.Store') }}</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('js')
    <script>
        const pinfl = $('#pinfl'),
            value = {{ Js::from(old('pinfl') ?? $model->pinfl) }};

        if (pinfl) {
            const cleavePin = new Cleave('#pinfl', {
                blocks: [14],
                numericOnly: true
            });
            cleavePin.setRawValue(value);
        }
    </script>
@endpush
