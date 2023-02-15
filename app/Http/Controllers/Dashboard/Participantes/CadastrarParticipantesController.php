<?php

namespace App\Http\Controllers\Dashboard\Participantes;

use App\Http\Controllers\Controller;
use App\Model\Participante;
use App\Model\Tipo_participante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CadastrarParticipantesController extends Controller
{
    public function create()
    {
        $tipo_participantes = Tipo_participante::all();
        return view('painel.participantes.cadastro', compact('tipo_participantes'));
    }

    public function store(Request $request)
    {
//        dd($request->all());

        $Participante = Participante::create([
            'nome_participante' => $request->post('nome_participante'),
            'tipo_participante_id'=> $request->tipo_participante_option
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = 'Participante cadastrada com sucesso!';

        if (!$Participante) {
            $resultado['error'] = 2;
            $resultado['msg'] = 'Falha ao cadastrar participante';
        }

        $Participante->save();

        Session::flash('erro_msg', $resultado);
        return redirect('/painel/participante');
    }
}
