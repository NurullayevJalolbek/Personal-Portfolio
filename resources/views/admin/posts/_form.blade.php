@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-style1">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.dashboard') }}">{{ __('admin.Home') }}</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('admin.posts.index') }}">{{ __('admin.Posts') }}</a>
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
                                style="width:100%; max-height: 200px; object-fit: cover; margin: 12px 0; border-radius: 8px;">
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
                                <x-form.label-input name="title" label="{{ __('admin.title') }}"
                                    value="{{ old('title') ?? $model->title }}" />
                            </div>
                            <div class="col-md-12">
                                <x-form.label-select name="status" label="{{ __('admin.Status') }}">
                                    @foreach ($statuses as $key => $value)
                                        <option value="{{ $key }}" @selected((old('status') ?? $model->status) == $key)>
                                            {{ $value }}
                                        </option>
                                    @endforeach
                                </x-form.label-select>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="sub_title" class="form-label">Sub title</label>
                                    <x-form.textarea name="sub_title" rows=4></x-form.textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12" style="margin-top: 20px;">
                        <x-form.editor name="description" label="{{ __('locale.Description') }}"
                            value="{{ old('description') ?? $model->description }}" :rows=12 />
                    </div>

                </div>

                <hr class="mb-0" />
                <div class="col-12 d-flex justify-content-between">
                    <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">{{ __('admin.Back') }}</a>
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
