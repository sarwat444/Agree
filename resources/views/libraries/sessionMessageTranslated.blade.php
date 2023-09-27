@if (Session::has('successMsg'))
    <div class="toast align-items-center text-bg-primary border-0 position-fixed top-0 end-0" id="Toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                {{__('locale.'.Session::get('successMsg'))}}
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
@elseif(Session::has('ErrorMsg'))
    <div class="toast align-items-center text-bg-danger border-0 position-fixed top-0 end-0"  role="alert" id="Toast" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                {{__('locale.'.Session::get('ErrorMsg'))}}
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
@endif
@if (Session::has('successMsg')||Session::has('ErrorMsg'))
    <script>
        const toastLiveExample = document.getElementById('Toast')
        const toast = new bootstrap.Toast(toastLiveExample)
        toast.show()
    </script>
@endif
