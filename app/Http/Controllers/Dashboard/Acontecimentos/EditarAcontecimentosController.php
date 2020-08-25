<?php

namespace App\Http\Controllers\Dashboard\Acontecimentos;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acontecimentos\AcontecimentosEditFormRequest;
use App\Model\Acontecimentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class EditarAcontecimentosController extends Controller
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
        return view('painel.acontecimentos.editar', [
            'acontecimento' => Acontecimentos::where('id', $id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AcontecimentosEditFormRequest $request)
    {
        //
        $acontecimento = Acontecimentos::where('id', $request->post('acontecimento_id'))->update([
            'titulo' => $request->post('titulo'),
            'descricao' => $request->post('descricao'),
            'ano' => $request->post('ano'),
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = "Acontecimento alterado com sucesso!";

        if (!$acontecimento) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha alterar acontecimento";
        }

        Session::flash('erro_msg', $resultado);
        return Redirect::to('painel/acontecimentos');
    }

}
