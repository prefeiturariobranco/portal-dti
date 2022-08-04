<?php

namespace App\Http\Controllers\Dashboard\Categorias\Planejamentos;

use App\Http\Controllers\Controller;
use App\Model\Planejamentos_Categorias;
use Illuminate\Http\Request;

class ListarCategoriasController extends Controller
{
    public function index()
    {
        return view('painel.categorias.planejamentos.lista', [
            'categorias' => Planejamentos_Categorias::where('ocultar', 0)->get()
        ]);
    }
}
