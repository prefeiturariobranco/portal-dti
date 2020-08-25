<?php

namespace App\Http\Controllers\Dashboard\Noticias;

use App\Http\Controllers\Controller;
use App\Http\Requests\Noticias\NoticiasFormRequest;
use App\Model\Postagens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class EditarNoticiasController extends Controller
{
    public function show($id)
    {
        //
        return view('painel.noticiais.editar', [
            'noticia' => Postagens::where('id', $id)->first(),
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NoticiasFormRequest $request)
    {
        //
        $noticia = Postagens::where('id', $request->post('noticia_id'))->update([
            'titulo' => $request->post('titulo'),
            'conteudo' => $request->post('conteudo'),
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = "Notícia alterada com sucesso!";

        $noticiaId = Postagens::where('id', $request->post('noticia_id'))->first();

        $resultado['error'] = 1;
        $resultado['msg'] = "Notícia cadastrada com sucesso!";

        $arquivos = $request->file('banner');

        if (!$noticia) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha cadastrar notícia";
        } else if ($arquivos->storePubliclyAs('public/banner/', $arquivos->getClientOriginalName())) {
            $noticiaId->update([
                'imagem' => $arquivos->getClientOriginalName(),
            ]);
        }
        Session::flash('erro_msg', $resultado);
        return Redirect::to('painel/noticias');
    }

}
