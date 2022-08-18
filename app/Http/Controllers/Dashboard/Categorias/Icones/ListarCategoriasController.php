<?php

namespace App\Http\Controllers\Dashboard\Categorias\Icones;

use App\Http\Controllers\Controller;
use App\Model\Icones_categorias;
use Illuminate\Http\Request;

class ListarCategoriasController extends Controller
{
    public function index()
    {
        return view('painel.categorias.icones.lista', [
            'categorias' => Icones_categorias::where('ocultar', 0)->get(),
        ]);
    }
}
