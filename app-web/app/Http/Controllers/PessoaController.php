<?php

namespace App\Http\Controllers;

use App\Http\Requests\PessoaRequest;
use App\Models\Pessoa;
use DateTime;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



function ajustaDataBancoDados($data) {
    $formatoEntrada = 'd/m/Y'; // Formato esperado de entrada

    // Criar um objeto DateTime a partir do formato de entrada
    $d = DateTime::createFromFormat($formatoEntrada, $data);

    // Validar a data (checando se foi criada e está correta)
    if ($d && $d->format($formatoEntrada) === $data) {
        // Converter para o formato do banco usando Carbon
        $dataBanco = $d->format('Y-m-d');
        return $dataBanco;
    }

    return false; // Retorna falso se a data não for válida
}

class PessoaController extends Controller
{
    public function show(Pessoa $pessoa)
    {   
        return view('pessoas.show', ['pessoa' => $pessoa]);
    }

    public function validarLogin(Request $request, Pessoa $pessoa)
    {
        // Captura o valor do input "usuario" (CPF) e senha
        $usuario = $request->input('usuario');
        $senha = $request->input('senha');
    
        // Busca a pessoa pelo CPF na model Pessoa
        $pessoa = Pessoa::where('cpf', $usuario)->first();
    
        if ($pessoa) {

            // Valida se o valor do input "senha" confere com o cadastrado no banco
            if($pessoa->senha == $senha) {                
                
                // Salva na sessao o ID do usuario
                session(['id_pessoa' => $pessoa->id]);

                // Direciona o usuario para a listagem de vacinas
                return redirect()->route('vacina.listar');            
            
            } else{

                return redirect()->route('app.index')->with('error', 'Usuário ou Senha Incorretos!');

            }
        
        } else {

            // Não encontrou nenhuma pessoa e retorna para página inicial
            return redirect()->route('app.index')->with('error', 'Perfil não encontrado!');

        }
    }

    public function update(PessoaRequest $request, Pessoa $pessoa)
    {
        $request->validated();

        if($request->senha != $request->valida_senha) {
            return redirect()->route('pessoa.exibir', ['pessoa' => $pessoa->id])->with('error', 'As senhas digitadas não conferem!');
        }

        // Inicia a operação com o BD
         DB::beginTransaction();

         try{
 
             //Editar as informações do registro no banco de dados
             $pessoa->update([
                'nome'=> $request->nome,
                'cpf'=> $request->cpf,
                'endereco'=> $request->endereco,
                'data_nascimento'=> ajustaDataBancoDados($request->data_nascimento),
                'cep'=> $request->cep,
                'cns'=> $request->cns,
                'rg'=> $request->rg,
                'senha'=> $request->senha,
             ]);
 
             // Operação no banco de dados é concluida com sucesso
             DB::commit();
 
             // Retorna o usuário para a página do perfil editado
             return redirect()->route('pessoa.exibir', ['pessoa' => $pessoa->id])->with('success', 'Perfil modificado com sucesso!');
         
         } catch (Exception $e) {
 
             // Desfaz a transação no BD
             DB::rollBack();

             // Retorna para a página do formulário de edição do perfil (mantendo os valores digitados pelo usuário)
            return back()->withInput()->with('error', 'Não foi possível modificar as informações!');
 
         }
    }

    public function create()
    {
        return view('pessoas.create');
    }

    public function store(PessoaRequest $request)
    {
        $request->validated();

        // Inicia a operação com o BD
         DB::beginTransaction();

         try{
 
             //Editar as informações do registro no banco de dados
             $pessoa = Pessoa::create([
                'nome'=> $request->nome,
                'cpf'=> $request->cpf,
                'endereco'=> $request->endereco,
                'data_nascimento'=> ajustaDataBancoDados($request->data_nascimento),
                'cep'=> $request->cep,
                'cns'=> $request->cns,
                'rg'=> $request->rg,
                'senha'=> $request->senha,
             ]);
 
             // Operação no banco de dados é concluida com sucesso
             DB::commit();

             // Salva na sessao o ID do usuario
             session(['id_pessoa' => $pessoa->id]);
 
             // Retorna o usuário para a página do perfil editado
             return redirect()->route('pessoa.exibir', ['pessoa' => $pessoa->id])->with('success', 'Perfil cadastrado com sucesso!');
         
         } catch (Exception $e) {
 
             // Desfaz a transação no BD
             DB::rollBack();

            // Retorna para a página do formulário de edição do perfil (mantendo os valores digitados pelo usuário)
            return back()->withInput()->with('error', 'Não foi possível cadastrar as informações!');
 
         }
    }

    public function destroy(Pessoa $pessoa)
    {
       
        try {
            $pessoa->delete();

            return redirect()->route('app.index')->with('success', 'Perfil excluído com sucesso!');

        } catch (Exception $e) {

            dd($e);
            return redirect()->route('pessoa.exibir', ['pessoa' => $pessoa->id])->with('error', 'Não foi possível apagar o registro!');

        }
        

    }

}
