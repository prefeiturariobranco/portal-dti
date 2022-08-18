<?php

namespace App\Http\Controllers\Dashboard\Documentos;

use App\Http\Controllers\Controller;
use App\Http\Requests\Documentos\DocumentosFormRequest;
use App\Http\Requests\Documentos\DocumentosStoreFormRequest;
use App\Model\Documentos;
use App\Model\Documentos_arquivos;
use App\Model\Documentos_categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CadastrarDocumentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('painel.documentos.cadastro', [
            'categorias' => Documentos_categorias::where('ocultar', 0)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DocumentosFormRequest $request)
    {
        //
        $documento = Documentos::create([
            'documentos_categorias_id' => $request->post('documentos_categorias_id'),
            'titulo' => $request->post('titulo'),
            'descricao' => $request->post('descricao'),
            'valor' => $request->post('valor'),
            'data_inicio' => $request->post('data_inicio'),
            'data_fim' => $request->post('data_fim'),
            'criado_por' => Session::get('usuario')->id,
        ]);

        $resultado['error'] = 1;
        $resultado['msg'] = "Documento cadastrado com sucesso!";

        if (!$documento) {
            $resultado['error'] = 2;
            $resultado['msg'] = "Falha ao cadastrar documento";

            Session::flash('erro_msg', $resultado);
            return Redirect::to('painel/documentos');
        }

        $arquivos = $request->file('arquivo_documento');

        foreach ($arquivos as $arquivo) {
            if (!$arquivo->storePubliclyAs('public/documentos/', $arquivo->getClientOriginalName())) {
                $resultado['error'] = 2;
                $resultado['msg'] = "Falha ao enviar arquivo do documento";

                Session::flash('erro_msg', $resultado);
                return Redirect::to('painel/documentos');
            }

            $categoria = Documentos_arquivos::create([
                'caminho' => 'documentos/' . $arquivo->getClientOriginalName(),
                'documentos_id' => $documento->id,
            ]);
        }

        $resultado['error'] = 1;
        $resultado['msg'] = "Documento cadastrado com sucesso!";

        Session::flash('erro_msg', $resultado);
        return Redirect::to('painel/documentos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
