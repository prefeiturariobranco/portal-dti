<?php

namespace App\Http\Controllers\Dashboard\Subicones;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubIcones\SubIconesStoreFormRequest;
use App\Model\Icones;
use App\Model\Sub_Icone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CadastrarSubiconesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('painel.subicones.cadastro', [
            'icones' => Icones::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubIconesStoreFormRequest $request)
    {
        //
        $subIcone = Sub_Icone::create([
            'nome' => $request->post('nome'),
            'caminho' => $request->post('caminho'),
            'link'=> $request->post('link'),
            'icones_id' => $request->post('icones_id'),
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = 'Subicone cadastrado com sucesso!';

        if (!$resultado) {
            $resultado['error'] = 2;
            $resultado['msg'] = 'Falha ao cadastrar subicone';
        }

        Session::flash('erro_msg', $resultado);
        return Redirect::to('/painel/subicones');
    }
}
