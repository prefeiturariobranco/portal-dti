<?php

namespace App\Http\Controllers\Dashboard\sistemasip;

use App\Http\Controllers\Controller;
use App\Model\SistemaIp;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EditarSistemasIpController extends Controller
{
    public function show($id)
    {
        return view('painel.sistemasip.editar', ['sistemaip' => SistemaIp::where('id', $id)->first()]);
    }

    public function edit($id)
    {
        $sistemaip = SistemaIp::findOrFail($id);
        return view('painel.sistemasip.editar', compact('sistemaip'));
    }

    public function update(Request $request)
    {
        try {
            $sistemaip = SistemaIp::findOrFail($request->post('sistema_id'))->update([
                'nome' => $request->post('nome'),
                'ip' => $request->post('ip'),
            ]);

            $resultado['error'] = 1;
            $resultado['msg'] = "Sistema alterado com sucesso!";

            if (!$sistemaip) {
                $resultado['error'] = 2;
                $resultado['msg'] = "Falha ao alterar sistema";
            }

            Session::flash('erro_msg', $resultado);
            return redirect('painel/sistemasip');
        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }

//    public function destroy($id)
//    {
//        $sistemaip = SistemaIp::where('id', $id)->update([
//            'ocultar' => 1,
//        ]);
//
//        $resultado['error'] = 1;
//        $resultado['msg'] = "Sistema removido com sucesso!";
//
//        if (!$sistemaip) {
//            $resultado['error'] = 2;
//            $resultado['msg'] = "Falha ao remover sistema";
//        }
//
//        Session::flash('erro_msg', $resultado);
//        return redirect('/painel/sistemaip');
//    }
}
