<?php

namespace App\Http\Requests\Sistema;

use Illuminate\Foundation\Http\FormRequest;

class SistemaFormRequest extends FormRequest
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
            'nome_sistema' => 'required|unique:sistemas,nome_sistema'.$this->request->get('id'),
        ];
    }

    public function messages()
    {
        return [
            'nome_sistema.required' => 'O campo nome do sistema é obrigatório.',
            'nome_sistema.unique' => 'Sistema já cadastrado.',
        ];
    }
}
