<?php

namespace App\Http\Requests\Contatos;

use Illuminate\Foundation\Http\FormRequest;

class ContatosFormRequest extends FormRequest
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
            'departamento_id' => 'required|numeric',
            'cargo_id' => 'required|numeric',
            'nome' => 'required|max:100',
            'telefone' => 'nullable|unique:contatos',
            'email' => 'required|max:100|email',
        ];
    }

    public function messages()
    {
        return [
            'departamento_id.required' => 'O campo departamento é de preenchimento obrigatório.',
            'departamento_id.numeric' => 'O campo departamento só aceita valores númericos.',
            'cargo_id.required' => 'O campo cargo é de preenchimento obrigatório.',
            'cargo_id.numeric' => 'O campo cargo só aceita valores númericos.',
            'nome.required' => 'O campo nome é de preenchimento obrigatório.',
            'nome.max' => 'O campo nome só pode ter no máximo 100 caracteres.',
            'telefone.max' => 'O campo telefone só aceitar no máximo 50 caracteres.',
            'telefone.regex' => 'O campo telefone precisa seguir o padrão (DDD) XXXX-XXXX',
            'telefone.unique' => 'Número de telefone já existe',
            'email.required' =>  'O campo email é de preenchimento obrigatório',
            'email.max' => 'O campo email só pode ter no máximo 100 caracteres.',
            'email.email' => 'O email precisa ser valido.',
        ];
    }
}
