<?php

namespace App\Http\Controllers\Dashboard\Participantes;

use App\Http\Controllers\Controller;
use App\Model\Participante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EditarParticipantesController extends Controller
{
    public function edit($id)
    {
        return view('painel.participantes.editar', [
            'participante' => Participante::where('id', $id)->first()
        ]);
    }

    public function update(Request $request)
    {
        $participantes = Participante::where('id', $request->post('participante_id'))->update([
            'nome_participante' => $request->post('nome_participante')
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = "Unidade alterada com sucesso!";

        if (!$participantes) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha ao alterar unidade";
        }

        Session::flash('erro_msg', $resultado);
        return redirect('painel.participantes');
    }

    public function destroy($id)
    {
        $participante = Participante::where('id', $id)->update([
            'ocultar' => 1,
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = "Unidade removida com sucesso!";

        if (!$participante) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha ao remover unidade";
        }

        Session::flash('erro_msg', $resultado);
        return redirect('painel.participantes');
    }
}
