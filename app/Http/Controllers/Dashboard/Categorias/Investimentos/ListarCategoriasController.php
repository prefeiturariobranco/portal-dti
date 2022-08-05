<?php

namespace App\Http\Controllers\Dashboard\Categorias\Investimentos;

use App\Http\Controllers\Controller;
use App\Model\Investimentos_categorias;
use Illuminate\Http\Request;

class ListarCategoriasController extends Controller
{
    public function index()
    {
        return view('painel.categorias.investimentos.lista', [
            'categorias' => Investimentos_categorias::where('ocultar', 0)->get()
        ]);
    }
}
