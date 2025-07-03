@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-style1">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.dashboard') }}">{{ __('admin.Home') }}</a>
            </li>
            <li class="breadcrumb-item active">
                {{ $label }}
            </li>
        </ol>
    </nav>
    <div class="card">
        <h5 class="card-header">{{ $label }}</h5>
        <div class="card-body">
            <form action="{{ $route }}" method="POST" class="row g-3" enctype="multipart/form-data">
                @csrf
                @if (isset($method))
                    @method($method)
                @endif
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6 mt-3">
                            <x-form.label-input name="name" label="{{ __('admin.Name') }}"
                                value="{{ old('name') ?? $model->name }}" />
                        </div>
                        <div class="col-md-6 mt-3">
                            <x-form.label-input name="phone" label="Telefon"
                                value="{{ old('phone') ?? $model->phone }}" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-3">
                            <x-form.label-input name="instagram" label="Instagram (link)"
                                value="{{ old('instagram') ?? $model->instagram }}" />
                        </div>
                        <div class="col-md-6 mt-3">
                            <x-form.label-input name="facebook" label="Facebook (link)"
                                value="{{ old('facebook') ?? $model->facebook }}" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-3">
                            <x-form.label-input name="telegram" label="Telegram (link)"
                                value="{{ old('telegram') ?? $model->telegram }}" />
                        </div>
                        <div class="col-md-6 mt-3">
                            <x-form.label-input name="twitter" label="Twitter (link)"
                                value="{{ old('twitter') ?? $model->twitter }}" />
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    {{-- <label for="image" class="control-label">{{ __('admin.Image') }}</label> --}}
                    <div class="form-group" style="text-align: center;">
                        <img src="{{ $model->getAvatar('logo') }}" alt="Logo" id="output_logo"
                            style="width:190px; height: 190px; object-fit: cover; margin: 12px 0; border-radius: 50%;">
                    </div>
                    <div class="form-group">
                        <input type="file" name="logo" id="logo" class="form-control" accept="image/*"
                            onchange="loadFile(event, 'output_logo')">
                        @error('logo')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12" style="margin-top: 20px;">
                    <x-form.editor name="description" label="{{ __('locale.Description') }}"
                        value="{{ old('description') ?? $model->description }}" :rows=12 />
                </div>

                <hr>

                <div class="col-12 d-flex justify-content-between">
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
