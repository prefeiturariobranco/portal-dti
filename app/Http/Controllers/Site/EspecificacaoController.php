<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Model\Contatos;
use App\Model\EspecificacaoTi;
use App\Model\Icones;
use App\Model\Icones_categorias;
use Illuminate\Http\Request;

class EspecificacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('site.especificacoes-tec', [
            'categorias' => Icones_categorias::where('ocultar', 0)->get(),
            'icones' => Icones::where('ocultar', 0)->get(),
            'especificacoes' => EspecificacaoTi::where('ocultar', 0)->get(),
        ]);


    }


}
