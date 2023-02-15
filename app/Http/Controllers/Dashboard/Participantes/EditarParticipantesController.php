<?php

namespace App\Http\Controllers\Dashboard\Participantes;

use App\Http\Controllers\Controller;
use App\Model\Participante;
use App\Model\Tipo_participante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EditarParticipantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipo_participantes = Tipo_participante::all();
        return view('painel.participantes.editar', [
            'participante' => Participante::where('id', $id)->first()
        ], compact('tipo_participantes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $tipo_participante_id = Tipo_participante::all();
        $participante = Participante::where('id', $request->post('participante_id'))->update([
            'nome_participante' => $request->post('nome_participante'),
            'tipo_participante_id' => $request->tipo_participante_option
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = "Cadastro de participante alterado com sucesso!";

        if (!$participante) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha ao alterar cadastro de participante";
        }

        Session::flash('erro_msg', $resultado);
        return redirect('painel/participante');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sistema = Sistemas::where('id', $id)->update([
            'ocultar' => 1,
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = "Cadastro de participante removido com sucesso!";

        if (!$sistema) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha ao remover cadastro de participante";
        }

        Session::flash('erro_msg', $resultado);
        return redirect('/painel/participante');
    }
}
