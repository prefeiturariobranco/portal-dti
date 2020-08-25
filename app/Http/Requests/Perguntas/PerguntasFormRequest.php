<?php

namespace App\Http\Requests\Perguntas;

use Illuminate\Foundation\Http\FormRequest;

class PerguntasFormRequest extends FormRequest
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
            //
            'titulo' => 'required|max:128',
            'conteudo' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'titulo.required' => 'O campo título é de preenchimento obrigatório.',
            'tiulo.max' => 'O campo título só aceita até 128 caracteres',
            'conteudo.required' => 'O campo conteúdo é de preenchimento obrigatório.',
        ];
    }
}
