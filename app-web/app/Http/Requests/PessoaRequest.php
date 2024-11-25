<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PessoaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required|max:25|min:5',
            'cpf'=> 'required|regex:/^\d{3}\.\d{3}\.\d{3}-\d{2}$/',
            'endereco'=> 'required',
            'data_nascimento'=> 'required|date_format:d/m/Y',
            'cep'=> 'required|regex:/^\d{5}-\d{3}$/',
            'cns' => 'required|max_digits:20|numeric|min_digits:10',
            'rg'=> 'required|max_digits:10|numeric|min_digits:7',
            'senha'=> 'required|max:255|min:5',
            'valida_senha'=> 'required|max:255|min:5',
        ];
    }

    public function messages(): array {
        return [
            'nome.required' => 'Campo nome completo é obrigatório',
            'cpf.required' => 'Campo CPF é obrigatório',
            'endereco.required'=> 'Campo endereço é obrigatório',
            'data_nascimento.required'=> 'Campo data de nascimento é obrigatório',
            'data_nascimento.date_format'=> 'Campo data de nascimento é inválido!',
            'cep.required'=> 'Campo CEP é obrigatório',
            'cns.required' => 'Campo CNS é obrigatório',
            'rg.required'=> 'Campo RG é obrigatório',
            'senha.required'=> 'Campo senha é obrigatório',
            'valida_senha.required'=> 'Campo senha é obrigatório',
            'nome.max' => 'O valor nome é muito longo!',
            'endereco.max'=> 'O valor endereço é muito longo!',
            'data_nascimento.max'=> 'O valor data de nascimento é muito longo!',
            'cns.max_digits' => 'O valor CNS é muito longo!',
            'rg.max_digits'=> 'O valor RG é muito longo!',
            'senha.max'=> 'O valor senha é muito longo!',
            'valida_senha.max'=> 'O valor senha é muito longo!',
            'cns.numeric' => 'O valor CNS deve ser um número!',
            'rg.numeric'=> 'O valor RG deve ser um número!',
            'nome.min' => 'O valor nome é muito curto!',
            'cpf.regex' => 'O CPF deve estar no formato 000.000.000-99.',
            'endereco.min'=> 'O valor endereço é muito curto!',
            'data_nascimento.min'=> 'O valor data de nascimento é muito curto!',
            'cep.regex'=> 'O CEP deve estar no formato 88000-000',
            'cns.min_digits' => 'O valor CNS é muito curto!',
            'rg.min_digits'=> 'O valor RG é muito curto!',
            'senha.min'=> 'O valor senha é muito curto!',
            'valida_senha.min'=> 'O valor senha é muito curto!',
        ];
    }

}
