<?php

namespace App\Http\Controllers\Dashboard\Infraestrutura;

use App\Http\Controllers\Controller;
use App\Http\Requests\Infraestrutura\InfraestruturaConfigFormRequest;
use App\Model\Infra_config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $config = Infra_config::all()->last();
        return view('painel.infraestrutura.config', [
            'config' => $config
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InfraestruturaConfigFormRequest $request)
    {
        //
        $infraConfig = Infra_config::create([
            'media_chamados_fibra' => $request->post('media_chamados_fibra'),
            'media_chamados_cidade_digital' => $request->post('media_chamados_cidade_digital'),
            'num_switch' => $request->post('num_switch'),
            'num_servidores_virtuais' => $request->post('num_servidores_virtuais'),
            'num_servidores_fisicos' => $request->post('num_servidores_fisicos'),
            'num_usuarios_internet' => $request->post('num_usuarios_internet'),
            'num_email_corp' => $request->post('num_email_corp'),
            'media_ataques' => $request->post('media_ataques'),
            'num_usuarios_internet_social' => $request->post('num_usuarios_internet_social'),
            'media_internet_social_dia' => $request->post('media_internet_social_dia'),
            'num_conexao_fibra' => $request->post('num_conexao_fibra'),
            'num_conexao_radio' => $request->post('num_conexao_radio'),
            'criado_por' => Session::get('DTI_PORTAL'),
        ]);
        $resultado['error'] = 1;
        $resultado['msg'] = 'Dado cadastrado com sucesso!';

        if (!$infraConfig->save()) {
            $resultado['error'] = 2;
            $resultado['msg'] = 'Falha ao cadastrar cofiguração!';
        }

        Session::flash('erro_msg', $resultado);
        return Redirect::to('/painel/infra/config');
    }
}
