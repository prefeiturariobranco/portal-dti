<?php

namespace App\Http\Controllers\Dashboard\Aplicativos;

use App\Http\Controllers\Controller;
use App\Http\Requests\Aplicativos\AplicativosFormRequest;
use App\Model\Aplicativos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class CadastrarAplicativosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('painel.aplicativos.cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AplicativosFormRequest $request)
    {
        //

        $aplicativos = Aplicativos::create([
            'titulo' => $request->post('titulo'),
            'imagem' => $request->post('imagem'),
            'url' => $request->post('url'),
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = "Aplicativo cadastrado com sucesso!";

        if (!$aplicativos) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha ao cadastrar aplicativo";
        }

        if (!empty($request->file('imagem'))) {
            $fileName = time() . '.' . $request->file('imagem')->extension();
            $aplicativos->imagem = $fileName;
            $request->imagem->move(public_path('images'), $fileName);
        }

        $aplicativos->save();

        Session::flash('erro_msg', $resultado);
        return Redirect::to('painel/aplicativos');
    }

}
