<?php

namespace App\Http\Controllers\Dashboard\Categorias\Investimentos;

use App\Http\Controllers\Controller;
use App\Model\Investimentos_categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CadastrarCategoriasController extends Controller
{
    public function create()
    {
        return view('painel.categorias.investimentos.cadastro');
    }

    public function store(Request $request)
    {
        $invest = Investimentos_categorias::create([
            'nome' => $request->nome
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = 'Categoria cadastrada com sucesso';

        if (!$invest) {
            $resultado['error'] = 2;
            $resultado['msg'] = 'Falha ao cadastrar categoria';
        }

            Session::flash('erro_msg', $resultado);
        return redirect('/painel/categorias-investimentos');
    }
}
