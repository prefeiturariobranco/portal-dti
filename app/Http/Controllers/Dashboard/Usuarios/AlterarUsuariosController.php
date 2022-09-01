<?php

namespace App\Http\Controllers\Dashboard\Usuarios;

use App\Http\Controllers\Controller;
use App\Http\Requests\Usuarios\UsuariosEditFormRequest;
use App\Model\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
    public function update(UsuariosEditFormRequest $request)
    {
        //
        $usuario = Usuarios::where('id',  $request->post('usuario_id'))->update([
                'nome' => $request->post('nome'),
            'email' => $request->post('email'),
            'senha' => Hash::make($request->post('senha')),
            'departamentos_id' => $request->post('departamento_id'),
            'cargos_id' => $request->post('cargo_id'),
            'login' => $request->post('login'),
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = 'Usuário alterado com sucesso!';

        if (!$usuario) {
            $resultado['error'] = 2;
            $resultado['msg'] = 'Falha ao alterar usuário!';
        }

        Session::flash('erro_msg', $resultado);
        return \redirect('painel/usuarios/listar');
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
