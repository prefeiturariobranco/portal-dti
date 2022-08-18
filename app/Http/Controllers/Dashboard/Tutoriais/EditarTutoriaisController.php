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

        if (!empty($request->file('imagem'))) {
            \File::delete($tutorial->imagem);
            $fileName = $request->file('imagem')->store('public/images');
            $tutorial->imagem = $fileName;
        }
        if (!empty($request->file('imagem1'))) {
            \File::delete($tutorial->imagem1);
            $fileName = $request->file('imagem1')->store('public/images');
            $tutorial->imagem1 = $fileName;
        }
        if (!empty($request->file('imagem2'))) {
            \File::delete($tutorial->imagem2);
            $fileName =$request->file('imagem2')->store('public/images');
            $tutorial->imagem2 = $fileName;
        }
        if (!empty($request->file('imagem3'))) {
            \File::delete($tutorial->imagem3);
            $fileName = $request->file('imagem3')->store('public/images');
            $tutorial->imagem3 = $fileName;
        }
        if (!empty($request->file('imagem4'))) {
            \File::delete($tutorial->imagem4);
            $fileName = $request->file('imagem4')->store('public/images');
            $tutorial->imagem4 = $fileName;
        }
        if (!empty($request->file('imagem5'))) {
            \File::delete($tutorial->imagem5);
            $fileName = $request->file('imagem5')->store('public/images');
            $tutorial->imagem5 = $fileName;
        }

        if (!empty($request->file('video'))) {
//
            \File::delete($tutorial->video);
            $videoFile = $request->file('video')->store('public/images')->getClientOriginalName();
            $tutorial->video = $videoFile;
        }

        $resultado['error'] = 1;
        $resultado['msg'] = "Tutorial alterado com sucesso!";

        if (!$tutorial) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha ao alterar tutorial";
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
