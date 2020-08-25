<?php

namespace App\Http\Requests\Usuarios;

use Illuminate\Foundation\Http\FormRequest;

class UsuariosEditFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'nome' => 'required',
            'email' => 'required|email',
            'login' => 'required|min:4|max:32',
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
        ];
    }
}
