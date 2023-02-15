<?php

namespace App\Http\Controllers\Dashboard\Reuniao;

use App\Http\Controllers\Controller;
use App\Model\Reuniao;
use App\Model\Unidades;
use App\Model\Usuarios;
use Illuminate\Http\Request;

class ListarReuniaoController extends Controller
{
    public function index()
    {
        $reunioes = Reuniao::all();
        return view('painel.reuniao.lista',compact('reunioes'));
    }
}
