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

        if(!empty($request->file('imagem1'))){
            if(!empty($tutorial->imagem1)){
                Storage::delete($tutorial->imagem1);
            }
            $tutorial->imagem1 = $request->file('imagem1')->store('anexos');
        }

        if(!empty($request->file('imagem2'))){
            if(!empty($tutorial->imagem2)){
                Storage::delete($tutorial->imagem2);
            }
            $tutorial->imagem2 = $request->file('imagem2')->store('anexos');
        }

        if(!empty($request->file('imagem3'))){
            if(!empty($tutorial->imagem3)){
                Storage::delete($tutorial->imagem3);
            }
            $tutorial->imagem3 = $request->file('imagem3')->store('anexos');
        }

        if(!empty($request->file('imagem4'))){
            if(!empty($tutorial->imagem4)){
                Storage::delete($tutorial->imagem4);
            }
            $tutorial->imagem4 = $request->file('imagem4')->store('anexos');
        }

        if(!empty($request->file('imagem5'))){
            if(!empty($tutorial->imagem5)){
                Storage::delete($tutorial->imagem5);
            }
            $tutorial->imagem5 = $request->file('imagem5')->store('anexos');
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
