<?php

namespace App\Http\Controllers\Dashboard\Categorias;

use App\Http\Controllers\Controller;
use App\Http\Requests\Categorias\CategoriasEditFormRequest;
use App\Model\Icones_categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class EditarCategoriasController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('painel.categorias.icones.editar', [
            'categoria' => Icones_categorias::where('id', $id)->first(),
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoriasEditFormRequest $request)
    {
        //
        $categoria = Icones_categorias::where('id', $request->post('categoria_id'))->update([
            'nome' => $request->nome,
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = 'Categoria alterado com sucesso!';

        if (!$categoria) {
            $resultado['error'] = 2;
            $resultado['msg'] = 'Falha alterar categoria';
        }

        Session::flash('erro_msg', $resultado);
        return Redirect::to('/painel/categorias');
    }
}
