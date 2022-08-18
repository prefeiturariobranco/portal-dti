<?php

namespace App\Http\Controllers\Dashboard\Documentos;

use App\Http\Controllers\Controller;
use App\Model\Documentos_arquivos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class RemoverArquivosController extends Controller
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
        $arquivo = Documentos_arquivos::where('id', $id)->update([
            'ocultar' => 1,
        ]);
        $arquivo = Documentos_arquivos::where('id', $id)->first();

        $resultado['error'] = 1;
        $resultado['msg'] = "Documento removido com sucesso!";

        if (!$arquivo) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha ao remover documento";
        }
        Session::flash('erro_msg', $resultado);
        return Redirect::to('/painel/documentos/editar/'.$arquivo->documentos_id);
    }
}
