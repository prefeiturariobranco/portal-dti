<?php

namespace App\Http\Controllers\Dashboard\Reuniao;

use App\Http\Controllers\Controller;
use App\Model\Reuniao;
use App\Model\UsuariosReuniao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CadastrarReuniaoController extends Controller
{
    public function create()
    {
        return view('');
    }

    public function store(Request $request)
    {
        $reuniao = Reuniao::create([
            'participantes' => $request->post('participantes'),
            'solicitacao' => $request->post('solicitacao'),
            'providencias' => $request->post('providencias'),
            'sistema_id' => $request->post('sistema_id'),
            'unidade_id' => $request->post('unidade_id'),
        ]);

        UsuariosReuniao::create([
            'reuniao_id' => Session::get('reuniao')->id,
            'usuario' => $request->post('usuario_id')
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = "Reunião cadastrada com sucesso!";

        if (!$reuniao) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha ao cadastrar reunião";
        }

        Session::flash('error_msg', $resultado);
        return redirect();
    }
}
