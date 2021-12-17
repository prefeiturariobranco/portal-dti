<?php

namespace App\Http\Controllers\Dashboard\Cargos;

use App\Model\Cargos;
use App\Http\Controllers\Controller;
use App\Model\Departamentos;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
    }

    public function cadcreate()
    {
        return view('painel.cargos.cadastro');
    }

    public function index()
    {
        return view('painel.cargos.lista', [
            'cargos' => Cargos::all()
        ]);
    }

    public function delete($id)
    {
        dd('delete', $id);

    }

    public function edit($id)
    {
        dd('edita', $id);
    }
}
