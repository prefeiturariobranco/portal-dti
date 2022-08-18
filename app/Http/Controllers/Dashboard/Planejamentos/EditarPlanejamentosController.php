<?php

namespace App\Http\Controllers\Dashboard\Planejamentos;

use App\Http\Controllers\Controller;
use App\Model\Planejamentos;
use App\Model\Planejamentos_Categorias;
use App\Model\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class EditarPlanejamentosController extends Controller
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
        return view('painel.planejamentos.editar', [
            'planejamento' => Planejamentos::where('id', $id)->first(),
            'planejamentoCats' => Planejamentos_Categorias::where('ocultar', 0)->get(),
            'usuarios' => Usuarios::all(),
        ]);
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
    public function update(Request $request)
    {
        //
        $planejamento = Planejamentos::where('id', $request->post('planejamento_id'))->update([
            'titulo' => $request->post('titulo'),
            'descricao' => $request->post('descricao'),
            'data_entrega' => $request->post('data_entrega'),
            'responsavel' => $request->post('nome_responsavel'),
            'planejamentos_categorias_id' => $request->post('categoria_id'),
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = "Planejamento alterado com sucesso!";

        if (!$resultado) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha ao alterar planejamento";
        }

        Session::flash('erro_msg', $resultado);
        return Redirect::to('painel/planejamentos');
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
