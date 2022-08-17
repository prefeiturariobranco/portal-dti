<?php

namespace App\Http\Controllers\Dashboard\Planejamentos;

use App\Http\Controllers\Controller;
use App\Model\Planejamentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class DeletarPlanejamentosController extends Controller
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
        $planejamneto = Planejamentos::where('id', $id)->update([
            'ocultar' => 1,
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = "Planejamento removido com sucesso!";

        if (!$planejamneto) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha ao remover planejamento";
        }

        Session::flash('erro_msg', $resultado);
        return Redirect::to('painel/planejamentos');
    }
}
