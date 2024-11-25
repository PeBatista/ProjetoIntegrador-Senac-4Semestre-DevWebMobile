@extends('layouts.default')

@section('content')

    <div class="col-12 d-flex flex-column align-items-center">
        @forelse ($vacinas as $vacina)
            <a href="{{ route('vacina.exibir', ['vacina' => $vacina->id]) }}" class="box-vacina"
                style="border: 1px solid #359A3C;">{{ $vacina->nome_vacina }}</a><br>
        @empty
            <div class="alert alert-danger" role="alert">
                Nenhuma Vacina Encontrada!
            </div>
        @endforelse
    </div>

@endsection
