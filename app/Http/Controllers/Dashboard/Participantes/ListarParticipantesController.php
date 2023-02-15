<?php

namespace App\Http\Controllers\Dashboard\Participantes;

use App\Http\Controllers\Controller;
use App\Model\Participante;


class ListarParticipantesController extends Controller
{
    public function index()
    {
        $Participantes  = Participante::all();
        return view('painel.participantes.lista',compact('Participantes'));
    }
}
