<?php

namespace App\Http\Controllers\Dashboard\Categorias;

use App\Http\Controllers\Controller;
use App\Http\Requests\Categorias\CategoriasStoreFormRequest;
use App\Model\Icones_categorias;
use App\Model\Planejamentos;
use App\Model\Planejamentos_Categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CadastrarCategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plan = Planejamentos::with('planejamentos_categorias_id');
        return view('painel.categorias.cadastro', compact('plan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriasStoreFormRequest $request)
    {
        //
        $plan = Planejamentos::with('planejamentos_categorias_id');
        $iconeCategoria = Icones_categorias::create([
            'nome' => $request->post('nome'),
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = 'Categoria cadastrado com sucesso!';

        if (!$iconeCategoria) {
            $resultado['error'] = 2;
            $resultado['msg'] = 'Falha cadastrar categoria';
        }
        Session::flash('erro_msg', $resultado);
        return Redirect::to('/painel/categorias', compact('plan'));
    }

}
