<?php

namespace App\Http\Controllers\Dashboard\Contatos;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contatos\ContatosFormRequest;
use App\Model\Cargos;
use App\Model\Contatos;
use App\Model\Departamentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CadastrarContatosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('painel.contatos.cadastro', [
            'departamentos' => Departamentos::all(),
            'cargos' => Cargos::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContatosFormRequest $request)
    {
        //
        $contato = Contatos::create([
            'departamento_id' => $request->post('departamento_id'),
            'cargos_id' => $request->post('cargo_id'),
            'nome' => $request->post('nome'),
            'email' => $request->post('email'),
            'telefone' => $request->post('telefone'),
        ]);
        $resultado['error'] = 0;
        $resultado['msg'] = 'Contatos cadastrada com sucesso!';

        if (!$contato) {
            $resultado['error'] = 1;
            $resultado['msg'] = 'Falha cadastrar contatos!';
        }
        Session::flash('erro_msg', $resultado);
        return Redirect::to('/painel/contatos');
    }
}
