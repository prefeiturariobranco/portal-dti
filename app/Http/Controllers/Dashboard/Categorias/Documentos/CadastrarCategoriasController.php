<?php

namespace App\Http\Controllers\Dashboard\Categorias\Documentos;

use App\Http\Controllers\Controller;
use App\Model\Documentos_categorias;
use Illuminate\Http\Request;

class CadastrarCategoriasController extends Controller
{
    public function create()
    {
        return view('painel.categorias.documentos.cadastro');
    }

    public function store(Request $request)
    {
        Documentos_categorias::create([
            'nome' => $request->nome
        ]);
        return Redirect::to('/painel/categorias-documentos/cadastro')->with([
            'success' => true,
            'msg' => 'Categoria cadastrada com sucesso'
        ]);
    }
}
