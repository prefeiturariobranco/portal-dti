<?php

namespace App\Http\Controllers\Dashboard\Secretarias;

use App\Http\Controllers\Controller;
use App\Model\Secretarias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CadastrarController extends Controller
{
    public function create()
    {
        return view('painel.secretarias.cadastro');
    }

    public function store(Request $request)
    {
        $secretaria = Secretarias::create([
            'nome' => $request->nome,
            'sigla' => $request->sigla
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = 'Secretaria cadastrada com sucesso!';

        if (!$secretaria) {
            $resultado['error'] = 2;
            $resultado['msg'] = 'Erro ao cadastrar secretaria';
        }

        $secretaria->save();

        Session::flash('erro_msg', $resultado);
        return redirect('/painel/secretarias');
    }
}
