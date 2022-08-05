<?php

namespace App\Http\Controllers\Dashboard\Categorias\Planejamentos;

use App\Http\Controllers\Controller;
use App\Model\Planejamentos_Categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CadastrarCategoriasController extends Controller
{
    public function create()
    {
        return view('painel.categorias.planejamentos.cadastro');
    }

    public function store(Request $request)
    {
        $plan = Planejamentos_Categorias::create([
            'nome' => $request->nome,
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = 'Categoria cadastrado com o sucesso!';

        if (!$plan) {
            $resultado['error'] = 2;
            $resultado['msg'] = 'Erro ao cadastrar categoria';
        }

        Session::flash('erro_msg', $resultado);
        return Redirect::to('/painel/categorias-planejamentos');
    }
}
