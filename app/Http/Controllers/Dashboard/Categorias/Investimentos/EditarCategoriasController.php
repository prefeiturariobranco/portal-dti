<?php

namespace App\Http\Controllers\Dashboard\Categorias\Investimentos;

use App\Http\Controllers\Controller;
use App\Model\Investimentos_categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EditarCategoriasController extends Controller
{
    public function edit($id)
    {
        return view('painel.categorias.investimentos.editar', [
            'categoria' => Investimentos_categorias::where('id', $id)->first(),
        ]);
    }

    public function update(Request $request)
    {
        $categoria = Investimentos_categorias::where('id', $request->post('investimento_id'))->update([
            'nome' => $request->nome
        ]);
        $resultado['error'] = 1;
        $resultado['msg'] = 'Categoria alterada com sucesso!';

        if (!$categoria) {
            $resultado['error'] = 2;
            $resultado['msg'] = 'Falha ao alterar categoria';
        }

        Session::flash('erro_msg', $resultado);
        return redirect('/painel/categorias-investimentos');
    }
}
