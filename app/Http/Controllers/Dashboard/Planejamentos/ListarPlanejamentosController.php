<?php

namespace App\Http\Controllers\Dashboard\Planejamentos;

use App\Http\Controllers\Controller;
use App\Model\Planejamentos;
use App\Model\Planejamentos_Categorias;
use Illuminate\Http\Request;

class ListarPlanejamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('painel.planejamentos.lista', [
            'planejamentos' => Planejamentos::where('ocultar', 0)->get(),
            'planejamentoCats' => Planejamentos_Categorias::where('ocultar', 0)->get(),
        ]);
    }

}
