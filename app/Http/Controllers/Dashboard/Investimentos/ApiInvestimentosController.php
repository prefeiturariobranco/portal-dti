<?php

namespace App\Http\Controllers\Dashboard\Investimentos;

use App\Http\Controllers\Controller;
use App\Model\Investimentos;
use Illuminate\Http\Request;

class ApiInvestimentosController extends Controller
{
    public function investimentosRealizados(Request $request){
        echo json_encode(Investimentos::where([
            ['ocultar', 0],
            ['investimentos_categorias_id', $request->get('id')]
        ])->orderBy('valor', 'DESC')->get());
    }
}
