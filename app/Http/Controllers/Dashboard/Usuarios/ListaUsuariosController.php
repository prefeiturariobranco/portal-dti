<?php

namespace App\Http\Controllers\Dashboard\Usuarios;

use App\Http\Controllers\Controller;
use App\Http\Requests\Usuarios\UsuariosFormRequest;
use App\Model\Cargos;
use App\Model\Departamentos;
use App\Model\Usuarios;
use Illuminate\Http\Request;

class ListaUsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('painel/usuarios/lista', [
            'usuarios' => Usuarios::where('status', '!=', 3)->get()
        ]);
    }

    public function show($id){
        return view('painel.usuarios.editar', [
            'usuario' => Usuarios::where('id', $id)->first(),
            'cargos' => Cargos::all(),
            'departamentos' => Departamentos::all(),
        ]);
    }
}
