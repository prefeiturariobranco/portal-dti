<?php

namespace App\Http\Controllers\Dashboard\Usuarios;

use App\Http\Controllers\Controller;
use App\Model\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class RemoverUsuariosController extends Controller
{

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $usuario = Usuarios::where('id', $id)->update([
            'ocultar' => 1,
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = "Usuário inativado com sucesso!";

        if (!$usuario) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha ao inativar o usuario";
        }

        Session::flash('erro_msg', $resultado);
        return Redirect::to('painel/usuarios/listar');
    }
}
