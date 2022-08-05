<?php

namespace App\Http\Controllers\Dashboard\Categorias\Documentos;

use App\Http\Controllers\Controller;
use App\Model\Documentos_categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

        $resultado['error'] = 1;
        $resultado['msg'] = 'Categoria cadastrada com sucesso!';

        if (!$resultado) {
            $resultado['error'] = 2;
            $resultado['msg'] = 'Erro ao cadastrar categoria';
        }

        Session::flash('erro_msg', $resultado);
        return redirect('/painel/categorias-documentos');
    }
}
