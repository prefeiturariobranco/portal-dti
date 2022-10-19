<?php

namespace App\Http\Controllers\Dashboard\Anexos;

use App\Http\Controllers\Controller;
use App\Model\Documentos_arquivos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class DeletarAnexosController extends Controller
{
    public function destroy($id)
    {
        $doc_ar = Documentos_arquivos::where('id', $id)->update([
            'ocultar' => 1,
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = "Arquivo removido com sucesso!";

        if (!$doc_ar) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha ao remover arquivo";
        }

        Session::flash('erro_msg', $resultado);
        return \redirect('/painel/documentos');
    }
}
