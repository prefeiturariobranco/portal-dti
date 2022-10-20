<?php

namespace App\Http\Controllers\Dashboard\Anexos;

use App\Http\Controllers\Controller;
use App\Model\Documentos;
use App\Model\Documentos_arquivos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CadastrarAnexosController extends Controller
{
    public function create()
    {
        return view('painel.anexos.cadastro', [
            'documentos' => Documentos::where('ocultar', 0)->get()
        ]);
    }

    public function store(Request $request)
    {
        try {
            if (!empty($request->file('caminho'))) {
                $fileName = $request->file('caminho')->store('public/documentos');
            }

            $arquivos = Documentos_arquivos::create([
                'documentos_id' => $request->post('documentos_id'),
                'caminho' => $fileName
            ]);
            $arquivos->save();

            $resultado['error'] = 1;
            $resultado['msg'] = "Arquivos cadastrados com sucesso!";

            if (!$arquivos) {
                $resultado['error'] = 2;
                $resultado['msg'] = "Falha ao cadastrar arquivos.";
            }

            Session::flash('erro_msg', $resultado);
            return redirect('painel/documentos');
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }
}
