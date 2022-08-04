<?php

namespace App\Http\Controllers\Dashboard\Categorias\Investimentos;

use App\Http\Controllers\Controller;
use App\Model\Investimentos_categorias;
use Illuminate\Http\Request;

class CadastrarCategoriasController extends Controller
{
    public function create()
    {
        return view('painel.categorias.investimentos.cadastro');
    }

    public function store(Request $request)
    {
        Investimentos_categorias::create([
            'nome' => $request->nome
        ]);
        return redirect('/painel/investimentos/cadastro')->with([
            'success' => true,
            'msg' => 'Categoria cadastrada com sucesso'
        ]);
    }
}
