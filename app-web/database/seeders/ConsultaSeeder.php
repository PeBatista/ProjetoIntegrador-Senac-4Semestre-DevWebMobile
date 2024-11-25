<?php

namespace Database\Seeders;

use App\Models\Consulta;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConsultaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(!Consulta::where('id', 1)->first()){
            Consulta::create([
                'data_consulta' => '2024/10/09',
                'nome_medico' => 'Sarah Simone Mendes',
                'observacoes' => 'Sem observações',
                'pessoa_id' => '1', 
                'vacina_id' => '1',
            ]);
        }
    }
}
