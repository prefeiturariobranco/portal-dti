<?php

namespace App\Http\Requests\Icones;

use Illuminate\Foundation\Http\FormRequest;

class IconesEditFormRequest extends FormRequest
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
//            'icones_categorias_id' => 'required|numeric',
            'caminho' => 'required|max:100',
            'link' => 'required|max:1024',
            'nome' => 'required|max:100',
            'subtitulo' => 'max:100',
            'dinamico' => 'required|numeric'

        ];
    }

    public function messages()
    {
        return [
            'icones_categorias_id.required' => 'O campo categoria é de preenchimento obrigatório.',
            'icones_categorias_id.numeric' => 'O campo categoria só aceita valores númericos.',
            'caminho.required' => 'O campo caminho é de preenchimento obrigatório.',
            'caminho.max' => 'O campo caminho só pode ter no máximo 100 caracteres.',
            'link.required' => 'O campo link é de preenchimento obrigatório.',
            'link.max' => 'O campo link só pode ter no máximo 1024 caracteres',
            'nome.required' => 'O campo nome é de preenchimento obrigatório.',
            'nome.max' => 'O campo nome só pode ter no máximo 100 caracteres.',
//            'subtitulo.required' => 'O campo subtítulo é de preenchimento obrigatório.',
            'subtitulo.max' => 'O campo subtítulo só pode ter no máximo 100 caracteres.',
            'dinamico.required' => 'O campo site externo é de preenchimento obrigatório.',
            'dinamico.numeric' => 'O campo site externo só aceita valores númericos',
        ];
    }
}
