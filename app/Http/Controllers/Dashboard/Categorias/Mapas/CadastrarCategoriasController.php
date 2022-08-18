<?php

namespace App\Http\Controllers\Dashboard\Categorias\Mapas;

use App\Http\Controllers\Controller;
use App\Model\Mapas_Categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CadastrarCategoriasController extends Controller
{
    public function create()
    {
        return view('painel.categorias.mapas.cadastro');
    }

    public function store(Request $request)
    {
        $categoria = Mapas_Categorias::create([
            'nome' => $request->post('nome')
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = 'Categoria cadastrada com sucesso';

        if (!$categoria) {
            $resultado['error'] = 2;
            $resultado['msg'] = 'Falha ao cadastrar categoria';
        }

        Session::flash('erro_msg', $resultado);
        return redirect('painel/categorias-mapas');
    }
}
