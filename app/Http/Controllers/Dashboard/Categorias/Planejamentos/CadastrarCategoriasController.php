<?php

namespace App\Http\Controllers\Dashboard\Categorias\Planejamentos;

use App\Http\Controllers\Controller;
use App\Model\Planejamentos_Categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CadastrarCategoriasController extends Controller
{
    public function create()
    {
        return view('painel.categorias.planejamentos.cadastro');
    }

    public function store(Request $request)
    {
        Planejamentos_Categorias::create([
            'nome' => $request->nome,
        ]);
        return Redirect::to('painel/planejamentos/cadastro')->with([
            'success' => true,
            'msg' => 'Categoria cadastrada com sucesso'
        ]);
    }
}
