<?php

namespace App\Http\Controllers\Dashboard\Investimentos;

use App\Http\Controllers\Controller;
use App\Model\Investimentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class DeletarInvestimentosController extends Controller
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
        $investimento = Investimentos::where('id', $id)->update([
            'ocultar' => 1,
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = "Investimento removido com sucesso!";

        if (!$investimento) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha ao remover investimento";
        }

        Session::flash('erro_msg', $resultado);
        return Redirect::to('painel/investimentos');
    }
}
