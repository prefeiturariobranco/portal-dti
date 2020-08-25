<?php

namespace App\Http\Controllers\Dashboard\Investimentos;

use App\Http\Controllers\Controller;
use App\Http\Requests\Investimento\InvestimentoEditFormRequest;
use App\Model\Investimentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class EditarInvestimentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        //
        return view('painel.investimentos.editar', [
            'investimento' => Investimentos::where('id', $id)->first(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(InvestimentoEditFormRequest $request)
    {
        //
        $investimentos = Investimentos::where('id', $request->post('investimento_id'))->update([
            'nome' => $request->post('nome'),
            'valor' => str_replace(',', '.', $request->post('valor')),
            'cor' => $request->post('cor'),
        ]);

        $resultado['error'] = 0;
        $resultado['msg'] = "Investimento cadastrado com sucesso!";

        if (!$investimentos) {
            $resultado['error'] = 1;
            $resultado['msg'] = "Falha cadastrar investimento";
        }

        Session::flash('erro_msg', $resultado);
        return Redirect::to('painel/investimentos');
    }

}
