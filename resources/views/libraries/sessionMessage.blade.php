@if (Session::has('successMsg'))
    <script>
        let $message = "{{Session::get('successMsg')}}";
        setTimeout(function () {
            toastr['success'](
                $message,
                'Success!',
                {
                    closeButton: true,
                    tapToDismiss: false,
                }
            );
        }, 500);
    </script>
@elseif(Session::has('ErrorMsg'))
    <script>
        let $message = "{{Session::get('ErrorMsg')}}";
        setTimeout(function () {
            toastr['error'](
                $message,
                'error!',
                {
                    closeButton: true,
                    tapToDismiss: false,
                }
            );
        }, 500);
    </script>
@endif
