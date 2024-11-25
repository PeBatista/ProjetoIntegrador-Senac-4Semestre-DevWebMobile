<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles_sbadmin.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/font-awesome/css/all.min.css') }}" rel="stylesheet">

    <title>{{ env('APP_BRAND') }}</title>
</head>
<body class="sb-nav-fixed">

  @if(Route::current()->getName() != 'pessoa.cadastar')
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3" id="navbar">
        <div class="container-fluid">
          <button class="navbar-toggler color-brand" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span><span> Menu</span>
          </button>
          <div class="d-flex justify-content-end m-1">
            <a href="{{ route('pessoa.exibir', ['pessoa' => session('id_pessoa')]) }}" class="btn btn-link btn-sm btn-menu"><i class="fa-regular fa-user"></i></a>
            @if(Route::current()->getName() != 'vacina.listar')
              <a href="{{ route('vacina.listar') }}" class="btn btn-link btn-sm btn-menu"><i class="fa-solid fa-arrow-left"></i></a>
            @endif
          </div>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('vacina.listar') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('app.index') }}">Sair</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    @endif
    <div class="container">

        <div class="row">


                @yield('content')

        </div>

    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/scripts_sbadmin.js') }}"></script>
    <script src="{{ asset('lib/font-awesome/js/all.min.js') }}"></script>

</body>
</html>