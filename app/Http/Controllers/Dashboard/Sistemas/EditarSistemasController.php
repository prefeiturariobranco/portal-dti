<?php

namespace App\Http\Controllers\Dashboard\Sistemas;

use App\Http\Controllers\Controller;
use App\Model\Sistemas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EditarSistemasController extends Controller
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

        return view('painel.sistemas.editar', [
            'sistema' => Sistemas::where('id', $id)->first()
        ]);
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
        $sistema = Sistemas::where('id', $request->post('sistema_id'))->update([
            'nome_sistema' => $request->post('nome_sistema')
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = "Sistema alterado com sucesso!";

        if (!$sistema) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha ao alterar sistema";
        }

        Session::flash('erro_msg', $resultado);
        return redirect('painel/sistemas');
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
        $resultado['msg'] = "Sistema removido com sucesso!";

        if (!$sistema) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha ao remover sistema";
        }

        Session::flash('erro_msg', $resultado);
        return redirect('/painel/sistemas');
    }
}
