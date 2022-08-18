<?php

namespace App\Http\Controllers\Dashboard\Categorias\Documentos;

use App\Http\Controllers\Controller;
use App\Model\Documentos_categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EditarCategoriasController extends Controller
{
    public function edit($id)
    {
        return view('painel.categorias.documentos.editar',[
            'categoria' => Documentos_categorias::where('id', $id)->first()
        ]);
    }

    public function update(Request $request)
    {
        $doc = Documentos_categorias::where('id', $request->post('documento_id'))->update([
            'nome' => $request->nome
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = 'Categoria alterada com sucesso!';

        if (!$doc) {
            $resultado['error'] = 2;
            $resultado['msg'] = 'Falha ao alterar categoria';
        }

        Session::flash('erro_msg', $resultado);
        return redirect('/painel/categorias-documentos');
    }
}
