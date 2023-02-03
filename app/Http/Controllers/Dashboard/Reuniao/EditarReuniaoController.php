<?php

namespace App\Http\Controllers\Dashboard\Reuniao;

use App\Http\Controllers\Controller;
use App\Model\Reuniao;
use App\Model\Sistemas;
use App\Model\Unidades;
use App\Model\UsuariosReuniao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EditarReuniaoController extends Controller
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('painel.reuniao.editar', [
            'reuniao' => Reuniao::where('id', $id)->first(),
            'sistemas' => Sistemas::all(),
            'unidades' => Unidades::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $reuniao = Reuniao::where('id', $request->post('reuniao_id'))->update([
            'solicitacao' => $request->post('solicitacao'),
            'providencias' => $request->post('providencias'),
            'sistema_id' => $request->post('sistema_id'),
            'unidade_id' => $request->post('unidade_id')
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = 'Reunião alterada com sucesso!';

        if (!$reuniao) {
            $resultado['error'] = 2;
            $resultado['msg'] = 'Falha ao alterar reunião';
        }

        Session::flash('erro_msg', $resultado);
        return redirect('painel/reuniao');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
