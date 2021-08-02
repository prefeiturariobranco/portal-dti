<?php

namespace App\Http\Controllers\Dashboard\Aplicativos;

use App\Http\Controllers\Controller;
use App\Model\Aplicativos;
use Illuminate\Http\Request;

class ListarAplicativosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('painel.aplicativos.lista', [
            'aplicativos' => Aplicativos::where('ocultar', 0)->get(),
        ]);
    }


}
