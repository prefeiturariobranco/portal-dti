<?php

namespace App\Http\Controllers\Dashboard\Subicones;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubIcones\SubIconesEditFormRequest;
use App\Model\Icones;
use App\Model\Sub_Icone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class EditarSubiconesController extends Controller
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
        return view('painel.subicones.editar', [
           'subIcone' => Sub_Icone::where('id', $id)->first(),
           'icones' => Icones::all(),
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SubIconesEditFormRequest $request)
    {
        //
        $subIcoens = Sub_Icone::where('id', $request->post('subicone_id'))->update([
            'nome'=> $request->post('nome'),
            'caminho'=> $request->post('caminho'),
            'link'=> $request->post('link'),
            'icones_id'=> $request->post('icones_id'),
            'ocultar' => $request->post('ocultar')
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = 'Subicone alterado com sucesso!';

        if (!$subIcoens) {
            $resultado['error'] = 2;
            $resultado['msg'] = 'Falha alterar subicone';
        }

        Session::flash('erro_msg', $resultado);
        return Redirect::to('/painel/subicones');
    }

}
