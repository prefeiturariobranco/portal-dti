<?php

namespace App\Http\Requests\Reuniao;

use Illuminate\Foundation\Http\FormRequest;

class AdicionarParticipanteFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'reuniao_id' => 'unique:usuarios_reuniao,NULL,id,participante_id',
            'participante_id' => 'unique:usuarios_reuniao,participante_id,NULL,id,reuniao_id',
        ];
    }

//    public function messages()
//    {
//        return [
//            'participante_id.unique' => 'Participante já adicionado a reunião.',
//            'reuniao_id.unique' => 'Participante já adicionado a reunião.',
//        ];
//    }
}
