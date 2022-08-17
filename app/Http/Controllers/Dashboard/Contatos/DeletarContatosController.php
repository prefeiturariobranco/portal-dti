<?php

namespace App\Http\Controllers\Dashboard\Contatos;

use App\Http\Controllers\Controller;
use App\Model\Contatos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class DeletarContatosController extends Controller
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
        $contato = Contatos::where('id', $id)->update([
            'ocultar' => 1,
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = 'Contato removido com sucesso!';

        if (!$contato){
            $resultado['error'] = 2;
            $resultado['msg'] = 'Falha ao remover contato';
        }
        Session::flash('erro_msg', $resultado);
        return Redirect::to('/painel/contatos');
    }
}
