<?php

namespace App\Http\Controllers\Dashboard\Usuarios;

use App\Http\Controllers\Controller;
use App\Http\Requests\Usuarios\UsuariosEditFormRequest;
use App\Model\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AlterarUsuariosController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsuariosEditFormRequest $request, $id)
    {
        //
        $usuario = Usuarios::where('id', $id)->update([
            'nome' => $request->post('nome'),
            'email' => $request->post('email'),
            'departamentos_id' => $request->post('departamento_id'),
            'cargos_id' => $request->post('cargo_id'),
            'login' => $request->post('login'),
        ]);

        if (!empty($request->post('senha'))) {
            $usuario->update([
                'senha' => $request->post('senha'),
            ]);
        }

        $resultado['erro'] = 1;
        $resultado['msg'] = 'Usuário editado com sucesso!';

        if (!$usuario) {
            $resultado['erro'] = 2;
            $resultado['msg'] = 'Falha ao tentar editar o usuário!';
        }

        Session::flash('erro_msg', $resultado);
        return Redirect::to('painel/usuarios/listar');
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
