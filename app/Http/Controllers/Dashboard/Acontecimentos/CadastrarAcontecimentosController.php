<?php

namespace App\Http\Controllers\Dashboard\Acontecimentos;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acontecimentos\AcontecimentosStoreFormRequest;
use App\Model\Acontecimentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CadastrarAcontecimentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('painel.acontecimentos.cadastro');
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
    public function store(AcontecimentosStoreFormRequest $request)
    {
        //
        $acontecimento = Acontecimentos::create([
            'titulo' => $request->post('titulo'),
            'descricao' => $request->post('descricao'),
            'ano' => $request->post('ano'),
            'criado_por' => Session::get('usuario')->id,
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = "Linha do tempo cadastrado com sucesso!";

        if (!$acontecimento) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha ao cadastrar linha do tempo";
        }

        Session::flash('erro_msg', $resultado);
        return Redirect::to('painel/acontecimentos');

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
