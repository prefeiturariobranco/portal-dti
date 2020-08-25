<?php

namespace App\Http\Requests\Usuarios;

use Illuminate\Foundation\Http\FormRequest;

class UsuariosFormRequest extends FormRequest
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
            'nome' => 'required',
            'email' => 'required|email',
            'departamento_id' => 'required|numeric',
            'cargo_id' => 'required|numeric',
            'login' => 'required|min:4|max:32',
            'senha' => 'required|min:6|max:32',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é de preenchimento obrigatório.',
            'email.required' => 'O campo email é de preenchimento obrigátorio.',
            'email.email' => 'O campo email não corresponde a um email.',
            'login.required' => 'O campo login é de preenchimento obrigatório.',
            'login.min' => 'O campo login precisa de no minímo 6 caracteres.',
            'login.max' => 'O campo login precisa de no máximo 32 caracteres.',
            'senha.required' => 'O campo senha é de preenchimento obrigatório.',
            'senha.min' => 'O campo senha precisa de no minímo 6 caracteres.',
            'senha.max' => 'O campo senha precisa de no máximo 32 caracteres.',
        ];
    }
}
