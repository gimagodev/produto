<?php

namespace Produtos\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;  //false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'nome' => 'required|min:5',
          'descricao'=> 'required'
        ];
    }

    // https://www.youtube.com/watch?v=TKoQuIby6Ps
    public function messages()
    {
        return [
            'nome.required'=> 'O campo nome é obrigatório',
            'nome.min' => 'O campo nome deve ter ao menos 5 caracteres',
            'descricao.required' => 'O campo descrição é obrigatório'
        ];

    }
}
