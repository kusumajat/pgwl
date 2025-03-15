@if (session()->has('success'))
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div class="toast align-items-center text-bg-success bg-opacity-75 border-0" role="alert" aria-live="assertive"
            aria-atomic="true" id="LiveToastSuccess">
            <div class="d-flex">
                <div class="toast-body">
                    {{ session('success') }}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
        </div>
    </div>

    <script>
        var toastLive = document.getElementById('LiveToastSuccess')
        var toast = new bootstrap.Toast(toastLive)
        toast.show()
    </script>
@endif

@if (session()->has('error'))
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div class="toast align-items-center text-bg-danger bg-opacity-75 border-0" role="alert"
            aria-live="assertive" aria-atomic="true" id="LiveToastError">
            <div class="d-flex">
                <div class="toast-body">
                    {{ session('error') }}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
        </div>
    </div>

    <script>
        var toastLive = document.getElementById('LiveToastError')
        var toast = new bootstrap.Toast(toastLive)
        toast.show()
    </script>
@endif

@if ($errors->any())
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div class="toast align-items-center text-bg-danger bg-opacity-75 border-0" role="alert" aria-live="assertive"
            aria-atomic="true" id = "toastError">
            <div class="d-flex">
                <div class="toast-body">
                    @foreach ($errors->all() as $error)
                      {{ $error }} <br>
                    @endforeach
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
        </div>
    </div>
    <script>
        var toastError = document.getElementById('toastError')
        var toast = new bootstrap.Toast(toastError)

        toast.show()
    </script>
@endif
