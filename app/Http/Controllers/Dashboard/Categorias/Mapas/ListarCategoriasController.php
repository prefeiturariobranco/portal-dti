<?php

namespace App\Http\Controllers\Dashboard\Categorias\Mapas;

use App\Http\Controllers\Controller;
use App\Model\Mapas_Categorias;
use Illuminate\Http\Request;

class ListarCategoriasController extends Controller
{
    public function index()
    {
        return view('painel.categorias.mapas.lista', [
            'categorias' => Mapas_Categorias::where('ocultar', 0)->get()
        ]);
    }
}
