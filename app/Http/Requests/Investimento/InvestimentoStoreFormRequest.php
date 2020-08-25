<?php

namespace App\Http\Requests\Investimento;

use Illuminate\Foundation\Http\FormRequest;

class InvestimentoStoreFormRequest extends FormRequest
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
            'nome' => 'required|max:128',
            'valor' => 'required|numeric',
            'categoria' => 'required|numeric',
            'cor' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é de preenchimento obrigatório.',
            'nome.max' => 'O campo nome só aceita 128 caracteres.',
            'valor.required' => 'O campo valor é de preenchimento obrigatório.',
            'valor.numeric' => 'O campo valor só aceita números.',
            'categoria.required' => 'O campo categoria é de preenchimento obrigatório.',
            'categoria.numeric' => 'O campo categoria só aceita números.',
            'cor.required' => 'O campo cor é de preenchimento obrigátorio.',
        ];
    }
}
