@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
    </div>
@endif


@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">

        @foreach ($errors->all() as $error)
            {{ $error }}<br>
        @endforeach

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
    </div>
@endif
