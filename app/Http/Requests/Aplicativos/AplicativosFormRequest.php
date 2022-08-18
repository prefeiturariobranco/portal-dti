<?php

namespace App\Http\Requests\Aplicativos;

use Illuminate\Foundation\Http\FormRequest;

class AplicativosFormRequest extends FormRequest
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
            'titulo' => 'nullable',
            'url' => 'nullable',
            'imagem' => 'nullable|image'
        ];
    }

    public function messages()
    {
        return[
            'titulo.required' => 'O campo título é obrigatório',
            'titulo.max' => 'O campo título aceita no maximo 128 caracteres',
            'url.required' => 'O campo url é obrigatório',
            'imagem.required' => 'O campo imagem é obrigatório'
        ];
    }
}
