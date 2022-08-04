<?php

namespace App\Http\Controllers\Dashboard\Planejamentos;

use App\Http\Controllers\Controller;
use App\Http\Requests\Planejamento\PlanejamentoFormRequest;
use App\Model\Planejamentos;
use App\Model\Planejamentos_Categorias;
use App\Model\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use phpDocumentor\Reflection\Types\Nullable;

class CadastrarPlanejamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('painel.planejamentos.cadastro', [
            'planejamentoCats' => Planejamentos_Categorias::where('ocultar', 0)->get(),
            'usuarios' => Usuarios::all(),
        ]);
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
        $planejamento = Planejamentos::create([
            'titulo' => $request->post('titulo'),
            'descricao' => $request->post('descricao'),
            'data_entrega' => $request->post('data_entrega'),
            'criado_por' => Session::get('usuario')->id,
            'planejamentos_categorias_id' => $request->post('planejamento_categoria'),
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = "Planejamento cadastrado com sucesso!";

        if (!$planejamento) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha cadastrar planejamento";
        }


        Session::flash('erro_msg', $resultado);
        return Redirect::to('painel/planejamentos');
    }
}
