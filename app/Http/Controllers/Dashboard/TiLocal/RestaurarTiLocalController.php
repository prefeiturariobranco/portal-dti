<?php

namespace App\Http\Controllers\Dashboard\TiLocal;

use App\Http\Controllers\Controller;
use App\Model\Ti_Local;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RestaurarTiLocalController extends Controller
{
    public function restore($id)
    {
        $tiLocal = Ti_Local::withTrashed()->find($id)->restore();

        $resultado['error'] = 1;
        $resultado['msg'] = "TI local restaurado com sucesso!";

        if (!$tiLocal) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha ao restaurar ti local";
        }

        Session::flash('erro_msg', $resultado);
        return redirect()->back();
    }
}
