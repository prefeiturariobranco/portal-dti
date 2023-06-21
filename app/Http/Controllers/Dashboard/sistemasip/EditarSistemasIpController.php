<?php

namespace App\Http\Controllers\Dashboard\sistemasip;

use App\Http\Controllers\Controller;

class EditarSistemasIpController extends Controller
{
    public function edit($id)
    {
        $sistemasip = sistemasip::findOrFail($id);
        return view('painel.sistemasip.cadastro');
    }

    public function update(Request $request, $id)
    {
        $sistemasip = sistemasipController::where('id', $request->post('sistemasip'))->update([
            'nome' => $request->nome,
            'ip' => $request->ip
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = 'Sistema cadastrado com sucesso!';

        if (!$sistemasip) {
            $resultado['error'] = 2;
            $resultado['msg'] = 'Falha ao cadastrar secretaria';
        }

        $sistemasip->save();

        Session::flash('erro_msg', $resultado);
        return redirect('/painel/sistemaip');
    }
}
