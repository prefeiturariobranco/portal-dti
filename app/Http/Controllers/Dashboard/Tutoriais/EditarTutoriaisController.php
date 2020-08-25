<?php

namespace App\Http\Controllers\Dashboard\Tutoriais;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tutoriais\TutoriaisFormRequest;
use App\Model\Tutoriais;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

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
        $tutorial = Tutoriais::where('id', $request->post('tutorial_id'))->update([
            'titulo' => $request->post('titulo'),
            'conteudo' => $request->post('conteudo'),
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = "Tutoriais alterado com sucesso!";

        if (!$tutorial) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha alterar tutoriais";
        }

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
