<?php

namespace App\Http\Controllers\Dashboard\Aplicativos;

use App\Http\Controllers\Controller;
use App\Http\Requests\Aplicativos\AplicativosFormRequest;
use App\Model\Aplicativos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class EditarAplicativosController extends Controller
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
        return view('painel.aplicativos.editar', [
            'aplicativos' => Aplicativos::where('id', $id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AplicativosFormRequest $request)
    {
        //
        $aplicativos = Aplicativos::where('id', $request->aplicativo_id)->first();
        $aplicativos->titulo = $request->post('titulo');
        $aplicativos->url= $request->post('url');
        $aplicativos->update();
        if (!empty($request->file('imagem'))) {
            $fileName = time() . '.' . $request->file('imagem')->extension();
            \File::delete($aplicativos->imagem);
            $aplicativos->imagem = $fileName;
            $request->imagem->move(public_path('images'), $fileName);
        }

        $resultado['error'] = 1;
        $resultado['msg'] = "Aplicativo alterado com sucesso!";

        if (!$aplicativos) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha alterar aplicativo";
        }

        Session::flash('erro_msg', $resultado);
        return  Redirect::to('painel/aplicativos');
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
