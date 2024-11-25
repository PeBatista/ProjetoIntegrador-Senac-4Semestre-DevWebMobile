@extends('layouts.default')

@section('content')
    <div class="col-12 d-flex flex-column justify-content-center">

        <span class="color-brand mb-3">
            <h1><i class="fa-solid fa-circle-user"></i> Perfil</h1>
        </span>

        {{-- Exibie os erros utilizando o componente: views/components/alert.blade.php --}}
        <x-alert />
        <div class="row">
            <div class="col-12 mb-4">
                <form action="{{ route('pessoa.editar', ['pessoa' => $pessoa->id]) }}" method="POST">

                    @csrf
                    @method('PUT')

                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control mb-2" name="nome" id="nome" placeholder="Nome Completo" value="{{ $pessoa->nome }}" required>

                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" class="form-control mb-2" name="cpf" id="cpf" placeholder="Número do CPF" value="{{ $pessoa->cpf }}" required>

                    <label for="endereco" class="form-label">Endereço</label>
                    <input type="text" class="form-control mb-2" name="endereco" id="endereco" placeholder="Endereço Completo" value="{{ $pessoa->endereco }}" required>

                    <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                    <input type="text" class="form-control mb-2" name="data_nascimento" id="data_nascimento" placeholder="Data de Nascimento" value=" {{ \Carbon\Carbon::parse($pessoa->data_nascimento)->format('d/m/Y') }}" required>

                    <label for="cep" class="form-label">CEP</label>
                    <input type="text" class="form-control mb-2" name="cep" id="cep" placeholder="CEP" value="{{ $pessoa->cep }}" required>

                    <label for="cns" class="form-label">CNS</label>
                    <input type="text" class="form-control mb-2" name="cns" id="cns" placeholder="CNS" value="{{ $pessoa->cns }}" required>

                    <label for="rg" class="form-label">RG</label>
                    <input type="text" class="form-control mb-2" name="rg" id="rg" placeholder="Registro Geral - RG" value="{{ $pessoa->rg }}" required>

                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control mb-2" name="senha" id="senha" placeholder="Senha" value="{{ $pessoa->senha }}" required>

                    <label for="validaSenha" class="form-label">Confirmar Senha</label>
                    <input type="password" class="form-control mb-2" name="valida_senha" id="valida_senha" placeholder="Confirme sua senha" value="{{ $pessoa->senha }}" required>

                    <div class="d-flex justify-content-around">
                        <button type="submit" class="btn btn-green fs-5 me-1" onclick="return(confirm('Tem certeza que deseja editar as informações?'))">
                            Alterar
                        </button>
                </form>

                <form action="{{ route('pessoa.excluir', ['pessoa' => $pessoa->id]) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-green fs-5" onclick="return(confirm('{{ $pessoa->nome }}, tem certeza que deseja apagar seu perfil? \n\nEsta ação é irreversível!'))">
                        Excluir
                    </button>
                </form>
                
            </div>
        </div>
    </div>
</div>

@endsection
