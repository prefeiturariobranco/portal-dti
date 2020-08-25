<?php

namespace App\Http\Controllers\Dashboard\Acontecimentos;

use App\Http\Controllers\Controller;
use App\Model\Acontecimentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class DeletarAcontecimentosController extends Controller
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
        $acontecimento = Acontecimentos::where('id', $id)->update([
            'ocultar' => 1,
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = "Acontecimento removido com sucesso!";

        if (!$acontecimento) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha remover acontecimento";
        }

        Session::flash('erro_msg', $resultado);
        return Redirect::to('painel/acontecimentos');
    }
}
