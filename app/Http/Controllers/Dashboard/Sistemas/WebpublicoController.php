<?php

namespace App\Http\Controllers\Dashboard\Sistemas;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sistema\WebPublicoFormRequest;
use App\Model\Sistemas_Webpublico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class WebpublicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('painel.sistemas.webpublico', [
           'config' => Sistemas_Webpublico::all()->last(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WebPublicoFormRequest $request)
    {
        //
        $sistema = Sistemas_Webpublico::create([
            'num_usuarios' => $request->post('num_usuarios'),
            'num_linhas_codigo' => $request->post('num_linhas_codigo'),
            'num_modulos' => $request->post('num_modulos'),
            'num_telas' => $request->post('num_tabelas'),
            'num_tabelas' => $request->post('num_tabelas'),
            'num_horas' => $request->post('num_horas'),
            'num_areas_gestao' => $request->post('num_areas_gestao'),
            'ch_recursos_humanos' => $request->post('ch_recursos_humanos'),
            'hr_recursos_humanos' => $request->post('hr_recursos_humanos'),
            'ch_administrativo' => $request->post('ch_administrativo'),
            'hr_administrativo' => $request->post('hr_administrativo'),
            'ch_contabil' => $request->post('ch_contabil'),
            'hr_contabil' => $request->post('hr_contabil'),
            'ch_transporte' => $request->post('ch_transporte'),
            'hr_transporte' => $request->post('hr_transporte'),
            'ch_portais' => $request->post('ch_portais'),
            'hr_portais' => $request->post('hr_portais'),
            'ch_previdenciario' => $request->post('ch_previdenciario'),
            'hr_previdenciario' => $request->post('hr_previdenciario'),
            'ch_tributario' => $request->post('ch_tributario'),
            'hr_tributario' => $request->post('hr_tributario'),
            'criado_por' => Session::get('usuario')->id,
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = "Dados Alterados com sucesso!";

        if (!$sistema) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha ao salvar configuração";
        }
        Session::flash('erro_msg', $resultado);
        return Redirect::to('/painel/sistemas/webpublico');
    }
}
