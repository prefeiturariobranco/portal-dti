<?php

namespace App\Http\Controllers\Dashboard\sistemasip;

use App\Http\Controllers\Controller;
use App\Model\SistemaIp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CadastrarSistemasipController extends Controller
{

//    public function show($id)
//    {
//        $sistemasip = sistemasip::all();
//        return view('painel.sistemasip.lista', compact('sistemasip'));
//    }
    public function create()
    {
//        $sistemasip = SistemaIp::all();
        return view('painel.sistemasip.cadastro');
    }

    public function store(Request $request)
    {
        try {
            $sistemasip = SistemaIp::create([
                'nome' => $request->nome,
                'ip' => $request->ip
            ]);
            $resultado['error'] = 1;
            $resultado['msg'] = 'Sistema cadastrado com sucesso!';

            if (!$sistemasip) {
                $resultado['error'] = 2;
                $resultado['msg'] = 'Falha ao cadastrar secretaria';
            }

            $sistemasip->save();

            Session::flash('erro_msg', $resultado);
            return redirect('/painel/sistemaip/lista');
        } catch (Exception $exception) {
            //mensagem de erro
            return redirect()->back()->with('error', 'Erro ao cadastrar sistema');
        }
    }
}
