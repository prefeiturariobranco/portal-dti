<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Model\contadores_painel;
use App\Model\Contadores_site;
use App\Model\Documentos;
use App\Model\Equipe_config;
use App\Model\Infra_config;
use App\Model\Investimentos;
use App\Model\Sistemas_Webpublico;
use App\Model\Usuarios;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contadorContratos = Documentos::where('documentos_categorias_id', 1)->count();

        $investPMAT = Investimentos::where([
            ['ocultar', 0],
            ['investimentos_categorias_id', 3]
        ])->get();
        $investInfra = Investimentos::where([
            ['ocultar', 0],
            ['investimentos_categorias_id', 5]
        ])->get();
        $investSistema = Investimentos::where([
            ['ocultar', 0],
            ['investimentos_categorias_id', 1]
        ])->get();
        $investTotalPMAT = $investPMAT[0]->valor;
        $investRP = ($investInfra[0]->valor * 12) + ($investSistema[0]->valor * 12);
        $investTotalAnual = $investTotalPMAT + $investRP;

        $usuario = Usuarios::where('id', 1);
        $configEquipe = Equipe_config::all()->last();

        $contadorTotalEquipe = $configEquipe->num_comissionados + $configEquipe->num_terceirizados + $configEquipe->num_estagiarios + $configEquipe->num_efetivos;
        $contadorUsuarios = $usuario->count();
        $contadorAcessoDoDia = Contadores_painel::where('data_criacao', date('Y-m-d'))->count();

       return view('painel/index', [
           'contadorSite' => Contadores_site::all()->count(),
           'contadorPainel' => Contadores_painel::all()->count(),
           'estatisticasWebPublico' => Sistemas_Webpublico::all()->last(),
           'infraConfig' => Infra_config::all()->last(),
           'investTotalPMAT' => $investTotalPMAT,
           'investRP' => $investRP,
           'investTotalAnual' => $investTotalAnual,
           'usuarios' => Usuarios::where('ocultar', 0)->get(),
           'contadorUsuarios' => $contadorUsuarios,
           'contadorContratos' => $contadorContratos,
           'configEquipe' => $configEquipe,
           'contadorTotalEquipe' => $contadorTotalEquipe,
           'contadorAcessosDia' => $contadorAcessoDoDia
       ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
