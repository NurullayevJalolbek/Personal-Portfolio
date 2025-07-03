@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-style1">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.dashboard') }}">{{ __('admin.Home') }}</a>
            </li>
            <li class="breadcrumb-item active">
                {{ __('locale.Profile') }}
            </li>
        </ol>
    </nav>
    <div class="card mb-4">
        <h5 class="card-header">{{ __('locale.Profile details') }}</h5>
        <!-- Account -->
        <div class="card-body">
            <div class="d-flex align-items-start align-items-sm-center gap-4">
                <img src="{{ $model->getAvatar('image') }}" alt="user-avatar" class="d-block rounded"
                    style="object-fit: contain; width: 100px; height: 100px; border-radius: 50%;" id="uploadedAvatar" />
                <div class="button-wrapper">
                    <label for="image" class="btn btn-primary me-2 mb-4" tabindex="0">
                        <span class="d-none d-sm-block">{{ __('locale.Profile image') }}</span>
                        <i class="bx bx-upload d-block d-sm-none"></i>
                    </label>
                    <button type="button" class="btn btn-label-secondary account-image-reset mb-4"
                        onclick="resetImg('image', 'uploadedAvatar', `{{ $model->getFile('image') }}`)">
                        <i class="bx bx-reset d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">{{ __('locale.Reset') }}</span>
                    </button>
                    <p class="{{ $errors->has('image') ? 'is-invalid' : null }}"></p>
                    @error('image')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <hr class="my-0" />
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.profile.update') }}" method="POST" class="row g-3" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input name="image"
                        onchange="document.getElementById('uploadedAvatar').src = window.URL.createObjectURL(this.files[0])"
                        type="file" id="image" class="account-file-input" hidden accept="image/*" />
                    <div class="col-md-6">
                        <x-form.label-input name="username" :readonly=true label="{{ __('locale.Username') }}"
                            value="{{ $model->username }}" />
                    </div>
                    <div class="col-md-6">
                        <x-form.label-input name="status" :readonly=true label="{{ __('admin.Status') }}"
                            value="{{ __('locale.' . $model->status) }}" />
                    </div>
                    <div class="col-md-6">
                        <x-form.label-input name="name" label="{{ __('locale.Firstname') }}"
                            value="{{ old('name') ?: $model->name }}" />
                    </div>
                    <div class="col-md-6">
                        <x-form.label-input name="surname" label="{{ __('locale.Surname') }}"
                            value="{{ old('surname') ?: $model->surname }}" />
                    </div>
                    <div class="col-md-6">
                        <x-form.label-input name="patronymic" label="{{ __('admin.Patronymic') }}"
                            value="{{ old('patronymic') ?: $model->patronymic }}" />
                    </div>
                    <div class="col-md-6">
                        <x-form.label-phone-input name="phone" label="{{ __('locale.Phone') }}"
                            value="{{ old('phone') ?: $model->phone }}" />
                    </div>
                    <div class="col-md-6">
                        <x-form.label-input-password name="password" label="{{ __('locale.Password') }}" />
                    </div>
                    <div class="col-md-6">
                        <x-form.label-input-password name="password_confirmation"
                            label="{{ __('locale.Password confirmed') }}" />
                    </div>
                    <div class="col-12 d-flex justify-content-between">
                        {{-- <a href="{{ route('ais.index') }}" class="btn btn-secondary">{{ __('admin.Back') }}</a> --}}
                        <button type="submit" class="btn btn-primary">{{ __('admin.Store') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
