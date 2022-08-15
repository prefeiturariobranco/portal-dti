<?php

namespace App\Http\Controllers\Dashboard\Mapas;

use App\Http\Controllers\Controller;
use App\Model\Mapas;
use App\Model\Mapas_Categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CadastrarController extends Controller
{
    public function create()
    {
        return view('painel.mapas.cadastro', [
            'categorias' => Mapas_Categorias::where('ocultar', 0)->get()
        ]);
    }

    public function store(Request $request)
    {
        $mapa = Mapas::create([
           'lat' => $request->post('lat'),
            'lng' => $request->post('lng'),
            'titulo' => $request->post('titulo'),
            'descricao' => $request->post('descricao'),
            'mapas_categorias_id' => $request->post('mapas_categorias_id')
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = 'Mapa cadastrado com sucesso!';

        if (!$mapa) {
            $resultado['error'] = 2;
            $resultado['msg'] = 'Erro ao cadastrar mapa';
        }

        Session::flash('erro_msg', $resultado);
        return redirect()->route('list.maps');
    }
}
