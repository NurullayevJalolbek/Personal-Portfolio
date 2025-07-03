@push('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/toastr/toastr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />
@endpush

<div id="toast-message" class="bs-toast toast bg-success bottom-0 end-0 toast-placement-ex m-2" role="alert"
    aria-live="assertive" aria-atomic="true" data-bs-delay="2000">
    <div class="toast-header">
        <i class="bx bx-bell me-2"></i>
        <div class="me-auto fw-medium">Bootstrap</div>
        <small>11 mins ago</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">Fruitcake chocolate bar tootsie roll gummies gummies jelly beans cake.</div>
</div>

@push('js')
    <script src="{{ asset('assets/vendor/libs/toastr/toastr.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/ui-toasts.js') }}"></script> --}}
    <script>
        const toastAnimationExample = document.querySelector('#toast-message');

        function showToast(type) {
            let toastAnimation;
            if (toastAnimation) {
                toastDispose(toastAnimation);
            }

            toastAnimationExample.classList.add(type, 'animate__fade');
            toastAnimation = new bootstrap.Toast(toastAnimationExample);
            toastAnimation.show();
        }

        // Dispose toast when open another
        function toastDispose(toast) {
            if (toast && toast._element !== null) {
                // if (toastPlacementExample) {
                //     toastPlacementExample.classList.remove(selectedType);
                //     DOMTokenList.prototype.remove.apply(toastPlacementExample.classList, selectedPlacement);
                // }
                // if (toastAnimationExample) {
                //     toastAnimationExample.classList.remove(selectedType, selectedAnimation);
                // }
                toast.dispose();
            }
        }
        // showToast('bg-danger');
        showToast('bg-success');
        showToast('bg-info');
    </script>
@endpush
