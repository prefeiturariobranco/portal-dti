<?php

namespace App\Http\Controllers\Dashboard\Noticias;

use App\Http\Controllers\Controller;
use App\Model\Postagens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class DeletarNoticiasController extends Controller
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
        $noticia = Postagens::where('id', $id)->update([
            'ocultar' => 1,
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = "Notícia removida com sucesso!";

        if (!$noticia) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha ao remover notícia";
        }

        Session::flash('erro_msg', $resultado);
        return Redirect::to('painel/noticias');
    }
}
