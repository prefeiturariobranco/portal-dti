<?php

namespace App\Http\Controllers\Dashboard\Infraestrutura\Fibra;

use App\Http\Controllers\Controller;
use App\Http\Requests\Infraestrutura\InfraestruturaFormRequest;
use App\Model\Infra_historico_fibra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AlterarController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('painel.infraestrutura.fibra.alterar', [
            'registro' => Infra_historico_fibra::where('id', $id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InfraestruturaFormRequest $request)
    {
        //
        $hitoricoFibra = Infra_historico_fibra::where('id', $request->post('registro_id'))->update([
            'titulo' => $request->post('titulo'),
            'quilometragem' => $request->post('quilometragem'),
            'ano' => $request->post('ano'),
            'cor' => $request->post('cor'),
        ]);
        $resultado['error'] = 1;
        $resultado['msg'] = 'Registro alterado com sucesso!';

        if ($hitoricoFibra != 1) {
            $resultado['error'] = 2;
            $resultado['msg'] = 'Falha ao alterar registro!';
        }

        Session::flash('erro_msg', $resultado);
        return Redirect::to('/painel/infra/fibra/listar');

    }

}
