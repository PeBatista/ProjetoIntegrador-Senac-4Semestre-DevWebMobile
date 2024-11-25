<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
     //Indicar o nome da tabela
     protected $table = 'pessoas';

    //Indicar quais colunas podem ser preenchidas
    protected $fillable = [
        'nome', 
        'data_nascimento', 
        'cpf', 
        'endereco',
        'senha',
        'cep',
        'cns',
        'rg'
    ];

}
