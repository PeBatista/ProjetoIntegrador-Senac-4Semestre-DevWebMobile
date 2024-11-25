@extends('layouts.default')

@section('content')
    <div class="container-fluid px-4">

        <span class="color-brand"><h1><i class="fa-solid fa-circle-info"></i> {{ $vacina->nome_vacina }}</h1></span>


        <div class="card mt-4">
            <div class="card-body">
                <p><strong>Sobre: </strong> {{ $vacina->descricao }}</p>
                <br>
                <p><strong>Onde encontrar: </strong>{{ $vacina->local_aplicacao }}</p>
            </div>
        </div>
        
    </div>


@endsection