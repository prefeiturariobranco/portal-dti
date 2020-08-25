<?php

namespace App\Http\Controllers\Dashboard\Tutoriais;

use App\Http\Controllers\Controller;
use App\Model\Tutoriais;
use Illuminate\Http\Request;

class ListarTutoriaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('painel.tutoriais.lista', [
            'tutoriais' => Tutoriais::where('ocultar', 0)->get(),
        ]);
    }


}
