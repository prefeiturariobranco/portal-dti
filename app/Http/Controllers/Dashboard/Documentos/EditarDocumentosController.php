<?php

namespace App\Http\Controllers\Dashboard\Documentos;

use App\Http\Controllers\Controller;
use App\Http\Requests\Documentos\DocumentosEditFormRequest;
use App\Http\Requests\Documentos\DocumentosFormRequest;
use App\Model\Documentos;
use App\Model\Documentos_arquivos;
use App\Model\Documentos_categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class EditarDocumentosController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('painel.documentos.editar', [
            'documento' => Documentos::where('id', $id)->first(),
            'categorias' => Documentos_categorias::where('ocultar', 0)->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(DocumentosFormRequest $request)
    {
        $documento = Documentos::where('id', $request->post('documento_id'))->update([
            'documentos_categorias_id' => $request->post('documentos_categorias_id'),
            'titulo' => $request->post('titulo'),
            'descricao' => $request->post('descricao'),
            'valor' => $request->post('valor'),
            'data_inicio' => $request->post('data_inicio'),
            'data_fim' => $request->post('data_fim'),
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = "Documento editado com sucesso!";

        if (!$documento) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha ao alterar documento";
        }

        Session::flash('erro_msg', $resultado);
        return Redirect::to('painel/documentos');

        $arquivos = $request->file('arquivo_documento');

        if ($arquivos != null) {
            foreach ($arquivos as $arquivo) {
                if (!$arquivo->storePubliclyAs('public/documentos/',
                    $arquivo->getClientOriginalName())) {
                    $resultado['error'] = 2;
                    $resultado['msg'] = "Falha ao enviar arquivo do documento";

                    Session::flash('erro_msg', $resultado);
                    return Redirect::to('painel/documentos');
                }

                $doc = Documentos_arquivos::create([
                    'caminho' => 'documentos/' . $arquivo->getClientOriginalName(),
                    'documentos_id' => $request->post('documento_id'),
                ]);
            }
        }
    }
}
