<?php

namespace App\Http\Controllers\Dashboard\Noticias;

use App\Http\Controllers\Controller;
use App\Http\Requests\Noticias\NoticiasFormRequest;
use App\Model\Postagens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class CadastrarNoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('painel.noticiais.cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NoticiasFormRequest $request)
    {
        //
        $noticia = Postagens::create([
            'titulo' => $request->post('titulo'),
            'conteudo' => $request->post('conteudo'),
            'criado_por' => Session::get('usuario')->id,
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = "Notícia cadastrada com sucesso!";

        $arquivos = $request->file('banner');

        if (!$noticia) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha cadastrar notícia";
        } else if ($arquivos->storePubliclyAs('public/banner/', $arquivos->getClientOriginalName())){
            $noticia->imagem = $arquivos->getClientOriginalName();
            $noticia->save();
        }

        Session::flash('erro_msg', $resultado);
        return Redirect::to('painel/noticias');
    }
}
