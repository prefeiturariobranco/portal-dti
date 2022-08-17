<?php

namespace App\Http\Controllers\Dashboard\Tutoriais;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tutoriais\TutoriaisFormRequest;
use App\Model\Tutoriais;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use function GuzzleHttp\Promise\all;

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
            'imagem' => $request->post('imagem'),
            'imagem1' => $request->post('imagem1'),
            'imagem2' => null,
            'imagem3' => null,
            'imagem4' => null,
            'imagem5' => null,
            'criado_por' => Session::get('usuario')->id,
            'video' => null
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = "Tutorial cadastrado com sucesso!";

        if (!$tutoriais) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha ao cadastrar tutoriais";
        }

        if (!empty($request->file('imagem'))) {
            $fileName = $request->file('imagem')->store('public/images');
            $tutoriais->imagem = $fileName;
        }
        if (!empty($request->file('imagem1'))) {
            $fileName = $request->file('imagem1')->store('public/images');
            $tutoriais->imagem1 = $fileName;
        }
        if (!empty($request->file('imagem2'))) {
            $fileName = $request->file('imagem2')->store('public/images');
            $tutoriais->imagem2 = $fileName;
        }
        if (!empty($request->file('imagem3'))) {
            $fileName = $request->file('imagem3')->store('public/images');
            $tutoriais->imagem3 = $fileName;
        }
        if (!empty($request->file('imagem4'))) {
            $fileName = $request->file('imagem4')->store('public/images');
            $tutoriais->imagem4 = $fileName;
        }
        if (!empty($request->file('imagem5'))) {
            $fileName = $request->file('imagem5')->store('public/images');
            $tutoriais->imagem5 = $fileName;
        }

        if (!empty($request->file('video'))) {
            $fileNameVideo = $request->file('video')->store('public/videos');
            $tutoriais->video = $fileNameVideo;
        }

        $tutoriais->save();

        Session::flash('erro_msg', $resultado);
        return Redirect::to('painel/tutoriais');
    }

}
