<?php

namespace App\Http\Controllers\Dashboard\Usuarios;

use App\Http\Controllers\Controller;
use App\Model\Cargos;
use App\Model\Departamentos;
use App\Model\Usuarios;
use App\Http\Requests\Usuarios\UsuariosFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CadastrarUsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('painel.usuarios.cadastrar', [
            'cargos' => Cargos::all(),
            'departamentos' =>Departamentos::all(),
        ]);
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
    public function store(UsuariosFormRequest $request)
    {
        //
        $usuario = Usuarios::create([
            'nome' => $request->post('nome'),
            'login' => $request->post('login'),
            'senha' => Hash::make($request->post('senha')),
            'departamentos_id' => $request->post('departamento_id'),
            'cargos_id' => $request->post('cargo_id'),
            'email' => $request->post('email'),
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = 'Usuário cadastrado com sucesso!';

        if (!$usuario) {
            $resultado['error'] = 2;
            $resultado['msg'] = 'Falha ao cadastrar usuário!';
        }

        Session::flash('erro_msg', $resultado);
        return Redirect::to('painel/usuarios/listar');
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
    public function update(Request $request, $id)
    {
        //
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
