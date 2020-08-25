<?php

namespace App\Http\Controllers\Dashboard\TiLocal;

use App\Http\Controllers\Controller;
use App\Http\Requests\TiLocal\TiLocalFormRequest;
use App\Model\Secretarias;
use App\Model\Ti_Local;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CadastrarTilocalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('painel.tilocal.cadastro', [
            'secretarias' => Secretarias::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TiLocalFormRequest $request)
    {
        //
        $tiLocal = Ti_Local::create([
            'nome' => $request->post('nome'),
            'telefone' => $request->post('telefone'),
            'email' => $request->post('email'),
            'secretaria_id' => $request->post('secretaria_id'),
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = 'Tilocal cadastrado com sucesso!';

        if (!$tiLocal) {
            $resultado['error'] = 2;
            $resultado['msg'] = 'Falha cadastrar tilocal';
        }

        Session::flash('erro_msg', $resultado);
        return Redirect::to('/painel/tilocal');
    }

}
