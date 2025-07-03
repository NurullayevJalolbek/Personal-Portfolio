@push('js')
    <script>
        function deleteModel(url) {
            Swal.fire({
                title: `{{ __('message.Are you sure?') }}`,
                text: `{!! __('message.You wont be able to revert this!') !!}`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: `{{ __('message.Yes, delete it!') }}`,
                cancelButtonText: `{{ __('locale.Cancel') }}`,
                customClass: {
                    confirmButton: 'btn btn-primary me-3',
                    cancelButton: 'btn btn-label-secondary'
                },
                buttonsStyling: false
            }).then(function(result) {
                if (result.value) {
                    $.ajax({
                        url: url,
                        type: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        dataType: 'json',
                        processData: false,
                        contentType: false,
                        success: function(data) {
                            sweetSuccess('', data.result);
                            setTimeout(() => {
                                location.reload();
                            }, 1000);
                        },
                        error: function(data) {
                            data = JSON.parse(data.responseText);
                            sweetError('', data.errors);
                        }
                    });
                }
            });
        }

        function confirmModel(url, method) {
            Swal.fire({
                title: `{{ __('message.Are you sure?') }}`,
                text: `{!! __('message.You wont be able to revert this!') !!}`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: `{{ __('message.Confirm') }}`,
                cancelButtonText: `{{ __('locale.Cancel') }}`,
                customClass: {
                    confirmButton: 'btn btn-primary me-3',
                    cancelButton: 'btn btn-label-secondary'
                },
                buttonsStyling: false
            }).then(function(result) {
                if (result.value) {
                    $.ajax({
                        url: url,
                        type: method,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        dataType: 'json',
                        processData: false,
                        contentType: false,
                        success: function(data) {
                            sweetSuccess('', data.result);
                            setTimeout(() => {
                                location.reload();
                            }, 1000);
                        },
                        error: function(data) {
                            data = JSON.parse(data.responseText);
                            sweetError('', data.errors);
                        }
                    });
                }
            });
        }

        function sweetSuccess(title = null, text = null) {
            text = text ?? `{{ session()->get('success') }}`;
            if (text) {
                Swal.fire({
                    title: title,
                    text: text,
                    icon: 'success',
                    timer: 2000,
                    showConfirmButton: false,
                });
            }
        }

        function sweetError(title = null, text = null) {
            text = text ?? `{{ session()->get('error') }}`;
            if (text) {
                Swal.fire({
                    title: title,
                    text: text,
                    icon: 'error',
                    customClass: {
                        confirmButton: 'btn btn-primary'
                    },
                    buttonsStyling: false
                });
            }
        }

        sweetSuccess();
        sweetError();
    </script>
@endpush
