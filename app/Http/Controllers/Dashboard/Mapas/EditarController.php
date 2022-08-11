<?php

namespace App\Http\Controllers\Dashboard\Mapas;

use App\Http\Controllers\Controller;
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
            'mapa' => Mapas::where('id', $id)->first()
        ]);
    }

    public function update(Request $request)
    {
        $mapa = Mapas::where('id', $request->post('mapa_id'))->update([
            'lat' => $request->lat,
            'lng' => $request->lng,
            'titulo' => $request->titulo,
            'descricao' => $request->descricao
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
