<?php

namespace Database\Seeders;

use App\Models\Vacina;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VacinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(!Vacina::where('nome_vacina', 'Vacina H1N1')->first()) {
            Vacina::create([
                'nome_vacina' => 'Vacina H1N1',
                'data_aplicacao' => '2024/01/01',
                'lote' => '202406',
                'fabricante' => 'Butantan',
                'descricao' => 'É um imunizante que contém fragmentos inativados do vírus influenza A, que estimula o sistema imunológico a produzir anticorpos. Aplicação: A partir dos 6 meses de vida.',
                'local_aplicacao' => 'Unidade de saúde mais próxima de você ou em um laboratório.'
            ]);
        }

        if(!Vacina::where('nome_vacina', 'Pneumococo')->first()) {
            Vacina::create([
                'nome_vacina' => 'Pneumococo',
                'data_aplicacao' => '2024/01/01',
                'lote' => '202406',
                'fabricante' => 'Butantan',
                'descricao' => 'A vacina pneumocócica é uma ferramenta importante para prevenir infecções respiratórias graves, como a pneumonia, causadas pela bactéria Streptococcus pneumoniae. Aplicação: 60 anos ou mais.',
                'local_aplicacao' => 'Unidade de saúde mais próxima de você ou em um laboratório.'
            ]);
        }

        if(!Vacina::where('nome_vacina', 'Vacina Tétano')->first()) {
            Vacina::create([
                'nome_vacina' => 'Vacina Tétano',
                'data_aplicacao' => '2024/01/01',
                'lote' => '202406',
                'fabricante' => 'Butantan',
                'descricao' => 'A vacina contra o tétano, protege contra uma infecção bacteriana causada pela clostridium tetani. Aplicação: Crianças, gestantes, adultos e profissionais da saúde.',
                'local_aplicacao' => 'Unidade de saúde mais próxima de você ou em um laboratório.'
            ]);
        }

        if(!Vacina::where('nome_vacina', 'Vacina Febre Amarela')->first()) {
            Vacina::create([
                'nome_vacina' => 'Vacina Febre Amarela',
                'data_aplicacao' => '2024/01/01',
                'lote' => '202406',
                'fabricante' => 'Butantan',
                'descricao' => 'Protege contra a febre amarela, uma doença viral transmitida por mosquitos. Aplicação: A partir de 9 meses de vida, com uma dose de reforço a cada 10 anos.',
                'local_aplicacao' => 'Unidades de Saúde, hospitais, farmacias e clinicas de vacinação.'
            ]);
        }


        if(!Vacina::where('nome_vacina', 'Vacina Influenza')->first()) {
            Vacina::create([
                'nome_vacina' => 'Vacina Influenza',
                'data_aplicacao' => '2024/01/01',
                'lote' => '202406',
                'fabricante' => 'Butantan',
                'descricao' => 'A vacina contra a gripe protege durante o período de maior circulação dos vírus, reduzindo os casos de agravamento da doença, as internações e os óbitos. Aplicação: A partir dos 6 meses de vida.',
                'local_aplicacao' => 'Unidades de saúde, hospitais, farmacias e clinicas de vacinação.'
            ]);
        }


        if(!Vacina::where('nome_vacina', 'Vacina COVID - 19')->first()) {
            Vacina::create([
                'nome_vacina' => 'Vacina COVID - 19',
                'data_aplicacao' => '2024/01/01',
                'lote' => '202406',
                'fabricante' => 'Butantan',
                'descricao' => 'Protege contra a SARS-CoV-2, ensina o sistema imunologico a reconhecer e combater o virus. Aplicação: Adultos, pessoas com comorbidades, idosos a partir de 65 anos.',
                'local_aplicacao' => 'Unidades de Saúde, hospitais, farmacias e clinicas de vacinação.'
            ]);
        }


        if(!Vacina::where('nome_vacina', 'Vacina HPV')->first()) {
            Vacina::create([
                'nome_vacina' => 'Vacina HPV',
                'data_aplicacao' => '2024/01/01',
                'lote' => '202406',
                'fabricante' => 'Butantan',
                'descricao' => 'O câncer de colo do útero é o 2º que mais mata mulheres entre 20 e 49 anos. Cerca de 99% dos casos são causados pelo HPV. Aplicação: Meninas e mulheres de 9 a 26 anos de idade, meninos de 9 a 14 anos, homens e mulheres imunossuprimidos de 9 a 45 anos, homens e mulheres com câncer de 9 a 45 anos.',
                'local_aplicacao' => 'UBS de Areias Rua João José Martins, s/n, Areias, São José - SC (48) 3246-6799'
            ]);
        }


        if(!Vacina::where('nome_vacina', 'Vacina Hepatite B (adulto)')->first()) {
            Vacina::create([
                'nome_vacina' => 'Vacina Hepatite B (adulto)',
                'data_aplicacao' => '2024/01/01',
                'lote' => '202406',
                'fabricante' => 'Butantan',
                'descricao' => 'A Hepatite B, é uma doença infecciosa que agride o fígado e está presente no sangue e secreções. É classificada como doença sexualmente transmissível. Aplicação: Adolescentes e adulos não vacinados no primeiro ano de vida. Recomendam-se três doses, com intervalo de um ou dois meses entre a primeira e a segunda dose, e de seis meses entre a primeira e a terceira dose.',
                'local_aplicacao' => 'UBS da Serraria Rua Afrísio de Senna Vaz, 1449, Serraria, São José - SC (48) 3288-4378'
            ]);
        }

    }
}
