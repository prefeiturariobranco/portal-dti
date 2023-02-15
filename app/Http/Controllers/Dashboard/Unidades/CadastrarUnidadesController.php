<?php

namespace App\Http\Controllers\Dashboard\Unidades;

use App\Http\Controllers\Controller;
use App\Model\Unidades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CadastrarUnidadesController extends Controller
{
    public function create()
    {
        $Unidades  = Unidades::all();
        return view('painel.unidades.cadastro',compact('Unidades'));
    }

    public function store(Request $request)
    {
        $unidades = Unidades::create([
            'nome_unidade' => $request->post('nome_unidade'),
            'ocultar' => 0
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = "Unidade cadastrada com sucesso!";

        if (!$unidades) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha ao cadastrar unidade";
        }

        Session::flash('erro_msg', $resultado);
        return redirect('painel/unidades');
    }
}
