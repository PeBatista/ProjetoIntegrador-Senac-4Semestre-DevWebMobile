<?php

use App\Http\Controllers\PessoaController;
use App\Http\Controllers\VacinaController;
use Illuminate\Support\Facades\Route;


// Pagina Login
Route::get('/', function () {
 return view('welcome');
})->name('app.index');

// CONTROLLER PESSOA:

// Valida Login na página inicial
Route::post('validar-login/', [PessoaController::class, 'validarLogin'])->name('validar.login');

// Exibe o perfil
Route::get('exibir-pessoa/{pessoa}', [PessoaController::class, 'show'])->name('pessoa.exibir');

// Salva a edição do perfil no BD
Route::put('/editar-pessoa/{pessoa}', [PessoaController::class, 'update'])->name('pessoa.editar');

// Carrega a view com formulário de cadastro de perfil
Route::get('/cadastrar-pessoa', [PessoaController::class, 'create'])->name('pessoa.cadastar');

// Salva o novo cadastro no BD
Route::post('/armazenar-pessoa', [PessoaController::class, 'store'])->name('pessoa.armazenar');

// Apaga o perfil do BD:
Route::delete('/excluir-pessoa/{pessoa}', [PessoaController::class, 'destroy'])->name('pessoa.excluir');

// CONTROLLER VACINA:

// Lista vacinas
Route::get('/listar-vacina', [VacinaController::class, 'index'])->name('vacina.listar');

// Acessa vacina
Route::get('/exibir-vacina/{vacina}', [VacinaController::class, 'show'])->name('vacina.exibir');