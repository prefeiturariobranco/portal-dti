<?php

namespace App\Http\Controllers\Dashboard\Investimentos;

use App\Http\Controllers\Controller;
use App\Model\Investimentos;
use Illuminate\Http\Request;

class ListarInvestimentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('painel.investimentos.lista', [
            'investimentos' => Investimentos::where('ocultar', 0)->get(),
            'categoria' => Investimentos_categorias::where('ocultar', 0)->get(),

        ]);
    }


}
