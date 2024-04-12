@if (Session::has('type'))
    <div class="alert {{ Session::get('type') }} alert-dismissible fade show" role="alert" id="alert">
        {{ Session::get('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function (){
            var alert = document.getElementById('alert');
            setTimeout(() => {
                alert.style.display = 'none';
            }, 3000);
        })
    </script>
@endif
