<?php

namespace App\Http\Controllers\Dashboard\Categorias\Investimentos;

use App\Http\Controllers\Controller;
use App\Model\Investimentos_categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DeletarCategoriasController extends Controller
{
    public function destroy($id)
    {
        $categoria = Investimentos_categorias::where('id', $id)->update([
            'ocultar' => 1
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = 'Categoria deletada com sucesso!';

        if (!$categoria) {
            $resultado['error'] = 2;
            $resultado['msg'] = 'Erro ao deletar categoria';
        }

        Session::flash('erro_msg', $resultado);
        return redirect('/painel/categorias-investimentos');
    }
}
