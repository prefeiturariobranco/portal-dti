<?php

namespace App\Http\Requests\Acontecimentos;

use Illuminate\Foundation\Http\FormRequest;

class AcontecimentosStoreFormRequest extends FormRequest
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
            'titulo' => 'required',
            'descricao' => 'required',
            'ano' => 'required',
        ];
    }

    public function messages()
    {
        return [
          'titulo.required' => 'O campo título é de preenchimento obrigatório',
          'descricao.required' => 'O campo descrição é de preenchimento obrigatório',
          'ano.required' => 'O campo ano é de preenchimento obrigatório',
        ];
    }
}
