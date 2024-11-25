<?php

namespace Database\Seeders;

use App\Models\Pessoa;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PessoaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(!Pessoa::where('cpf', '000.000.000-99')->first()){
            Pessoa::create([
                'nome' => 'Geraldo Guilherme Souza',
                'data_nascimento' => '1974/07/10',
                'cpf' => '000.000.000-99',
                'endereco' => 'Rua Cachoeira, 989, Centro, Feira de Santana, Bahia',
                'senha' => '1234',
                'cep' => '44001336',
                'cns' => '7026022926977846',
                'rg' => '240309108'
            ]);
        }
    }
}
