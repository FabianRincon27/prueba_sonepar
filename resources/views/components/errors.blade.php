@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert" id="alert-error">
        Se han producido los siguientes errores: <br>
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function (){
            var alert = document.getElementById('alert-error');
            setTimeout(() => {
                alert.style.display = 'none';
            }, 3000);
        })
    </script>
@endif
