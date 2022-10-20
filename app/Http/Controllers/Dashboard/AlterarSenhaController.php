<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Model\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AlterarSenhaController extends Controller
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
        //
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
        try {
            if (!empty(Session::get('DTI_PORTAL')) ) {
                $usuario = Usuarios::where('id', Session::get('DTI_PORTAL'))->first();
                $senhaAntiga = $usuario->senha;
                if (Hash::check($request->post('antiga'), $senhaAntiga) && $request->post('nova') == $request->post('confirma')) {
                    $usuario->update([
                        'senha' => Hash::make($request->post('nova')),
                    ]);
                    $usuario->save();
                }
                $resultado['error'] = 1;
                $resultado['msg'] = "Senha alterada com sucesso";

                if (!$usuario){
                    $resultado['error'] = 2;
                    $resultado['msg'] = "Erro ao alterar senha";
                }
                Session::flash('erro_msg', $resultado);
                return redirect('/painel');
            }
        }catch (\Exception $exception) {
          return $exception->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
