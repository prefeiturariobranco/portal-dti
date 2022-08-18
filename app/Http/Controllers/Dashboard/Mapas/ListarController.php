<?php

namespace App\Http\Controllers\Dashboard\Mapas;

use App\Http\Controllers\Controller;
use App\Model\Mapas;
use Illuminate\Http\Request;

class ListarController extends Controller
{
    public function index()
    {
        return view('painel.mapas.lista', [
           'mapas' =>  Mapas::where('ocultar', 0)->get()
        ]);
    }
}
