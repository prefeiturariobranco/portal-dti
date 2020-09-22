<?php

namespace App\Http\Controllers\Dashboard\Tutoriais;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tutoriais\TutoriaisFormRequest;
use App\Model\Tutoriais;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class EditarTutoriaisController extends Controller
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
        return view('painel.tutoriais.editar', [
            'tutorial' => Tutoriais::where('id', $id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TutoriaisFormRequest $request)
    {
        //
        $tutorial = Tutoriais::where('id', $request->post('tutorial_id'))->first();

        if(!empty($request->post('titulo'))){
            $tutorial->titulo = $request->post('titulo');
        }

        if(!empty($request->post('conteudo'))){
            $tutorial->conteudo = $request->post('conteudo');
        }

        if(!empty($request->file('imagem'))){
            if(!empty($tutorial->imagem)){
                Storage::delete($tutorial->imagem);
            }
            $tutorial->imagem = $request->file('imagem')->store('anexos');
        }

        if(!empty($request->file('video'))){
            if(!empty($tutorial->video)){
                Storage::delete($tutorial->video);
            }
            $tutorial->video = $request->file('video')->store('anexos');
        }

        $resultado['error'] = 1;
        $resultado['msg'] = "Tutoriais alterado com sucesso!";

        if (!$tutorial) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha alterar tutoriais";
        }

        $tutorial->save();

        Session::flash('erro_msg', $resultado);
        return Redirect::to('painel/tutoriais');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
