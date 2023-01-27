<?php

namespace App\Http\Controllers\Dashboard\Reuniao;

use App\Http\Controllers\Controller;
use App\Model\Participante;
use App\Model\Reuniao;
use App\Model\UsuariosReuniao;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function pdf($id)
    {
        $reuniao = Reuniao::findOrFail($id);
//        $participantes = Participante::where('tipo_participante_id', $id)->get();
        $usuarios = UsuariosReuniao::where('reuniao_id', $id)->get();
//        dd($usuarios);
        $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'enable_remote' => true,
            'ssl' => [
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ],
            'chroot' => public_path()
        ])
            ->setPaper('a4')
            ->loadView('painel.pdf',  compact('reuniao', 'usuarios'));
        return $pdf->stream();
    }
}
