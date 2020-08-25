<?php

namespace App\Http\Controllers\Dashboard\Icones;

use App\Http\Controllers\Controller;
use App\Model\Icones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class DeletarIconesController extends Controller
{
    public function remover($id){
        $icone = Icones::where('id', $id)->update([
            'ocultar' => 1,
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = 'Ícone removido com sucesso';

        if (!$icone) {
            $resultado['error'] = 2;
            $resultado['msg'] = 'Falha ao remover ícone';
        }

        Session::flash('erro_msg');
        return Redirect::to('/painel/icones');
    }
}
