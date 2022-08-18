<?php

namespace App\Http\Requests\TiLocal;

use Illuminate\Foundation\Http\FormRequest;

class TiLocalFormRequest extends FormRequest
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
            'secretaria_id' => 'required|numeric',
            'nome' => 'required|max:100',
//            'telefone' => 'required|max:100|regex:/^[-0-9\+]+$/',
            'email' => 'required|email|max:100',
        ];
    }

    public function messages()
    {
        return [
            'secretaria_id.required' => 'O campo secretária é de preenchimento obrigatório.',
            'secretaria_id.numeric' => 'O campo secretária só aceita valores númericos.',
            'nome.required' => 'O campo nome é de preenchimento obrigatório.',
            'nome.max' => 'O campo nome só pode ter no máximo 100 caracteres.',
            'telefone.required' => 'O campo telefone é de preenchimento obrigatório.',
            'telefone.max' => 'O campo telefone só aceitar no máximo 100 caracteres.',
            'telefone.regex' => 'O campo telefone não aceita letras, somente números.',
            'email.required' =>  'O campo email é de preenchimento obrigatório',
            'email.max' => 'O campo email só pode ter no máximo 100 caracteres.',
            'email.email' => 'O email precisa ser valido.',
        ];
    }
}
