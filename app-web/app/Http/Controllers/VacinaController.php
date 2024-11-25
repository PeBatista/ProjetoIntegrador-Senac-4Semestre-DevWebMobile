<?php

namespace App\Http\Controllers;

use App\Models\Vacina;
use Illuminate\Http\Request;

class VacinaController extends Controller
{
    // Listar as vacinas
    public function index()
    {

        //Recuperar todos os registros do banco de dados
        $vacinas = Vacina::orderBy('created_at', 'ASC')->get();

        //Carregar a VIEW
        return view('vacinas.index', ['vacinas' => $vacinas]);

    }

        // Visualizar as vacinas (está usando a própria model para fazer a busca no BD. Isso só funciona porque o parâmetro recebido tem o mesmo nome da coluna ID no BD. OBS: Só funciona com o ID )
        public function show(Vacina $vacina)
        {
            // Carrega a VIEW
            return view('vacinas.show', ['vacina' => $vacina]);
    
        }


}
