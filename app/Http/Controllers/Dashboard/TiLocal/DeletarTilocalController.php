<?php

namespace App\Http\Controllers\Dashboard\TiLocal;

use App\Http\Controllers\Controller;
use App\Model\Ti_Local;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class DeletarTilocalController extends Controller
{
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $tiLocal = Ti_Local::where('id', $id)->update([
            'ocultar' => 1,
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = "Tilocal removida com sucesso!";

        if (!$tiLocal) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha ao remover tilocal";
        }

        Session::flash('erro_msg', $resultado);
        return Redirect::to('painel/tilocal');
    }
}
