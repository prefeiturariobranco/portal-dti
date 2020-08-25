<?php

namespace App\Http\Controllers\Dashboard\TiLocal;

use App\Http\Controllers\Controller;
use App\Http\Requests\TiLocal\TiLocalFormRequest;
use App\Model\Secretarias;
use App\Model\Ti_Local;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class EditarTilocalController extends Controller
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
        return view('painel.tilocal.editar', [
           'tiLocal' => Ti_Local::where('id', $id)->first(),
            'secretarias' => Secretarias::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TiLocalFormRequest $request)
    {
        //
        $tiLocal = Ti_Local::where('id', $request->post('tilocal_id'))->update([
            'nome' => $request->post('nome'),
            'telefone' => $request->post('telefone'),
            'email' => $request->post('email'),
            'secretaria_id' => $request->post('secretaria_id'),
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = "Tilocal alterado com sucesso!";

        if (!$tiLocal) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha alterar tilocal";
        }

        Session::flash('erro_msg', $resultado);
        return  Redirect::to('painel/tilocal');
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
