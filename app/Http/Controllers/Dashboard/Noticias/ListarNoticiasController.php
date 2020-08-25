<?php

namespace App\Http\Controllers\Dashboard\Noticias;

use App\Http\Controllers\Controller;
use App\Model\Postagens;
use Illuminate\Http\Request;

class ListarNoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('painel.noticiais.lista', [
            'novidades' => Postagens::where('ocultar', 0)->get(),
        ]);
    }

}
