<?php

namespace App\Http\Controllers\Dashboard\Categorias\Documentos;

use App\Http\Controllers\Controller;
use App\Model\Documentos_categorias;
use Illuminate\Http\Request;

class ListarCategoriasController extends Controller
{
    public function index()
    {
        return view('painel.categorias.documentos.lista', [
            'categorias' => Documentos_categorias::where('ocultar', 0)->get()
            ]);

    }
}
