<?php

namespace App\Http\Controllers\Dashboard\Reuniao;

use App\Http\Controllers\Controller;
use App\Model\Participante;
use App\Model\Reuniao;
use App\Model\Sistemas;
use App\Model\Tipo_participante;
use App\Model\Unidades;
use App\Model\Usuarios;
use App\Model\UsuariosReuniao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CadastrarReuniaoController extends Controller
{
    public function create()
    {
        $usuarios  = Participante::all();
        $tipos = Tipo_participante::all();
        $unidades = Unidades::where('ocultar', 0)->get();
        $sistemas = Sistemas::where('ocultar', 0)->get();
        return view('painel.reuniao.cadastro',compact('unidades','usuarios', 'sistemas', 'tipos'));
    }

    public function store(Request $request)
    {
        $reuniao = Reuniao::create([
            'solicitacao' => $request->post('solicitacao'),
            'providencias' => $request->post('providencias'),
            'sistema_id' => $request->post('sistema_id'),
            'unidade_id' => $request->post('unidade_id'),
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = 'Reunião cadastrada com sucesso!';

        if (!$reuniao) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha ao cadastrar reunião";
        }

        Session::flash('erro_msg', $resultado);
        return redirect('painel/reuniao');
    }
}
