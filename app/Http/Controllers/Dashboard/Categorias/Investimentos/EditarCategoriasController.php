<?php

namespace App\Http\Controllers\Dashboard\Categorias\Investimentos;

use App\Http\Controllers\Controller;
use App\Model\Investimentos_categorias;
use Illuminate\Http\Request;

class EditarCategoriasController extends Controller
{
    public function edit($id)
    {
        return view('painel.categorias.investimentos.editar', [
            'investimento' => Investimentos_categorias::findOrFail($id),
        ]);
    }

    public function update(Request $request)
    {
        $invest = Investimentos_categorias::update([
            'nome' => $request->nome
        ]);

        $invest->save();
    }
}
