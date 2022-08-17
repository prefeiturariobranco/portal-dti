<?php

namespace App\Http\Controllers\Dashboard\Categorias\Planejamentos;

use App\Http\Controllers\Controller;
use App\Model\Planejamentos_Categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Mockery\Exception;

class EditarCategoriasController extends Controller
{
    public function edit($id)
    {
        return view('painel.categorias.planejamentos.editar', [
            'categoria' => Planejamentos_Categorias::where('id', $id)->first()
        ]);
    }

    public function update(Request $request)
    {
            $categoria = Planejamentos_Categorias::where('id', $request->post('planejamento_id'))->update([
                'nome' => $request->nome,
            ]);

            $resultado['error'] = 1;
            $resultado['msg'] = 'Categoria alterada com sucesso!';

            if (!$categoria) {
                $resultado['error'] = 2;
                $resultado['msg'] = 'Falha ao alterar categoria';
            }
            Session::flash('erro_msg', $resultado);
            return redirect('/painel/categorias-planejamentos');
    }
}
