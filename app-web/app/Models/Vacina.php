<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacina extends Model
{
     //Indicar o nome da tabela
     protected $table = 'vacinas';

    //Indicar quais colunas podem ser preenchidas
    protected $fillable = [
        'nome_vacina', 
        'data_aplicacao', 
        'lote', 
        'fabricante',
        'descricao',
        'local_aplicacao'
    ];


}
