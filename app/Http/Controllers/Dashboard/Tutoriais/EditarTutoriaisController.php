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
            $fileName = time() . '.' . $request->file('imagem')->extension();
            $tutorial->imagem = $fileName;
            $request->imagem->move(public_path('images'), $fileName);
        }
        if (!empty($request->file('imagem1'))) {
            $fileName = time() . '1.' . $request->file('imagem1')->extension();
            $tutorial->imagem1 = $fileName;
            $request->imagem2->move(public_path('images'), $fileName);
        }
        if (!empty($request->file('imagem2'))) {
            $fileName = time() . '2.' . $request->file('imagem2')->extension();
            $tutorial->imagem2 = $fileName;
            $request->imagem3->move(public_path('images'), $fileName);
        }
        if (!empty($request->file('imagem3'))) {
            $fileName = time() . '3.' . $request->file('imagem3')->extension();
            $tutorial->imagem3 = $fileName;
            $request->imagem3->move(public_path('images'), $fileName);
        }
        if (!empty($request->file('imagem4'))) {
            $fileName = time() . '4.' . $request->file('imagem4')->extension();
            $tutorial->imagem4 = $fileName;
            $request->imagem4->move(public_path('images'), $fileName);
        }
        if (!empty($request->file('imagem5'))) {
            $fileName = time() . '5.' . $request->file('imagem5')->extension();
            $tutorial->imagem5 = $fileName;
            $request->imagem5->move(public_path('images'), $fileName);
        }

        if (!empty($request->file('video'))) {
//            dd($request->all());
            $videoFile = $request->file('video');
            $fileNameVideo = time() . $videoFile->getClientOriginalName();
            $path = public_path() . '/videos/';
            $videoFile->move($path, $fileNameVideo);
            $tutorial->video = $fileNameVideo;
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
