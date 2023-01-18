<?php

namespace App\Http\Controllers\Dashboard\Unidades;

use App\Http\Controllers\Controller;
use App\Model\Unidades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EditarUnidadesController extends Controller
{
    public function edit($id)
    {
        return view('', [
            'unidade' => Unidades::where('id', $id)->first()
        ]);
    }

    public function update(Request $request)
    {
        $unidade = Unidades::where('id', $request->post('unidade_id'))->update([
            'nome_unidade' => $request->post('nome_unidade')
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = "Unidade alterada com sucesso!";

        if (!$unidade) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha ao alterar unidade";
        }

        Session::flash('erro_msg', $resultado);
        return redirect('');
    }

    public function destroy($id)
    {
        $unidade = Unidades::where('id', $id)->update([
            'ocultar' => 1,
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = "Unidade removida com sucesso!";

        if (!$unidade) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha ao remover unidade";
        }

        Session::flash('erro_msg', $resultado);
        return redirect('');
    }
}
