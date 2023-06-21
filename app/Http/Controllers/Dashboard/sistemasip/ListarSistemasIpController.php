<?php

namespace App\Http\Controllers\Dashboard\sistemasip;

use App\Http\Controllers\Controller;
use App\Model\SistemaIp;

class ListarSistemasIpController extends Controller
{
    public function index()
    {
        $SistemaIp = SistemaIp::all();
        return view('painel.sistemasip.lista', compact('SistemaIp'));
    }
}
