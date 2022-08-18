<?php

namespace App\Http\Controllers\Dashboard\Secretarias;

use App\Http\Controllers\Controller;
use App\Model\Secretarias;
use Illuminate\Http\Request;

class ListarController extends Controller
{
    public function index()
    {
        $secretaria = Secretarias::all();
        return view('painel.secretarias.lista', compact('secretaria'));
    }
}
