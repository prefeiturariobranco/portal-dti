<?php

namespace App\Http\Controllers\Dashboard\Participantes;

use App\Http\Controllers\Controller;
use App\Model\Participante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CadastrarParticipantesController extends Controller
{
    public function create()
    {
        return view('painel.participantes.cadastro');
    }

    public function store(Request $request)
    {
        $participantes = Participante::create([
            'nome_participante' => $request->post('nome_participante'),
            'ocultar' => 0
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = "Unidade cadastrada com sucesso!";

        if (!$participantes) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha ao cadastrar unidade";
        }

        Session::flash('erro_msg', $resultado);
        return redirect('painel.participantes');
    }
}
