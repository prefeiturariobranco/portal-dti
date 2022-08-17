<?php

namespace App\Http\Controllers\Dashboard\Infraestrutura\Fibra;

use App\Http\Controllers\Controller;
use App\Http\Requests\Infraestrutura\InfraestruturaFormRequest;
use App\Model\Infra_historico_fibra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class CadastrarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('painel.infraestrutura.fibra.cadastrar');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InfraestruturaFormRequest $request)
    {
        //
        $infraHistoricoFibra = Infra_historico_fibra::create([
            'titulo' => $request->post('titulo'),
            'quilometragem' => $request->post('quilometragem'),
            'ano' => $request->post('ano'),
            'cor' => $request->post('cor'),
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = "Registro cadastrado com sucesso!";

        if(!$infraHistoricoFibra->save()){
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha ao cadastrar registro";
        }

        Session::flash('erro_msg', $resultado);
        return Redirect::to('/painel/infra/fibra/listar');
    }

}
