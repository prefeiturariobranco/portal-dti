<?php

namespace App\Http\Controllers\Dashboard\Documentos;

use App\Http\Controllers\Controller;
use App\Model\Documentos;
use App\Model\Documentos_arquivos;
use App\Model\Documentos_categorias;
use App\Model\Usuarios;
use App\User;
use Illuminate\Http\Request;

class ListarDocumentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('painel.documentos.lista', [
            'documentos' => Documentos::where('ocultar', 0)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $documento = Documentos::findOrFail($id);
        $user = Usuarios::findOrFail($id);
        $cat_doc = Documentos_categorias::findOrFail($id);
        $doc_ar = Documentos_arquivos::findOrFail($id);
        return view('painel.documentos.show', compact('documento', 'user','cat_doc', 'doc_ar'));
    }

    public function download($id)
    {
        $doc_ar = Documentos_arquivos::findOrFail($id);
        return view('painel.documentos.download', compact( 'doc_ar'));
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
