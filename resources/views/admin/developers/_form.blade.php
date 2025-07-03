@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-style1">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.dashboard') }}">{{ __('admin.Home') }}</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('admin.developers.index') }}">{{ __('admin.customers') }}</a>
            </li>
            <li class="breadcrumb-item active">
                {{ $label }}
            </li>
        </ol>
    </nav>


    <div class="card">
        <h5 class="card-header">{{ $label }}</h5>

        <hr class="my-0" />

        <div class="card-body">
            <form action="{{ $route }}" method="POST" id="formValidationExamples" class="row g-3"
                enctype="multipart/form-data">
                @csrf
                @if (isset($method))
                    @method($method)
                @endif

                <div class="row">

                    <div class="col-md-4">
                        <label for="image" class="control-label">{{ __('admin.Image') }}</label>
                        <div class="form-group" style="text-align: center;">
                            <img src="{{ $model->getAvatar('image') }}" alt="image" id="output_image"
                                style="width:212px; height: 212px; object-fit: cover; margin: 12px 0; border-radius: 50%;">
                        </div>
                        <div class="form-group">
                            <input type="file" name="image" id="image" class="form-control" accept="image/*"
                                onchange="loadFile(event, 'output_image')">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="row g-2">
                            <div class="col-md-12">
                                <x-form.label-input name="fullname" label="{{ __('admin.fullname') }}"
                                    value="{{ old('fullname') ?? $model->fullname }}" />
                            </div>

                            <div class="col-md-6">
                                <x-form.label-select name="degree" label="{{ __('admin.Degree') }}">
                                    @foreach (getDegreeList() as $value)
                                        <option value="{{ $value }}" @selected((old('degree') ?? $model->degree) == $value)>
                                            {{ $value }}
                                        </option>
                                    @endforeach
                                </x-form.label-select>
                            </div>

                            <div class="col-md-6">
                                <x-form.label-select name="internship" label="{{ __('admin.Internship') }}">
                                    @foreach (getFrontendTechnologies() as $value)
                                        <option value="{{ $value }}" @selected((old('internship') ?? $model->internship) == $value)>
                                            {{ $value }}
                                        </option>
                                    @endforeach
                                </x-form.label-select>
                            </div>

                            <div class="col-md-6">
                                <x-form.label-phone-input name="phone" label="{{ __('locale.Phone') }}"
                                    value="{{ old('phone') ?? $model->phone }}" />
                            </div>

                            <div class="col-md-6">
                                <x-form.label-input name="telegram" label="{{ __('admin.Telegram') }}"
                                    value="{{ old('telegram') ?? $model->telegram }}" />
                            </div>


                            <div class="col-md-6">
                                <x-form.label-select name="status" label="{{ __('admin.Status') }}">
                                    @foreach ($statuses as $key => $value)
                                        <option value="{{ $key }}" @selected((old('status') ?? $model->status) == $key)>
                                            {{ $value }}
                                        </option>
                                    @endforeach
                                </x-form.label-select>
                            </div>

                        </div>
                    </div>
                </div>

                <hr>

                <div class="col-md-12">
                    <div class="row">
                        @foreach ($model->fileFields as $field)
                            @if ($field != 'image')
                                <div class="col-md-4">
                                    <x-form.file-input name="{{ $field }}" label="{{ __('admin.' . $field) }}" />

                                    @if ($model->$field)
                                        <a href="{{ $model->getImage($field) }}" download
                                            class="btn btn-sm btn-success mt-1"
                                            style="background-color: #b2f190; border-color: #b2f190; color: #2b6a09;">
                                            <i class="fa fa-download" aria-hidden="true"></i>
                                            {{ __('admin.Download') }}
                                        </a>
                                    @endif
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                <hr class="mb-0" />
                <div class="col-12 d-flex justify-content-between">
                    <a href="{{ route('admin.developers.index') }}" class="btn btn-secondary">{{ __('admin.Back') }}</a>
                    <button type="submit" class="btn btn-primary">{{ __('admin.Store') }}</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('js')
    <script>
        var loadFile = function(event, output = 'output_create') {
            var output = document.getElementById(output);
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
@endpush
