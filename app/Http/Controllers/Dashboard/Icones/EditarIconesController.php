<?php

namespace App\Http\Controllers\Dashboard\Icones;

use App\Http\Controllers\Controller;
use App\Http\Requests\Icones\IconesEditFormRequest;
use App\Model\Icones;
use App\Model\Icones_categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class EditarIconesController extends Controller
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
        return view('painel.icones.editar', [
            'icone' => Icones::where('id', $id)->first(),
            'categorias' => Icones_categorias::where('status', 1)->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(IconesEditFormRequest $request)
    {
        //
        if (is_null($request->post('subtitulo'))) {
            $subtitulo = "";
        }
        else {
            $subtitulo = $request->post('subtitulo');
        }

        $icone = Icones::where('id', $request->post('icone_id'))->update([
            'icones_categorias_id' => $request->post('icones_categorias_id'),
            'caminho' => $request->post('caminho'),
            'link' => $request->post('link'),
            'nome' => $request->post('nome'),
            'subtitulo' => $subtitulo,
            'dinamico' => $request->post('dinamico'),
        ]);


        $resultado['error'] = 1;
        $resultado['msg'] = 'Ícone alterado com sucesso!';

        if ($icone != 1) {
            $resultado['error'] = 2;
            $resultado['msg'] = 'Falha ao alterar ícone';
        }

        Session::flash('erro_msg', $resultado);
        return Redirect::to('/painel/icones');
    }

}
