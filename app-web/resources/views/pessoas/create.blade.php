@extends('layouts.default')

@section('content')
    <div class="col-12 d-flex flex-column justify-content-center">

        <span class="color-brand mb-3 mt-5 text-center">
            <h1><i class="fa-regular fa-pen-to-square"></i> Cadastrar</h1>
        </span>

        {{-- Exibie os erros utilizando o componente: views/components/alert.blade.php --}}
        <x-alert />
        <div class="row">
            <div class="col-12 mb-4">
                <form action="{{ route('pessoa.armazenar') }}" method="POST">

                    @csrf
                    @method('POST')

                    <input type="text" class="form-control mb-4" name="nome" id="nome" placeholder="Nome Completo" value="{{ old('nome') }}" required>

                    <input type="text" class="form-control mb-4" name="cpf" id="cpf" placeholder="CPF formato 000.000.000-99" value="{{ old('cpf') }}" required>

                    <input type="text" class="form-control mb-4" name="endereco" id="endereco" placeholder="Endereço Completo" value="{{ old('endereco') }}" required>

                    <input type="text" class="form-control mb-4" name="data_nascimento" id="data_nascimento" placeholder="Data de Nascimento" value="{{ old('data_nascimento') }}" required>

                    <input type="text" class="form-control mb-4" name="cep" id="cep" placeholder="CEP" value="{{ old('cep') }}" required>

                    <input type="text" class="form-control mb-4" name="cns" id="cns" placeholder="CNS" value="{{ old('cns') }}" required>

                    <input type="text" class="form-control mb-4" name="rg" id="rg" placeholder="Registro Geral - RG" value="{{ old('rg') }}" required>

                    <input type="password" class="form-control mb-4" name="senha" id="senha" placeholder="Senha" >

                    <input type="password" class="form-control mb-4" name="valida_senha" id="valida_senha" placeholder="Confirme Senha" >

                    <div class="d-flex justify-content-around">
                        <button type="submit" class="btn btn-green fs-5 me-1 w-50">
                            <i class="fa-solid fa-right-to-bracket"></i> 
                            Entrar
                        </button>
                </form>

                <a href="{{ route('app.index') }}" class="btn btn-link btn-sm btn-menu w-50"><i class="fa-solid fa-arrow-left"></i> Voltar</a>

            </div>
        </div>
    </div>
</div>

@endsection
