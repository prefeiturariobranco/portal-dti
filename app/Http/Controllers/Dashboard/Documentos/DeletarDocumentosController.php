<?php

namespace App\Http\Controllers\Dashboard\Documentos;

use App\Http\Controllers\Controller;
use App\Model\Documentos;
use App\Model\Documentos_arquivos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class DeletarDocumentosController extends Controller
{
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $documento = Documentos::where('id', $id)->update([
            'ocultar' => 1
        ]);
        $resultado['error'] = 1;
        $resultado['msg'] = "Documento removido com sucesso!";

        if (!$documento) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha ao remover documento";
        }
        Session::flash('erro_msg', $resultado);
        return Redirect::to('painel/documentos');
    }
}
