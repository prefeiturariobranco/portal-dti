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
//        dd($request->all());
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
            $fileName = time() . '.' . $request->file('imagem')->extension();
            $tutoriais->imagem = $fileName;
            $request->imagem->move(public_path('images'), $fileName);
        }
        if (!empty($request->file('imagem1'))) {
            $fileName = time() . '1.' . $request->file('imagem1')->extension();
            $tutoriais->imagem1 = $fileName;
            $request->imagem2->move(public_path('images'), $fileName);
        }
        if (!empty($request->file('imagem2'))) {
            $fileName = time() . '2.' . $request->file('imagem2')->extension();
            $tutoriais->imagem2 = $fileName;
            $request->imagem3->move(public_path('images'), $fileName);
        }
        if (!empty($request->file('imagem3'))) {
            $fileName = time() . '3.' . $request->file('imagem3')->extension();
            $tutoriais->imagem3 = $fileName;
            $request->imagem3->move(public_path('images'), $fileName);
        }
        if (!empty($request->file('imagem4'))) {
            $fileName = time() . '4.' . $request->file('imagem4')->extension();
            $tutoriais->imagem4 = $fileName;
            $request->imagem4->move(public_path('images'), $fileName);
        }
        if (!empty($request->file('imagem5'))) {
            $fileName = time() . '5.' . $request->file('imagem5')->extension();
            $tutoriais->imagem5 = $fileName;
            $request->imagem5->move(public_path('images'), $fileName);
        }

        if (!empty($request->file('video'))) {
//            dd($request->all());
            $videoFile = $request->file('video');
            $fileNameVideo = time() . $videoFile->getClientOriginalName();
            $path = public_path() . '/videos/';
            $videoFile->move($path, $fileNameVideo);
            $tutoriais->video = $fileNameVideo;
        }

        $tutoriais->save();

        Session::flash('erro_msg', $resultado);
        return Redirect::to('painel/tutoriais');
    }

}
