<?php

namespace App\Http\Controllers\Dashboard\Reuniao;

use App\Http\Controllers\Controller;
use App\Http\Requests\Reuniao\AdicionarParticipanteFormRequest;
use App\Model\Participante;
use App\Model\Reuniao;
use App\Model\Tipo_participante;
use App\Model\UsuariosReuniao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ParticipanteController extends Controller
{

    public function adicionar(Request $request)
    {
        $usuario = UsuariosReuniao::create([
            'reuniao_id' => $request->post('reuniao_id'),
            'participante_id' => $request->post('participante_id'),
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = 'Reunião cadastrada com sucesso!';

        if (!$usuario) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha ao cadastrar reunião";
        }

        Session::flash('erro_msg', $resultado);
        return redirect('painel/reuniao', compact('usuario'));
    }

    public function participantes($id)
    {
        $reuniao = Reuniao::findOrFail($id);
        $usuarios = UsuariosReuniao::where('reuniao_id', $id)->get();
        return view('painel.reuniao.participantes.participantes', compact('reuniao', 'usuarios'));
    }

    public function create($id)
    {
        $reuniao = Reuniao::findOrFail($id);
        $participantes = Participante::all();
        return view('painel.reuniao.participantes.adicionar-participante', compact('reuniao', 'participantes'));
    }

    public function store(AdicionarParticipanteFormRequest $request, $id)
    {
        $reuniao = Reuniao::findOrFail($id);
        $participante = DB::table('usuarios_reuniao')->insert([
            'reuniao_id' => $reuniao->id,
            'participante_id' => $request->post('participante_id'),
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = "Participante adicionado com sucesso!";

        if (!$participante) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha ao adicionar participante";
        }

        Session::flash('erro_msg', $resultado);
        return redirect('painel/reuniao');
    }

    public function destroy($id)
    {
        $usuario = UsuariosReuniao::findOrFail($id);
        $usuario->delete();

        $resultado['error'] = 1;
        $resultado['msg'] = "Participante removido com sucesso!";

        if (!$usuario) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha ao remover participante";
        }

        Session::flash('erro_msg', $resultado);
        return redirect()->back();
    }
}
