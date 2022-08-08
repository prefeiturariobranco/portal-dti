<?php

namespace App\Http\Controllers\Dashboard\Secretarias;

use App\Http\Controllers\Controller;
use App\Model\Secretarias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EditarController extends Controller
{
    public function edit($id)
    {
        $secretaria = Secretarias::findOrFail($id);
        return view('painel.secretarias.editar', compact('secretaria'));
    }

    public function update(Request $request)
    {
        $secretaria = Secretarias::where('id', $request->post('secretaria_id'))->update([
            'nome' => $request->nome,
            'sigla' => $request->sigla
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = 'Secretaria alterada com sucesso!';

        if (!$secretaria) {
            $resultado['error'] = 2;
            $resultado['msg'] = 'Falha ao alterar secretaria';
        }

        Session::flash('erro_msg', $resultado);
        return redirect('/painel/secretarias');
    }
}
