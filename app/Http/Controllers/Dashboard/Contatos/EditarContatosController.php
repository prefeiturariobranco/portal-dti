<?php

namespace App\Http\Controllers\Dashboard\Contatos;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contatos\ContatosFormRequest;
use App\Model\Cargos;
use App\Model\Contatos;
use App\Model\Departamentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class EditarContatosController extends Controller
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
        return view('painel.contatos.editar', [
            'contato' => Contatos::where('id', $id)->first(),
            'departamentos' => Departamentos::all(),
            'cargos' => Cargos::all(),
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContatosFormRequest $request)
    {
        //
        $contato = Contatos::where('id', $request->post('contato_id'))->update([
            'departamento_id' => $request->post('departamento_id'),
            'cargos_id' => $request->post('cargo_id'),
            'nome' => $request->post('nome'),
            'email' => $request->post('email'),
            'telefone' => $request->post('telefone'),
            'ocultar' => $request->post('ocultar')
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = 'Contato alterado com sucesso!';

        if (!$contato) {
            $resultado['error'] = 2;
            $resultado['msg'] = 'Falha ao alterar contato';
        }
        Session::flash('erro_msg', $resultado);
        return Redirect::to('/painel/contatos');
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
