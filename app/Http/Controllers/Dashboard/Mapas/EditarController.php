<?php

namespace App\Http\Controllers\Dashboard\Mapas;

use App\Http\Controllers\Controller;
use App\Model\Documentos_categorias;
use App\Model\Mapas;
use App\Model\Mapas_Categorias;
use Illuminate\Http\Request;
use Illuminate\Session\SessionManager;
use Illuminate\Support\Facades\Session;

class EditarController extends Controller
{
    public function edit($id)
    {
        return view('painel.mapas.editar', [
            'mapa' => Mapas::where('id', $id)->first(),
            'categorias' => Mapas_Categorias::where('ocultar', 0)->get(),
        ]);
    }

    public function update(Request $request)
    {
        $mapa = Mapas::where('id', $request->post('mapa_id'))->update([
            'lat' => $request->post('lat'),
            'lng' => $request->post('lng'),
            'titulo' => $request->post('titulo'),
            'descricao' => $request->post('descricao'),
            'mapas_categorias_id' => $request->post('mapas_categorias_id')
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = 'Mapa alterado com sucesso!';

        if (!$mapa) {
            $resultado['error'] = 2;
            $resultado['msg'] = 'Falha ao alterar mapa';
        }

        Session::flash('erro_msg', $resultado);
        return redirect()->route('list.maps');
    }
}
