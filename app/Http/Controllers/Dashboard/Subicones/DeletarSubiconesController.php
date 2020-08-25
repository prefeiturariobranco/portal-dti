<?php

namespace App\Http\Controllers\Dashboard\Subicones;

use App\Http\Controllers\Controller;
use App\Model\Sub_Icone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class DeletarSubiconesController extends Controller
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
        $subIcone = Sub_Icone::where('id', $id)->update([
            'ocultar' => 1,
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = 'Subicone removida com sucesso!';

        if (!$subIcone) {
            $resultado['error'] = 2;
            $resultado['msg'] = 'Falha ao remover subicone';
        }

        Session::flash('erro_msg', $resultado);
        return Redirect::to('/painel/subicones');
    }
}
