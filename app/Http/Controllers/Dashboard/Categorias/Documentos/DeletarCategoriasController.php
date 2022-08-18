<?php

namespace App\Http\Controllers\Dashboard\Categorias\Documentos;

use App\Http\Controllers\Controller;
use App\Model\Documentos_categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DeletarCategoriasController extends Controller
{
    public function destroy($id)
    {
        $categoria = Documentos_categorias::where('id', $id)->update([
            'ocultar' => 1,
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = 'Categoria removida com sucesso!';

        if (!$categoria) {
            $resultado['error'] = 2;
            $resultado['msg'] = 'Falha ao remover categoria!';
        }

        Session::flash('erro_msg', $resultado);
        return redirect('/painel/categorias-documentos');
    }
}
