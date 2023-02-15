<?php

namespace App\Http\Controllers\Dashboard\Sistemas;

use App\Http\Controllers\Controller;
use App\Model\Sistemas;
use App\Model\Unidades;
use Illuminate\Http\Request;

class ListarSistemasController extends Controller
{
    public function index()
    {
        $Sistemas  = Sistemas::all();
        return view('painel.sistemas.lista',compact('Sistemas'));
    }
}
