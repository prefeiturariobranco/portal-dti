<?php

namespace App\Http\Requests\Sistema;

use Illuminate\Foundation\Http\FormRequest;

class WebPublicoFormRequest extends FormRequest
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
            'num_usuarios' => 'required|numeric',
            'num_linhas_codigo' => 'required|numeric',
            'num_modulos' => 'required|numeric',
            'num_telas' => 'required|numeric',
            'num_tabelas' => 'required|numeric',
            'num_horas' => 'required|numeric',
            'num_areas_gestao' => 'required|numeric',
            'ch_recursos_humanos' => 'required|numeric',
            'hr_recursos_humanos' => 'required|numeric',
            'ch_administrativo' => 'required|numeric',
            'hr_administrativo' => 'required|numeric',
            'ch_contabil' => 'required|numeric',
            'hr_contabil' => 'required|numeric',
            'ch_transporte' => 'required|numeric',
            'hr_transporte' => 'required|numeric',
            'ch_portais' => 'required|numeric',
            'hr_portais' => 'required|numeric',
            'ch_previdenciario' => 'required|numeric',
            'hr_previdenciario' => 'required|numeric',
            'ch_tributario' => 'required|numeric',
            'hr_tributario' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'num_usuarios.required' => 'O campo número de usuários é de preenchimento obrigatório.',
            'num_linhas_codigo.required' => 'O campo número de linhas de código é de preenchimento obrigatório.',
            'num_modulos.requried' => 'O campo módulo de sistema é de preenchimento obrigatório.',
            'num_telas.required' => 'O campo número de telas é de preenchimento obrigatório.',
            'num_tabelas.required' => 'O campo número de tabelas de banco é de preenchimento obrigatório.',
            'num_horas.required' => 'O campo número de horas é de preenchimento obrigatório.',
            'num_areas_gestao.required' => 'O campo número de áreas de atuação é de preenchimento obrigatório.',
            'ch_recursos_humanos.required' => 'O campo chamados recursos humanos é de preenchimento obrigatório.',
            'hr_recursos_humanos.required' => 'O campo chamados recursos humanos - hora é de preenchimento obrigatório.',
            'ch_administrativo.required' => 'O campo chamados recursos administrativos é de preenchimento obrigatório.',
            'hr_administrativo.required' => 'O campo chamados recursos administrativos - hora é de preenchimento obrigatório.',
            'ch_contabil.required' => 'O campo chamados contabil é de preenchimento obrigatório.',
            'hr_contabil.required' => 'O campo chamados contabil - hora é de preenchimento obrigatório.',
            'ch_transporte.required' => 'O campo chamados trânsito/tranporte é de preenchimento obrigatório.',
            'hr_transporte.required' => 'O campo chamados trânsito/tranporte - hora é de preenchimento obrigatório.',
            'ch_portais.required' => 'O campo chamados portais é de preenchimento obrigatório.',
            'hr_portais.required' => 'O campo chamados portais - hora é de preenchimento obrigatório.',
            'ch_previdenciario.required' => 'O campo chamados previdência é de preenchimento obrigatório.',
            'hr_previdenciario.required' => 'O campo chamdos previdência - hora é de preenchimento obrigatório.',
            'ch_tributario.required' => 'O campo chamados tributários é de preenchimento obrigatório.',
            'hr_tributario.required' => 'O campo chamdos tributários - hora é de preenchimento obrigatório.',

            'num_usuarios.numeric' => 'O campo só pode ser preenchindo com informacões númericas.',
            'num_linhas_codigo.numeric' => 'O campo só pode ser preenchindo com informacões númericas.',
            'num_modulos.numeric' => 'O campo só pode ser preenchindo com informacões númericas.',
            'num_telas.numeric' => 'O campo só pode ser preenchindo com informacões númericas.',
            'num_tabelas.numeric' => 'O campo só pode ser preenchindo com informacões númericas.',
            'num_horas.numeric' => 'O campo só pode ser preenchindo com informacões númericas.',
            'num_areas_gestao.numeric' => 'O campo só pode ser preenchindo com informacões númericas.',
            'ch_recursos_humanos.numeric' => 'O campo só pode ser preenchindo com informacões númericas.',
            'hr_recursos_humanos.numeric' => 'O campo só pode ser preenchindo com informacões númericas.',
            'ch_administrativo.numeric' => 'O campo só pode ser preenchindo com informacões númericas.',
            'hr_administrativo.numeric' => 'O campo só pode ser preenchindo com informacões númericas.',
            'ch_contabil.numeric' => 'O campo só pode ser preenchindo com informacões númericas.',
            'hr_contabil.numeric' => 'O campo só pode ser preenchindo com informacões númericas.',
            'ch_transporte.numeric' => 'O campo só pode ser preenchindo com informacões númericas.',
            'hr_transporte.numeric' => 'O campo só pode ser preenchindo com informacões númericas.',
            'ch_portais.numeric' => 'O campo só pode ser preenchindo com informacões númericas.',
            'hr_portais.numeric' => 'O campo só pode ser preenchindo com informacões númericas.',
            'ch_previdenciario.numeric' => 'O campo só pode ser preenchindo com informacões númericas.',
            'hr_previdenciario.numeric' => 'O campo só pode ser preenchindo com informacões númericas.',
            'ch_tributario.numeric' => 'O campo só pode ser preenchindo com informacões númericas.',
            'hr_tributario.numeric' => 'O campo só pode ser preenchindo com informacões númericas.',
        ]; // TODO: Change the autogenerated stub
    }
}
