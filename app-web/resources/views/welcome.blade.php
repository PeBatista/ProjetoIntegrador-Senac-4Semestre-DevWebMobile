<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('lib/font-awesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>{{ env('APP_BRAND') }}</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="logo">
                    <div class="d-flex justify-content-center">
                        <img class="img-logo" src="{{ asset('img/app/logo.png') }}" alt="">
                    </div>
                    <div class="d-flex justify-content-center">
                        <h1 class="display-1"><span class="company-name">Health</span><br><span
                                class="company-name p-5">Track</span></h1>
                    </div>
                </div>

                <div class="mt-2 mb-2">
                    {{-- Exibie os erros utilizando o componente: views/components/alert.blade.php --}}
                    <x-alert />
                </div>

                <form action="{{ route('validar.login') }}" method="POST" class="mt-4">

                    @csrf
                    @method('POST')

                    <div class="mb-3 d-flex justify-content-center">
                        <label for="usuario" class="mt-2 m-2 fs-4 color-brand"><i class="fa-regular fa-user"></i></label>
                        <input type="text" name="usuario" class="form-control w-75 form-control-lg" id="usuario" placeholder="Usuário (CPF)" value="000.000.000-99">
                    </div>
                    <div class="mb-3 d-flex justify-content-center">
                        <label for="senha" class="mt-2 m-2 fs-4 color-brand"><i class="fa-solid fa-lock"></i></label>
                        <input type="password" name="senha" class="form-control w-75 form-control-lg" id="senha" placeholder="Senha" value="1234">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-green w-50 fs-5">Login <i class="fa-solid fa-arrow-right-to-bracket"></i></button>
                    </div>
                </form>




            </div>
        </div>
        <div class="row app-footer">
            <div class="col-12">
                <div class="d-flex justify-content-between align-content-center">
                    <button class="btn btn-sm btn-pg-login">Esqueceu a senha?</button>
                    <a href="{{ route('pessoa.cadastar') }}" class="btn btn-sm btn-pg-login">Cadastre-se</a>
                </div>
                <div class="d-flex justify-content-center">
                    <span class="color-brand mt-4">
                        v1.0
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
