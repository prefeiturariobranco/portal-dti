<?php

namespace App\Http\Controllers\Dashboard\Mapas;

use App\Http\Controllers\Controller;
use App\Model\Mapas;
use Illuminate\Http\Request;

class ApiMapasController extends Controller
{
    //
    public function infoMapaGeral(Request $request){

        echo json_encode(Mapas::where([
            ['ocultar', 0],
            ['mapas_categorias_id', $request->id],
        ])->get());
    }
}
