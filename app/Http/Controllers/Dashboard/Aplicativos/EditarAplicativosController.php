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
     * @param int $id
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
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(AplicativosFormRequest $request)
    {
        //
        try {
            $aplicativos = Aplicativos::where('id', $request->aplicativo_id)->first();

            if (!empty($request->file('imagem'))) {
                \Storage::delete($aplicativos->imagem);
                $fileName = $request->imagem->store('public/aplicativos');
                $aplicativos->imagem = $fileName;
            }

            $aplicativos->titulo = $request->post('titulo');
            $aplicativos->url = $request->post('url');

            $resultado['error'] = 1;
            $resultado['msg'] = "Aplicativo alterado com sucesso!";

            if (!$aplicativos) {
                $resultado['error'] = 2;
                $resultado['msg'] = "Falha ao alterar aplicativo";
            }
            $aplicativos->save();


            Session::flash('erro_msg', $resultado);
            return Redirect::to('painel/aplicativos');
        } catch (\Exception $exception) {
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
