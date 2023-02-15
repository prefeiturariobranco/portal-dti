<?php

namespace App\Http\Controllers\Dashboard\Unidades;

use App\Http\Controllers\Controller;
use App\Model\Unidades;
use Illuminate\Http\Request;

class ListarUnidadesController extends Controller
{
    public function index()
    {
        $Unidades  = Unidades::all();
        return view('painel.unidades.lista',compact('Unidades'));
    }
}
