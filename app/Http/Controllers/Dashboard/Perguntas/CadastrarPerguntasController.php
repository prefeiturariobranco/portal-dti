<?php

namespace App\Http\Controllers\Dashboard\Perguntas;

use App\Http\Controllers\Controller;
use App\Http\Requests\Perguntas\PerguntasFormRequest;
use App\Model\Cargos;
use App\Model\Departamentos;
use App\Model\Perguntas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class CadastrarPerguntasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('painel.perguntas.cadastro', [
            'departamentos' => Departamentos::all(),
            'cargos' => Cargos::all(),
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PerguntasFormRequest $request)
    {
        //
        $perguntas = Perguntas::create([
            'titulo' => $request->post('titulo'),
            'conteudo' => $request->post('conteudo'),
            'criado_por' => Session::get('usuario')->id,
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = 'Perguntas cadastrado com sucesso!';

        if (!$perguntas){
            $resultado['error'] = 2;
            $resultado['msg'] = 'Falha ao cadastrar perguntas';
        }

        Session::flash('erro_msg', $resultado);
        return Redirect::to('/painel/perguntas');
    }
}
