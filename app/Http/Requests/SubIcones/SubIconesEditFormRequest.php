<?php

namespace App\Http\Requests\SubIcones;

use Illuminate\Foundation\Http\FormRequest;

class SubIconesEditFormRequest extends FormRequest
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
            'icones_id' => 'required|numeric',
            'nome' => 'required|max:100',
            'caminho' => 'required|max:100',
            'link' => 'required|max:1024',
        ];
    }

    public function messages()
    {
        return [
            'icones_id.required' => 'O campo icone é de preenchimento obrigatório.',
            'icones_id.numeric' => 'O campo icone só aceita valores númericos.',
            'caminho.required' => 'O campo caminho é de preenchimento obrigatório.',
            'caminho.max' => 'O campo caminho só pode ter no máximo 100 caracteres.',
            'link.required' => 'O campo link é de preenchimento obrigatório.',
            'link.max' => 'O campo link só pode ter no máximo 1024 caracteres',
            'nome.required' => 'O campo nome é de preenchimento obrigatório.',
            'nome.max' => 'O campo nome só pode ter no máximo 100 caracteres.',
        ];
    }
}
