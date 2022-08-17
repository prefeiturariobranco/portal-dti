<?php

namespace App\Http\Controllers\Dashboard\Investimentos;

use App\Http\Controllers\Controller;
use App\Http\Requests\Investimento\InvestimentoStoreFormRequest;
use App\Model\Investimentos;
use App\Model\Investimentos_categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CadastrarInvestimentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('painel.investimentos.cadastro', [
            'categorias' => Investimentos_categorias::where('ocultar', 0)->orderBy('nome', 'ASC')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InvestimentoStoreFormRequest $request)
    {
        $investimento = Investimentos::create([
            'nome' => $request->post('nome'),
            'valor' => str_replace(',', '.', $request->post('valor')),
            'investimentos_categorias_id' => $request->post('categoria'),
            'cor' => $request->post('cor'),
            'criado_por' => Session::get('usuario')->id,
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = "Investimento cadastrado com sucesso!";

        if (!$investimento) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha ao cadastrar investimento";
        }
        Session::flash('erro_msg', $resultado);
        return Redirect::to('painel/investimentos');
    }


}
