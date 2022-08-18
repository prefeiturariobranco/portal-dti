<?php

namespace App\Http\Requests\Cargos;

use Illuminate\Foundation\Http\FormRequest;

class CargosFormResquest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|max:255',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo departamento é de preenchimento obrigatório.',
            'nome.max' => 'O tamanho máximo para esse campo é 255 caracteres'
        ];
    }
}
