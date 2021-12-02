<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertiesStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            'office_id' => ['nullable', 'exists:offices,id'],
            'realtor_id' => ['nullable', 'exists:realtors,id'],
            'keys_words_id' => ['nullable', 'exists:keys_words,id'],
            'nome' => ['required', 'max:255', 'string'],
            'foto' => ['nullable', 'file'],
            'logradouro ' => ['nullable', 'max:255', 'string'],
            'numero' => ['nullable', 'max:255', 'string'],
            'bairro' => ['nullable', 'max:255', 'string'],
            'cidade' => ['nullable', 'max:255', 'string'],
            'estado' => ['nullable', 'max:255', 'string'],
            'cep' => ['nullable', 'max:255', 'string'],
            'complemento' => ['nullable', 'max:255', 'string'],
            'descricao' => ['nullable', 'max:255', 'string'],
            'area' => ['nullable', 'max:255', 'string'],
            'quarto' => ['nullable', 'max:255', 'string'],
            'banheiro' => ['nullable', 'max:255', 'string'],
            'vaga_garagem' => ['nullable', 'max:255', 'string'],
            'status' => ['nullable', 'max:255', 'string'],
            'preco' => ['nullable', 'max:255', 'string'],
            'suite' => ['nullable', 'max:255', 'string'],
            'tomador_decisao' => ['nullable', 'max:255', 'string'],
            'tipo_imovel' => ['nullable', 'max:255', 'string'],
            'localizacao' => ['nullable', 'max:255', 'string'],
            'prazo_venda' => ['nullable', 'max:255', 'string'],
            'financiamento' => ['nullable', 'max:255', 'string'],
            'tipo_permuta' => ['nullable', 'max:255', 'string'],
            'tipo_venda' => ['nullable', 'max:255', 'string'],
            'mobilia' => ['nullable', 'max:255', 'string'],
            'pet' => ['nullable', 'max:255', 'string'],
            'tipo_pet' => ['nullable', 'max:255', 'string'],
            'fumante' => ['nullable', 'max:255', 'string'],
            'valor_condominio' => ['nullable', 'max:255', 'string'],
            'valor_iptu' => ['nullable', 'max:255', 'string'],
            'trabalha_fora' => ['nullable', 'max:255', 'string'],
            'tipo_trabalho' => ['nullable', 'max:255', 'string'],
            'proximidade_praia' => ['nullable', 'max:255', 'string'],

        ];
    }
}
