<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            //Para acrescentar outras seeds, basta colocar , após a CourseSeeder e preencher com a próxima a ser incluída
            //Lembrar que em tabelas relacionadas, a tabela com a chave primária deve ser colocada a frente da seeder com as 
            //Chaves secundárias
            PessoaSeeder::class, VacinaSeeder::class, ConsultaSeeder::class
        ]);
    }
}
