<?php

namespace App\Http\Requests\Unidade;

use Illuminate\Foundation\Http\FormRequest;

class UnidadeFormRequest extends FormRequest
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
            'nome_unidade' => 'required|unique:unidades,nome_unidade,'.$this->request->get('id'),
        ];
    }

    public function messages()
    {
        return [
            'nome_unidade.required' => 'O campo nome da unidade é obrigatório.',
            'nome_unidade.unique' => 'Unidade já cadastrada.',
        ];
    }
}
