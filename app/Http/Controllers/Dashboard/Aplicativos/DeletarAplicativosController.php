<?php

namespace App\Http\Controllers\Dashboard\Aplicativos;

use App\Http\Controllers\Controller;
use App\Model\Aplicativos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class DeletarAplicativosController extends Controller
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
        $aplicativos = Aplicativos::where('id', $id)->update([
            'ocultar' => 1,
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = "Aplicativo removida com sucesso!";

        if (!$aplicativos) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha ao remover aplicativo";
        }

        Session::flash('erro_msg', $resultado);
        return Redirect::to('painel/aplicativos');
    }
}
