<?php

namespace App\Http\Controllers\Dashboard\Icones;

use App\Http\Controllers\Controller;
use App\Http\Requests\Icones\IconesStoreFormRequest;
use App\Model\Icones;
use App\Model\Icones_categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CadastrarIconesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('painel.icones.cadastro', [
            'categorias' => Icones_categorias::where('status', 1)->get(),
            'icone' => Icones::all()
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
    public function store(IconesStoreFormRequest $request)
    {
        //
        $icone = Icones::create([
            'icones_categorias_id' => $request->post('icones_categorias_id'),
            'caminho' => $request->post('caminho'),
            'link' => $request->post('link'),
            'nome' => $request->post('nome'),
            'subtitulo' => $request->post('subtitulo'),
            'dinamico' => $request->post('dinamico'),
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = 'Ícone cadastrado com sucesso!';

        if (!$icone) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha ao cadastrar ícone";
        }

        Session::flash('erro_msg', $resultado);
        return Redirect::to('/painel/icones');
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
