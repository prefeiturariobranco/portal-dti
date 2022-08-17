<?php

namespace App\Http\Controllers\Dashboard\Perguntas;

use App\Http\Controllers\Controller;
use App\Http\Requests\Perguntas\PerguntasFormRequest;
use App\Model\Perguntas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class EditarPerguntasController extends Controller
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
        return view('painel.perguntas.editar', [
            'pergunta' => Perguntas::where('id', $id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PerguntasFormRequest $request)
    {
        //
        $pergunta = Perguntas::where('id', $request->post('pergunta_id'))->update([
            'titulo' => $request->post('titulo'),
            'conteudo'=> $request->post('conteudo'),
        ]);
        $reposta['error'] = 1;
        $reposta['msg'] = 'Pergunta alterada com sucesso!';
        if (!$reposta) {
            $reposta['error'] = 2;
            $reposta['msg'] = 'Falha ao alterar pergunta';
        }

        Session::flash('erro_msg', $reposta);
        return Redirect::to('/painel/perguntas');
    }

}
