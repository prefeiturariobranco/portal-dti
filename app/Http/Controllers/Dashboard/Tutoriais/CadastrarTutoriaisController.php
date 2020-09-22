<?php

namespace App\Http\Controllers\Dashboard\Tutoriais;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tutoriais\TutoriaisFormRequest;
use App\Model\Tutoriais;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CadastrarTutoriaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('painel.tutoriais.cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TutoriaisFormRequest $request)
    {
        //

        $tutoriais = Tutoriais::create([
            'titulo' => $request->post('titulo'),
            'conteudo' => $request->post('conteudo'),
            'imagem' => null,
            'imagem1' => null,
            'imagem2' => null,
            'imagem3' => null,
            'imagem4' => null,
            'imagem5' => null,
            'criado_por' => Session::get('usuario')->id,
            'video' => null
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = "Tutoriais cadastrada com sucesso!";

        if (!$tutoriais) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha cadastrar tutoriais";
        }

        if (!empty($request->file('imagem'))) {
            $tutoriais->imagem = $request->file('imagem')->store('anexos');
        }
        if (!empty($request->file('imagem1'))) {
            $tutoriais->imagem1 = $request->file('imagem1')->store('anexos');
        }
        if (!empty($request->file('imagem2'))) {
            $tutoriais->imagem2 = $request->file('imagem2')->store('anexos');
        }
        if (!empty($request->file('imagem3'))) {
            $tutoriais->imagem3 = $request->file('imagem3')->store('anexos');
        }
        if (!empty($request->file('imagem4'))) {
            $tutoriais->imagem4 = $request->file('imagem4')->store('anexos');
        }
        if (!empty($request->file('imagem5'))) {
            $tutoriais->imagem5 = $request->file('imagem5')->store('anexos');
        }

        if (!empty($request->file('video'))) {
            $tutoriais->video = $request->file('video')->store('anexos');
        }

        $tutoriais->save();

        Session::flash('erro_msg', $resultado);
        return Redirect::to('painel/tutoriais');
    }

}
