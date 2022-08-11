<?php

namespace App\Http\Controllers\Dashboard\Categorias\Mapas;

use App\Http\Controllers\Controller;
use App\Model\Mapas_Categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EditarCategoriasController extends Controller
{
    public function edit($id)
    {
        return view('painel.categorias.mapas.editar', [
            'categoria' => Mapas_Categorias::where('id', $id)->first()
        ]);
    }

    public function update(Request $request)
    {
        $categoria = Mapas_Categorias::where('id', $request->post('mapa_id'))->update([
            'nome' => $request->nome
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = 'Categoria alterar com sucesso!';

        if (!$categoria) {
            $resultado['error'] = 2;
            $resultado['msg'] = 'Falha ao alterar categoria';
        }

        Session::flash('erro_msg', $resultado);
        return redirect('/painel/categorias-mapas');
    }
}
