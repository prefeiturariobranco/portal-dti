<?php

namespace App\Http\Controllers\Dashboard\Anexos;

use App\Http\Controllers\Controller;
use App\Model\Documentos_arquivos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EditarAnexosController extends Controller
{
    public function edit($id)
    {
        return view('painel.anexos.editar', [
            'doc_ar' => Documentos_arquivos::where('id', $id)->first(),
        ]);
    }

    public function update(Request $request)
    {
        try {
            $doc_ar = Documentos_arquivos::where('id', $request->anexo_id)->first();

            if (!empty($request->file('caminho'))) {
                \Storage::delete($doc_ar->caminho);
                $fileName = $request->caminho->store('public/documentos');
                $doc_ar->caminho = $fileName;
            }

            $resultado['error'] = 1;
            $resultado['msg'] = "Arquivo alterado com sucesso!";

            if (!$doc_ar){
                $resultado['error'] = 2;
                $resultado['msg'] = "Falha ao alterar arquivo";
            }
            $doc_ar->save();

            Session::flash('erro_msg', $resultado);
            return redirect('painel/documentos');
        }catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }
}
